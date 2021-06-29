<template>
    <div>
            <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="6" viewBox="0 0 4 6">
                                <g id="Icon_20_Grey_Dropdown" data-name="Icon / 20 / Grey / Dropdown" transform="translate(-8 13) rotate(-90)">
                                    <path id="Triangle" d="M3,4,6,0H0Z" transform="translate(7 8)" fill="#ffe0e0"/>
                                </g>
                            </svg>
                            <span>Selling</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->


    <!-- Latest Blog Section Begin -->
    <section class="selling">

        <div class="container">
            <div class="row">
                <h2>Sell An Item <span class="open-tabs"><i class="fa fa-bars"></i></span> </h2>
            <!-- Compnent Here -->
            <side-bar></side-bar>
            <!-- End Component  -->
                <div class="col-xl-10 col-md-12">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="inner-content">
                            <!-- Tab1 Overview -->
                             <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <!-- Block Item -->
                                <div class="inner-item">
                                    <div class="row">
                                        <div class="col-lg-12 detalis border-0">
                                                 <div class="signup bg-trans">
                                                    <div class="container">
                                                        <div class="row text-center pt-0">
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <h2 class="pb-3 pt-4">Product Info</h2>
                                                                <form @submit.prevent="saveProduct" class="form-product">
                                                                    <div class="row">
                                                                        <div class="col-12 text-left">
                                                                             <label class="text-white" for="fName">Item Name</label>
                                                                            <input type="text" v-model="form.title" class="form-control" id="fName" placeholder="Item Name" required>
                                                                            <div v-if="form.errors.has('title')" class="alert alert-danger" v-html="form.errors.get('title')" />
                                                                        </div>
                                                                        <div class="col-4 select-product text-left">
                                                                            <label class="text-white" for="cats">Category</label>
                                                                            <v-select placeholder="Select Category" id='cats' v-model="form.category" :reduce="category => category.id"  label="title" :options="categories"></v-select>
                                                                            <div v-if="form.errors.has('type')" class="alert alert-danger" v-html="form.errors.get('type')" />
                                                                        </div>
                                                                              <div class="col-4 text-left">
                                                                            <label class="text-white" for="condition">Condition</label>
                                                                            <select name="type" v-model="form.condition" id="" class="custom-select m-2 form-control" required>
                                                                                <option selected disabled>Choose Condition</option>
                                                                                <option v-for="(condition, index) in conditions" :key="index" :value="index" > {{ condition }}</option>
                                                                            </select >
                                                                            <div v-if="form.errors.has('condition')" class="alert alert-danger" v-html="form.errors.get('condition')" />
                                                                        </div>
                                                                        <div class="col-4 text-left">
                                                                            <label class="text-white" for="brand">Brand</label>
                                                                            <input type="text" v-model="form.brand" class="form-control" id="brand" placeholder="Brand" required>
                                                                            <div v-if="form.errors.has('brand')" class="alert alert-danger" v-html="form.errors.get('brand')" />
                                                                        </div>
                                                                        <div class="col-4 text-left">
                                                                            <label class="text-white" for="type">Type</label>
                                                                            <select name="type" v-model="form.type" id="" class="custom-select m-2 form-control" required>
                                                                                <option selected disabled>Choose Type</option>
                                                                                <option v-for="(type, index) in types" :key="index" :value="type" > {{ index }}</option>
                                                                            </select >
                                                                            <div v-if="form.errors.has('type')" class="alert alert-danger" v-html="form.errors.get('type')" />
                                                                        </div>

                                                                        <div class="col-4 text-left">
                                                                            <label class="text-white" for="price">Price</label>
                                                                            <input type="number" v-model="form.price" min="1" class="form-control" id="price" placeholder="Price" required>
                                                                            <div v-if="form.errors.has('price')" id="price" class="alert alert-danger" v-html="form.errors.get('price')" />
                                                                        </div>
                                                                   
                                                                  
                                                                        <div class="col-12 mb-3 upload-img">
                                                                            <div class="alert alert-danger" :style="[imagenull ? {'display':'block'} :  {'display':'none'}]" v-if="imagenull">Image Cannot be empty</div>
                                                                            <UploadImages @change="handleImages" :max="12" maxError="Max files exceed" uploadMsg="upload product images" fileError="images files only accepted"/>
                                                                            <div v-if="form.errors.has('image')" class="alert alert-danger" v-html="form.errors.get('image')" />
                                                                        </div>
                                                                        <div class="col-12 mb-5 description">
                                                                            <label for="#description" style="color:white">Description</label>
                                                                            <textarea type="text" v-model="form.description" name="description" placeholder="description" id="description" class="form-control"></textarea>
                                                                            <div v-if="form.errors.has('description')" class="alert alert-danger" v-html="form.errors.get('description')" />
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-6 round">
                                                                                <label for="checkbox1" class="label-text" style="color:white; float:left">This Product has return policy</label>
                                                                                <input type="checkbox" v-model="form.return_policy" id="checkbox1" placeholder="Title" >
                                                                                <label for="checkbox1" class="ml-3"></label>
                                                                                <div v-if="form.errors.has('return_policy')" class="alert alert-danger" v-html="form.errors.get('return_policy')" />
                                                                            </div>
                                                                            <div class="col-6 round ">
                                                                                <label for="checkbox2" class='label-text' style="color:white; float:left">This Product accept best offer</label>
                                                                                <input type="checkbox" v-model="form.best_offer" id="checkbox2" placeholder="Title">
                                                                                <label for="checkbox2" class="ml-3"></label>
                                                                                <div v-if="form.errors.has('best_offer')" class="alert alert-danger" v-html="form.errors.get('best_offer')" />
                                                                            </div>
                                                                        </div>
                                                                           <div class="col-6">
                                                                            <input type="button" @click="draft" value="Save as Draft" class="form-control btn btn-primary" id="draft">
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input type="submit" :disabled="form.busy" value="Next" class="form-control" id="register">
                                                                        </div>


                                                                    </div>
                                                                </form>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>
    <!-- Latest Blog Section End -->
    </div>
</template>
<style scoped>
    select{
        display: block !important;
    }
    .round {
  position: relative;
  height: 50px;
}

.round label {
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 50%;
  cursor: pointer;
  height: 28px;
  left: 0;
  position: absolute;
  top: 0;
  width: 28px;
}

.round label:after {
  border: 2px solid #fff;
  border-top: none;
  border-right: none;
  content: "";
  height: 6px;
  left: 7px;
  opacity: 0;
  position: absolute;
  top: 8px;
  transform: rotate(-45deg);
  width: 12px;
}

.round input[type="checkbox"] {
  visibility: hidden;
}

.round input[type="checkbox"]:checked + label {
  background-color: #fd1266;
  border-color:#fd1266;
}

.round input[type="checkbox"]:checked + label:after {
  opacity: 1;
}

</style>
<script>
import SideBar from "./SidebarComponent";
import UploadImages from "vue-upload-drop-images";
import { createEditor } from 'vueditor';
export default ({

    components:{
        SideBar,
        UploadImages,
    },
      data:()=>({
        details : "",
        description: "",
        id: null,
        types: [],
        categories: [],
        conditions: {},
        categoryx: null,
        imagenull: false,
           options: [
            'foo',
            'bar',
            'baz'
            ],
        form : new form({
            title : null,
            type : null,
            condition:null,
            image : {},
            brand : null,
            description: null,
            category: null,
            return_policy: false,
            price: null,
            best_offer: false,
            draft: 1,
        }),
    }),
    methods:{
        async saveProduct(){
           this.$Progress.start();
           this.form.description = this.description.getContent();
           this.form.best_offer = this.form.type == 1 ? 1 :0;
           this.form.return_policy = this.form.return_policy == true ? 1 : 0;
           this.form.best_offer = this.form.best_offer == true ? 1 : 0;
           if( jQuery.isEmptyObject(this.form.image)  ){
               this.imagenull = true;
               this.$Progress.fail();
           }else{
            const response = await this.form.post('/api/product/store').then((response)=>{
                this.$Progress.finish();
                this.indicator();
                this.form.reset();
                console.log(response.data);
                this.$router.push('/step_two/'+response.data.product_id);
            }).catch((error)=>{
                this.$Progress.fail();
                console.log(error);
            });
           }

        },
        handleImages(files){
            this.form.image = files;
          },
        draft(){
            this.form.draft = 1;
            this.saveProduct();
        },
        indicator(){
         if(this.form.draft == 1){
                    Toast.fire({
                        icon: 'success',
                        title: 'Product Drafted Successfully'
                    });
                }else{
                    Toast.fire({
                        icon: 'success',
                        title: 'Product Created Successfully'
                    });
                }
        }
    },

    beforeCreate() {
        this.$Progress.start();
    },
    mounted(){
        Fire.$emit('mounted');
        this.$Progress.finish();
        this.description = createEditor('#description', {
            toolbar: [
                'removeFormat', 'undo', '|', 'elements', 'fontName', 'fontSize', 'foreColor', 'backColor', 'divider',
                'bold', 'italic', 'underline', 'strikeThrough', 'links', 'divider', 'subscript', 'superscript',
                'divider', 'justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull', '|', 'indent', 'outdent',
                'insertOrderedList', 'insertUnorderedList', '|', 'picture', 'tables', '|', 'switchView'
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

        axios.get('/api/product/getProductData').then((response) => {
            this.types = response.data.types;
            this.categories = response.data.categories;
            this.conditions = response.data.conditions;
        });
    }
})
</script>
