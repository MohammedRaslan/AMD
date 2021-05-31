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
                                        <div class="col-lg-12 detalis">
                                                 <div class="signup">
                                                    <div class="container">
                                                        <div class="row text-center pt-0">
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <h2 class="pb-3 pt-4">Prodduct Info</h2>
                                                                <form @submit.prevent="saveProduct">                        
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input type="text" v-model="form.sku" class="form-control" id="fName" placeholder="SKU" required>
                                                                            <div v-if="form.errors.has('sku')" class="alert alert-danger" v-html="form.errors.get('sku')" />

                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input type="text" v-model="form.title" class="form-control" id="fName" placeholder="Title" required>
                                                                            <div v-if="form.errors.has('title')" class="alert alert-danger" v-html="form.errors.get('title')" />

                                                                        </div>
                                                                        <div class="col-4">
                                                                            <input type="text" v-model="form.type" class="form-control" id="email" placeholder="Type" required>
                                                                            <select name="" id="" class="custom-select">
                                                                                <option v-for="(type, index) in types" :key="index">{{ type.key }}</option>
                                                                            </select>
                                                                            <div v-if="form.errors.has('type')" class="alert alert-danger" v-html="form.errors.get('type')" />
                                                                        </div>
                                                                        
                                                                        <div class="col-4">
                                                                            <input type="number" v-model="form.price" min="1" class="form-control" id="rePassword" placeholder="Price" required>
                                                                            <div v-if="form.errors.has('price')" class="alert alert-danger" v-html="form.errors.get('price')" />
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <input type="text" v-model="form.brand   " class="form-control" id="lName" placeholder="Brand" required>
                                                                            <div v-if="form.errors.has('brand')" class="alert alert-danger" v-html="form.errors.get('brand')" />
                                                                        </div>

                                                                        <div class="col-12 mb-3">
                                                                            <UploadImages @change="handleImages" :max="7" maxError="Max files exceed" uploadMsg="upload product images" fileError="images files only accepted"/>
                                                                            <div v-if="form.errors.has('image')" class="alert alert-danger" v-html="form.errors.get('image')" />
                                                                        </div>
                                                                        <div class="col-12 mb-5">
                                                                            <label for="#description" style="color:white">Description</label>
                                                                            <textarea type="text" v-model="form.description" name="description" placeholder="description" id="description" class="form-control"></textarea>
                                                                            <div v-if="form.errors.has('description')" class="alert alert-danger" v-html="form.errors.get('description')" />
                                                                        </div>

                                                                        <div class="col-12 mb-5">
                                                                            <label for="#details" style="color:white">Details</label>
                                                                            <input type="text" v-model="form.details" class="form-control" id="details" placeholder="Details" required>
                                                                            <div v-if="form.errors.has('details')" class="alert alert-danger" v-html="form.errors.get('details')" />
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input type="submit" :disabled="form.busy" value="Publish Product" class="form-control" id="register">
                                                                        </div>
                                                                       <div class="col-6">
                                                                            <input type="button" @click="draft" value="Save as Draft" class="form-control btn btn-primary" id="draft">
                                                                        </div>
                                                        
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <!-- <div class="col-lg-6 col-md-6 col-sm-12">
                                                                <div class="blog__item">
                                                                    <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-2.jpg"></div>
                                                                    <div class="blog__item__text">
                                                                        <span><img src="img/icon/calendar.png" alt=""> 21 February 2020</span>
                                                                        <h5>Eternity Bands Do Last Forever</h5>
                                                                        <a href="#">Read More</a>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>


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
        types: [],
        form : new form({
            sku : null,
            title : null,
            type : null,
            image : {},
            brand : null,
            description: null,
            details: null,
            return_policy: 1,
            price: null,
            best_offer: 1,
            condition: 'ccc',
            draft: 0,
        }),
    }),
    methods:{
        async saveProduct(){
           this.$Progress.start();
           this.form.details = this.details.getContent();
           this.form.description = this.description.getContent();
            const response = await this.form.post('/api/product/store').then((response)=>{
                this.$Progress.finish();
                this.indicator();
                this.form.clear();
            }).catch((error)=>{
                this.$Progress.fail();
                console.log(error);
            });
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
        this.details =  createEditor('#details', {
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
            this.types = response.data.product_types;
            console.log(this.types);
        });
    }
})
</script>
