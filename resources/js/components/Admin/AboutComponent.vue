<template>
<div>
    <div class="row p-2 w-100" style="justify-content:flex-end"> 
        <button class="btn btn-success pt-2 col-1" data-target="#exampleModalCenter" data-toggle="modal" data-backdrop="static" data-keyboard="false">Add</button>
    </div>
    <div class="projects m-3">
        <div class="tableFilters row m-4">
            <input class="input col-6 form-control" type="text" v-model="tableData.search" placeholder="Search Table"
                   @input="getAbouts()">

            <div class="control col-6">
                <div class="select">
                    <select class="form-control" v-model="tableData.length" @change="getAbouts()">
                        <option v-for="(records, index) in perPage" :key="index" :value="records">{{records}}</option>
                    </select>
                </div>
            </div>
        </div>
        <datatable :columns="columns" :sortKey="sortKey" :sortOrders="sortOrders" @sort="sortBy">
            <tbody>
                <tr v-for="(faq, index) in faqs" :key="faq.id">
                    <td>{{ index + 1 }}</td>
                    <td>{{faq.title}}</td>
                    <td>{{faq.order}}</td>
                    <td >
                        <button type="button" @click="changeStatus(faq.id)" :id="'btn_'+faq.id" v-if="faq.status == 1" class="btn btn-primary">Active</button>
                        <button type="button" class="btn btn-danger" @click="changeStatus(faq.id)" :id="'btn_'+faq.id" v-else>DeActivate</button>
                    </td>
                </tr>
            </tbody>
        </datatable>
        <pagination :pagination="pagination"
                    @prev="getAbouts(pagination.prevPageUrl)"
                    @next="getAbouts(pagination.nextPageUrl)">
        </pagination>
    </div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1"  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Create Article</h5>
        <button type="button" class="close" @click="closeModal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form @submit.prevent="CreateFaq(form.id)">
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control"  v-model="form.title" id="exampleInputEmail1" aria-describedby="emailHelp" required> 
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <input type="text" class="form-control"  v-model="form.body" id="body" required>
            </div>
            <div class="form-group mb-3">
                <label for="exampleInputPassword1">Choose Image</label>

            <div class="custom-file">
                <input type="file" @change="processFile($event)" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01"  required> 
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Order</label>
                <input type="number" class="form-control"  v-model="form.order" id="exampleInputPassword1">
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
<style scoped>
    .modal-dialog{
        max-width: 100% !important;
        width: 1000px;
    }
</style>
<script>
import Datatable from './Datatable/Datatable.vue';
import Pagination from './Datatable/Pagination.vue';
import { createEditor } from 'vueditor';
export default {
    components: { datatable: Datatable, pagination: Pagination },
    created() {
        this.getAbouts();
    },
    data() {
        let sortOrders = {};

        let columns = [
            {label: '#'},
            {label: 'title', name: 'title'},
            {label: 'order', name: 'order'},
            {label: 'status', name: 'status' },
        ];

        columns.forEach((column) => {
           sortOrders[column.name] = -1;
        });
        return {
            faqs: [],
            body: "",
            form : new form({
                id: null,
                title : null,
                body : null,
                order: null,
                image: null,
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
        getAbouts(url = '/api/getAbouts') {
        let token = localStorage.getItem('token');
            this.tableData.draw++;
            axios.get(url, {params: this.tableData})
                .then(response => {
                    let data = response.data;
                    if (this.tableData.draw == data.draw) {
                        this.faqs = data.data.data;
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
            this.getAbouts();
        },
        getIndex(array, key, value) {
            return array.findIndex(i => i[key] == value)
        },
        closeModal(){
            document.querySelectorAll('.modal-backdrop').forEach(function(a) {
                a.remove()
            })
        },
        async changeStatus(id){
            this.$Progress.start();
            const response = await axios.get('/api/about/changeStatus/'+id).then((response) =>{
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
        async CreateFaq(){
            this.$Progress.start();
            this.form.body = this.body.getContent();
            const result = await this.form.post('/api/about/store').then((response) => {
                if(response.data != null){
                    this.$Progress.finish();
                    this.faqs.push(response.data);
                    this.form.reset();
                    this.$Progress.finish();
                }
            });
        },
        processFile(event) {
            this.form.image = event.target.files[0]
        }
    },
    mounted(){
               this.body =  createEditor('#body', {
                    toolbar: [
                        'removeFormat', 'undo', '|', 'elements', 'fontName', 'fontSize', 'foreColor', 'backColor', 'divider',
                        'bold', 'italic', 'underline', 'strikeThrough', 'links', 'divider', 'subscript', 'superscript',
                        'divider', 'justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull', '|', 'indent', 'outdent',
                        'insertOrderedList', 'insertUnorderedList', '|', 'picture',  '|', 'switchView'
                    ],
                    fontName: [
                        {val: 'arial black'}, 
                        {val: 'times new roman'}, 
                        {val: 'Courier New'}
                    ],
                    fontSize: [
                        '12px', '14px', '16px', '18px', '20px', '24px', '28px', '32px', '36px'
                    ],
            });
    }
};
</script>
