<template>
<div>
    <div class="row p-2 w-100" style="justify-content:flex-end"> 
        <button class="btn btn-success pt-2 col-1" data-target="#exampleModalCenter" data-toggle="modal" data-backdrop="static" data-keyboard="false">Add</button>
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
                    <td><button class="btn btn-primary btn-sm" :id="user.id"  data-target="#exampleModalCenter" data-toggle="modal" data-backdrop="static" data-keyboard="false" @click="userInfo(user.id)"> <i class="fa fa-edit"></i> </button></td>
                </tr>
            </tbody>
        </datatable>
        <pagination :pagination="pagination"
                    @prev="getUsers(pagination.prevPageUrl)"
                    @next="getUsers(pagination.nextPageUrl)">
        </pagination>
    </div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1"  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
        <button type="button" class="close" @click="closeModal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form @submit.prevent="ManageUser(form.id)">
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control"  v-model="form.user_name" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">First Name</label>
                <input type="text" class="form-control"  v-model="form.first_name" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Last Name</label>
                <input type="text"  class="form-control"  v-model="form.last_name" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="text" class="form-control"  v-model="form.email" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Phone</label>
                <input type="text" class="form-control"  v-model="form.phone" id="exampleInputPassword1">
            </div>
             <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="text" class="form-control"  v-model="form.password" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Role</label>
                <div class="select">
                    <select class="form-control" v-model="form.role">
                        <option disabled>Choose</option>
                        <option v-for="(role, index) in roles"   :key="index" :value="role.value" :selected="form.role == role.value">{{role.role}}</option>
                    </select>
                </div>
                <!-- <input type="number" class="form-control"  v-model="user.role" id="exampleInputPassword1"> -->
            </div>
            <div class="modal-footer">
                <button type="button" class="close btn btn-secondary" @click="closeModal" data-dismiss="modal">Close</button>
                <button type="submit"  class="btn btn-primary">Save changes</button>
            </div>
        </form>
      </div>

    </div>
  </div>
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
        let roles = [
            {role: 'Admin', value: 0},
            {role: 'User', value: 1}
        ];
        return {
            users: [],
            roles,
            form : new form({
                id: null,
                user_name : null,
                first_name : null,
                last_name: null,
                email: null,
                role: null,
                phone: null,
                password: null
            }),
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
        async userInfo(id){
            await axios.get('/api/user/getUserInfo/'+id).then((response) => {
                this.form.id = response.data.id;
                this.form.user_name = response.data.user_name;
                this.form.first_name = response.data.first_name;
                this.form.last_name = response.data.last_name;
                this.form.email = response.data.email;
                this.form.phone = response.data.phone;
                this.form.role = response.data.role;
            });
        },
        closeModal(){
            document.querySelectorAll('.modal-backdrop').forEach(function(a) {
                a.remove()
            })
        },
        async ManageUser(id = null){
            this.$Progress.start();
            if(id !=  null){
                const result = await this.form.post('/api/user/edit/'+id).then((response) => {
                    if(response.data = true){
                        this.$Progress.finish();
                    }
                });
            }else{
                   const result = await this.form.post('/api/user/createFromAdmin').then((response) => {
                    if(response.data != null){
                        this.$Progress.finish();
                        this.users.push(response.data);
                        this.form.reset();
                    }
                });
            }
       
        }
    }
};
</script>
