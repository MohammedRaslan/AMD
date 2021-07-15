<template>
<div>

    <div class="projects m-3">
        <div class="tableFilters row m-4">
            <input class="input col-6 form-control" type="text" v-model="tableData.search" placeholder="Search Table"
                   @input="getProducts()">

            <div class="control col-6">
                <div class="select">
                    <select class="form-control" v-model="tableData.length" @change="getProducts()">
                        <option v-for="(records, index) in perPage" :key="index" :value="records">{{records}}</option>
                    </select>
                </div>
            </div>
        </div>
        <datatable :columns="columns" :sortKey="sortKey" :sortOrders="sortOrders" @sort="sortBy">
            <tbody>
                <tr v-for="(product, index) in products" :key="product.id">
                    <td>{{ index + 1 }}</td>
                    <td>{{product.sku}}</td>
                    <td>{{product.title}}</td>
                    <td>{{product.brand}}</td>
                    <td>{{product.price}}</td>
                    <td>{{product.best_offer == 1 ? 'Accept Offer' : 'No'}}</td>
                    <td>{{product.user.user_name}}</td>
                    <td >
                        <button type="button" @click="changeStatus(product.id)" :id="'btn_'+product.id" v-if="product.status == 1" class="btn btn-primary">Active</button>
                        <button type="button" class="btn btn-danger" @click="changeStatus(product.id)" :id="'btn_'+product.id" v-else>DeActivate</button>
                    </td>
                </tr>
            </tbody>
        </datatable>
        <pagination :pagination="pagination"
                    @prev="getProducts(pagination.prevPageUrl)"
                    @next="getProducts(pagination.nextPageUrl)">
        </pagination>
    </div>


</div>
</template>

<script>

import Datatable from './Datatable/Datatable.vue';
import Pagination from './Datatable/Pagination.vue';
export default {
    
    components: { datatable: Datatable, pagination: Pagination },
    created() {
        this.getProducts();
    },
    data() {
        let sortOrders = {};

        let columns = [
            {label: '#'},
            {label: 'sku', name: 'sku'},
            {label: 'title', name: 'title'},
            {label: 'brand', name: 'brand'},
            {label: 'price', name: 'price'},
            {label: 'best_offer', name: 'best_offer'},
            {label: 'user_id', name: 'user_id'},
            {label: 'status', name: 'status' },
        ];

        columns.forEach((column) => {
           sortOrders[column.name] = -1;
        });
        return {
            products: [],
            columns: columns,
            sortKey: 'id',
            sortOrders: sortOrders,
            perPage: ['10', '20', '30'],
            tableData: {
                draw: 0,
                length: 10,
                search: '',
                column: 0,
                dir: 'desc',
            },
            pagination: {
                lastPage: '',
                currentPage: '',
                total: '',
                lastPageUrl: '',
                nextPageUrl: '',
                prevPageUrl: '',
                from: '',
                to: ''
            },
        }
    },

    methods: {
        getProducts(url = '/api/getProducts') {
        let token = localStorage.getItem('token');
            this.tableData.draw++;
            axios.get(url, {params: this.tableData})
                .then(response => {
                    let data = response.data;
                    if (this.tableData.draw == data.draw) {
                        this.products = data.data.data;
                        this.configPagination(data.data);
                    }
                })
                .catch(errors => {
                    console.log(errors);
                });
        },
        configPagination(data) {
            this.pagination.lastPage = data.last_page;
            this.pagination.currentPage = data.current_page;
            this.pagination.total = data.total;
            this.pagination.lastPageUrl = data.last_page_url;
            this.pagination.nextPageUrl = data.next_page_url;
            this.pagination.prevPageUrl = data.prev_page_url;
            this.pagination.from = data.from;
            this.pagination.to = data.to;
        },
        sortBy(key) {
            this.sortKey = key;
            this.sortOrders[key] = this.sortOrders[key] * -1;
            this.tableData.column = this.getIndex(this.columns, 'name', key);
            this.tableData.dir = this.sortOrders[key] === 1 ? 'asc' : 'desc';
            this.getProducts();
        },
        getIndex(array, key, value) {
            return array.findIndex(i => i[key] == value)
        },
        async changeStatus(id){
            this.$Progress.start();
            const response = await axios.get('/api/product/changeStatus/'+id).then((response) =>{
            this.$Progress.finish();
                if(response.data.status == 0){
                    document.getElementById("btn_"+id).classList.remove('btn-primary');
                    document.getElementById("btn_"+id).innerHTML = 'DeActivate'
                    document.getElementById("btn_"+id).classList.add('btn-danger');
                }else{
                    document.getElementById("btn_"+id).classList.remove('btn-danger');
                    document.getElementById("btn_"+id).innerHTML = 'Active'
                    document.getElementById("btn_"+id).classList.add('btn-primary');
                }
            });
        },
    }
};
</script>
