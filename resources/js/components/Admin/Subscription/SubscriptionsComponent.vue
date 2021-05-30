<template>
<div>
    <div class="row p-2 w-100" style="justify-content:flex-end"> 
        <router-link to="/admin/AddSubscription" class="btn btn-success pt-2 col-1" >Add</router-link>
    </div>
    <div class="projects m-3">
        <div class="tableFilters row m-4">
            <input class="input col-6 form-control" type="text" v-model="tableData.search" placeholder="Search Table"
                   @input="getSubscriptions()">

            <div class="control col-6">
                <div class="select">
                    <select class="form-control" v-model="tableData.length" @change="getSubscriptions()">
                        <option v-for="(records, index) in perPage" :key="index" :value="records">{{records}}</option>
                    </select>
                </div>
            </div>
        </div>
        <datatable :columns="columns" :sortKey="sortKey" :sortOrders="sortOrders" @sort="sortBy">
            <tbody>
                <tr v-for="(subscription, index) in subscriptions" :key="subscription.id">
                    <td>{{ index + 1 }}</td>
                    <td>{{subscription.title}}</td>
                    <td>{{subscription.fees}}</td>
                    <td>{{subscription.order}}</td>
                    <td><button class="btn btn-primary btn-sm" :id="subscription.id" > <i class="fa fa-edit"></i> </button></td>
                </tr>
            </tbody>
        </datatable>
        <pagination :pagination="pagination"
                    @prev="getSubscriptions(pagination.prevPageUrl)"
                    @next="getSubscriptions(pagination.nextPageUrl)">
        </pagination>
    </div>
</div>
</template>

<script>
import Datatable from '../Datatable/Datatable.vue';
import Pagination from '../Datatable/Pagination.vue';
export default {
    components: { datatable: Datatable, pagination: Pagination },
    created() {
        this.getSubscriptions();
    },
    data() {
        let sortOrders = {};

        let columns = [
            {label: '#'},
            {label: 'Title', name: 'title'},
            {label: 'Fees', name: 'fees'},
            {label: 'Order', name: 'order' },
        ];

        columns.forEach((column) => {
           sortOrders[column.name] = -1;
        });
        return {
            subscriptions: [],
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
        getSubscriptions(url = '/api/getSubscriptions') {
        let token = localStorage.getItem('token');
            this.tableData.draw++;
            axios.get(url, {params: this.tableData})
                .then(response => {
                    let data = response.data;
                    if (this.tableData.draw == data.draw) {
                        this.subscriptions = data.data.data;
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
            this.getSubscriptions();
        },
        getIndex(array, key, value) {
            return array.findIndex(i => i[key] == value)
        },
    }
};
</script>
