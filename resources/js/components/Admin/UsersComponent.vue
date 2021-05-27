<template>
<div>
    <div class="row p-2 w-100" style="justify-content:flex-end"> 
        <button class="btn btn-success pt-2 col-1" >Add</button>
    </div>
    <div class="projects m-3">
        <div class="tableFilters row m-4">
            <input class="input col-6 form-control" type="text" v-model="tableData.search" placeholder="Search Table"
                   @input="getUsers()">

            <div class="control col-6">
                <div class="select">
                    <select class="form-control" v-model="tableData.length" @change="getUsers()">
                        <option v-for="(records, index) in perPage" :key="index" :value="records">{{records}}</option>
                    </select>
                </div>
            </div>
        </div>
        <datatable :columns="columns" :sortKey="sortKey" :sortOrders="sortOrders" @sort="sortBy">
            <tbody>
                <tr v-for="(user, index) in users" :key="user.id">
                    <td>{{ index + 1 }}</td>
                    <td>{{user.first_name}}</td>
                    <td>{{user.last_name}}</td>
                    <td>{{user.email}}</td>
                    <td><button class="btn btn-primary btn-sm" :id="user.id" > <i class="fa fa-edit"></i> </button></td>
                </tr>
            </tbody>
        </datatable>
        <pagination :pagination="pagination"
                    @prev="getUsers(pagination.prevPageUrl)"
                    @next="getUsers(pagination.nextPageUrl)">
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
        this.getUsers();
    },
    data() {
        let sortOrders = {};

        let columns = [
            {label: '#'},
            {label: 'first_name', name: 'first_name'},
            {label: 'last_name', name: 'last_name'},
            {label: 'email', name: 'email' },
        ];

        columns.forEach((column) => {
           sortOrders[column.name] = -1;
        });
        return {
            users: [],
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
        getUsers(url = '/api/getUsers') {
        let token = localStorage.getItem('token');
// {headers:{
//                     'Accept' : 'application/json',
//                     'Content-Type' :'application/json',
//                     'Authorization': `Bearer ${token}`
//             }},
            this.tableData.draw++;
            axios.get(url, {params: this.tableData})
                .then(response => {
                    let data = response.data;
                    if (this.tableData.draw == data.draw) {
                        this.users = data.data.data;
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
            this.getUsers();
        },
        getIndex(array, key, value) {
            return array.findIndex(i => i[key] == value)
        },
    }
};
</script>
