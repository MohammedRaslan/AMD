<template>
<div>
    <div class="row p-2 w-100" style="justify-content:flex-end"> 
        <button class="btn btn-success pt-2 col-1" data-target="#exampleModalCenter" data-toggle="modal" data-backdrop="static" data-keyboard="false">Add</button>
    </div>
    <div class="projects m-3">
        <div class="tableFilters row m-4">
            <input class="input col-6 form-control" type="text" v-model="tableData.search" placeholder="Search Table"
                   @input="getCategories()">

            <div class="control col-6">
                <div class="select">
                    <select class="form-control" v-model="tableData.length" @change="getCategories()">
                        <option v-for="(records, index) in perPage" :key="index" :value="records">{{records}}</option>
                    </select>
                </div>
            </div>
        </div>
        <datatable :columns="columns" :sortKey="sortKey" :sortOrders="sortOrders" @sort="sortBy">
            <tbody>
                <tr v-for="(category, index) in categories" :key="category.id">
                    <td>{{ index + 1 }}</td>
                    <td>{{category.title}}</td>
                    <td>{{category.order}}</td>
                    <td >
                        <button type="button" @click="changeStatus(category.id)" :id="'btn_'+category.id" v-if="category.status == 1" class="btn btn-primary">Active</button>
                        <button type="button" class="btn btn-danger" @click="changeStatus(category.id)" :id="'btn_'+category.id" v-else>DeActivate</button>
                    </td>
                    <td><button class="btn btn-primary btn-sm" > <i class="fa fa-edit"></i> </button></td>
                </tr>
            </tbody>
        </datatable>
        <pagination :pagination="pagination"
                    @prev="getCategories(pagination.prevPageUrl)"
                    @next="getCategories(pagination.nextPageUrl)">
        </pagination>
    </div>


<!-- Modal -->
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
        <form @submit.prevent="createCategory">
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" v-model="form.title" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Order</label>
                <input type="number" min="0" class="form-control" v-model="form.order" id="exampleInputPassword1">
            </div>
              <div class="col-12 mb-3 upload-img">
                    <div class="alert alert-danger" :style="[imagenull ? {'display':'block'} :  {'display':'none'}]" v-if="imagenull">Image Cannot be empty</div>
                       <UploadImages @change="handleImages" :max="12" maxError="Max files exceed" uploadMsg="Upload Item Images (up to 12 image)" fileError="images files only accepted"/>
                    <div v-if="form.errors.has('image')" class="alert alert-danger" v-html="form.errors.get('image')" />
               </div>
            <div class="modal-footer">
                <button type="button" class="close btn btn-secondary" @click="closeModal" data-dismiss="modal">Close</button>
                <button type="submit" :disabled="form.busy" class="btn btn-primary">Save changes</button>
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
import UploadImages from "vue-upload-drop-images";

export default {
    
    components: { datatable: Datatable, pagination: Pagination ,  UploadImages, },
    created() {
        this.getCategories();
    },
    data() {
        let sortOrders = {};

        let columns = [
            {label: '#'},
            {label: 'title', name: 'title'},
            {label: 'order', name: 'order'},
            {label: 'image', name: 'image'},
            {label: 'status', name: 'status' },
        ];

        columns.forEach((column) => {
           sortOrders[column.name] = -1;
        });
        return {
            categories: [],
            imagenull: false,
            form : new form({
                title : null,
                order : null,
                image : null
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
        getCategories(url = '/api/getCategories') {
        let token = localStorage.getItem('token');
            this.tableData.draw++;
            axios.get(url, {params: this.tableData})
                .then(response => {
                    let data = response.data;
                    if (this.tableData.draw == data.draw) {
                        this.categories = data.data.data;
                        this.configPagination(data.data);
                    }
                })
                .catch(errors => {
                    console.log(errors);
                });
        },
     handleImages(files){
            this.form.image = files;
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
            this.getCategories();
        },
        getIndex(array, key, value) {
            return array.findIndex(i => i[key] == value)
        },
        async createCategory(){
            this.$Progress.start();
            const response = await this.form.post('/api/category/store').then((response) => {
                this.categories.push(response.data);
                this.$Progress.finish();
                //this.form.reset();
            });
        },
        async changeStatus(id){
            this.$Progress.start();
            const response = await axios.get('/api/category/changeStatus/'+id).then((response) =>{
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
        closeModal(){
            document.querySelectorAll('.modal-backdrop').forEach(function(a) {
                a.remove()
            })
        }

    }
};
</script>
