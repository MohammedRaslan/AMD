<template>
<div>
    <div class="section-body">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center">
                <div class="header-action">
                    <h1 class="page-title">Dashboard</h1>
                    <ol class="breadcrumb page-breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create User</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="section-body mt-4">
        <div class="container-fluid">
            <div class="tab-conent">
                <div class="tab-pane fade show active" id="admin-Dashboard" role="tabpanel">
                    <div class="row">
                        <form @submit.prevent="createSubscription" enctype="multipart/form-data" class="col-12">
                     
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Title</label>
                                <input type="text" class="form-control " v-model="form.title" name="title"  id="inputEmail4"  placeholder="Title" required>
                                <div v-if="form.errors.has('title')" class="alert alert-danger" v-html="form.errors.get('title')" />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Fees</label>
                                <input type="number" class="form-control" v-model="form.fees" name="fees" id="inputPassword4" placeholder="Fees" required>
                                <div v-if="form.errors.has('fees')" class="alert alert-danger" v-html="form.errors.get('fees')" />
                            </div>
                            </div> 
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4"></label>
                                    <input type="number" name="order" class="form-control" v-model="form.order" id="inputEmail4" placeholder="Order" required>
                                    <div v-if="form.errors.has('order')" class="alert alert-danger" v-html="form.errors.get('order')" />
                                </div>
                            </div>       
                            <div class="row justify-content-center mb-3">
                                <button type="submit" class="btn btn-primary w-50">Create</button>
        
                            </div>
                        </form>
                        
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>

export default ({
    data: ()=>({
        message: null,
        form: new form({
            title: '',
            fees: '',
            order: '',
        }),
    }),
    methods:{
       async createSubscription(){
            this.$Progress.start();
            const response = await this.form.post('/api/createSubscription').then((response) =>{
            this.$Progress.finish();

            }).catch((error) =>{
            this.$Progress.fail();

            });
        }
    }
})
</script>
