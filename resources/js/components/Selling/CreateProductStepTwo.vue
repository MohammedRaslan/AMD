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
                                                                <h2 class="pb-3 pt-4">Complete Product Info</h2>
                                                                <form @submit.prevent="saveProduct">                        
                                                                    <div class="row">
       
                                                                        <div class="col-4">
                                                                            <input type="text" v-model="form.doll_size" class="form-control" id="fName" placeholder="Item size" >
                                                                            <div v-if="form.errors.has('doll_size')" class="alert alert-danger" v-html="form.errors.get('doll_size')" />
                                                                        </div>
                                                                          <div class="col-4">
                                                                            <input type="text" v-model="form.quantity" class="form-control" id="fName" placeholder="Quantity" >
                                                                            <div v-if="form.errors.has('quantity')" class="alert alert-danger" v-html="form.errors.get('quantity')" />
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <select name="type" v-model="form.doll_gender" id="" class="m-2 form-control" >
                                                                                <option selected disabled>Choose Gender</option>
                                                                                <option value="male">Male </option>
                                                                                <option value="female">Female </option>
                                                                                <option value="undefined">Undefined </option>

                                                                            </select >
                                                                            <div v-if="form.errors.has('doll_gender')" class="alert alert-danger" v-html="form.errors.get('doll_gender')" />
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-6">
                                                                                <input type="text" v-model="form.upc" class="form-control" id="fName" placeholder="UPC" >
                                                                                <div v-if="form.errors.has('upc')" class="alert alert-danger" v-html="form.errors.get('upc')" />
                                                                            </div>
                                                                            <div class="col-6">
                                                                                <input type="text" v-model="form.featured_refinements" class="form-control" id="fName" placeholder="Featured Refinements" >
                                                                                <div v-if="form.errors.has('featured_refinements')" class="alert alert-danger" v-html="form.errors.get('featured_refinements')" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 mb-5">
                                                                            <label for="#details" style="color:white">Details</label>
                                                                            <input type="text" v-model="form.details" class="form-control" id="details" placeholder="Details" >
                                                                            <div v-if="form.errors.has('details')" class="alert alert-danger" v-html="form.errors.get('details')" />
                                                                        </div>
                                                                       
                                                                    
                                                                            <div class="row">
                                                                            <div class="col-6 round ">
                                                                                <p for=""  style="color:white; float:left">This Product is Domestic Product</p>
                                                                                <input type="checkbox" v-model="form.domestic_product" id="checkbox1" placeholder="Title" >
                                                                                <label for="checkbox1" class="ml-3"></label>
                                                                                <div v-if="form.errors.has('domestic_product')" class="alert alert-danger" v-html="form.errors.get('domestic_product')" />
                                                                            </div>
                                                                            <div class="col-6 round ">
                                                                                <p style="color:white; float:left">This Product is Modified Item</p>
                                                                                <input type="checkbox" v-model="form.modified_item" id="checkbox2" placeholder="Title" >
                                                                                <label for="checkbox2" class="ml-3"></label>
                                                                                <div v-if="form.errors.has('modified_item')" class="alert alert-danger" v-html="form.errors.get('modified_item')" />
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
    input:disabled{
        background-color: black;
    }

</style>
<script>
import SideBar from "./SidebarComponent";
import { createEditor } from 'vueditor';
export default ({
    
    components:{
        SideBar,
    },
      data:()=>({
        details : "",
        form : new form({
            id: null,
            doll_size: null,
            doll_gender: null,
            modified_item: 0,
            domestic_product: 0,
            featured_refinements: null,
            quantity: null,
            upc: null,
            details: false,
            draft: 1,
        }),
    }),
    methods:{
        async saveProduct(){
           this.$Progress.start();
           
           this.form.details = this.details.getContent();
           this.form.domestic_product = this.form.domestic_product == true ? 1 :0;
           this.form.modified_item = this.form.modified_item == true ? 1 :0;
       
            const response = await this.form.post('/api/product/store/step_two').then((response)=>{
                this.$Progress.finish();
                this.indicator();


                if(response.data = false){
                    this.$Progress.fail();
                }else{
                    this.$Progress.finish();
                    this.$router.push('/product_shipping/'+this.form.id);
                }
                
                // this.$router.push('/selling/sell_item/step_two');
            }).catch((error)=>{
                this.$Progress.fail();
                console.log(error);
            });
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
        this.form.id = this.$route.params.id;
      
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

          axios.get('/api/product/checkUserProduct/'+this.form.id).then((response) => {
                if(response.data == false){
                    this.$router.push('/');
                }
            });
          axios.get('/api/shop/getProduct/'+this.form.id).then((response) => {
              this.form.doll_size = response.data.product.doll_size;
              this.form.doll_gender = response.data.product.doll_gender;
              this.form.modified_item = response.data.product.modified_item;
              this.form.domestic_product = response.data.product.domestic_product;
              this.form.featured_refinements = response.data.product.featured_refinements;
              this.form.quantity = response.data.product.quantity;
              this.form.upc = response.data.product.upc;
              this.details.setContent(response.data.product.details);
              this.form.details = this.details.getContent();


          });
    }
})
</script>
