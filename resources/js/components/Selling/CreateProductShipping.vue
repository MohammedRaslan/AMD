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
                                                                <h2 class="pb-3 pt-4">Product Info</h2>
                                                                <form @submit.prevent="saveProductShipping">                        
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input type="text" v-model="form.weight"  class="form-control" id="fName" placeholder="Weight" required>
                                                                            <div v-if="form.errors.has('weight')" class="alert alert-danger" v-html="form.errors.get('weight')" />
                                                                        </div>
                                                                        <div class="col-6 mb-5">
                                                                            <select name="type" v-model="form.package_details" id="" class="m-2 form-control" required>
                                                                                <option selected disabled>Choose Details</option>
                                                                                <option :value=false >I don't have package details </option>
                                                                                <option :value=true>I have package details</option>
                                                                            </select >
                                                                           <div v-if="form.errors.has('package_details')" class="alert alert-danger" v-html="form.errors.get('package_details')" />
                                                                        </div>
                                                                          
                                                                            <div class="col-4">
                                                                                <input type="text" v-model="form.width" :disabled="!form.package_details" class="form-control" id="fName" placeholder="Width" required>
                                                                                <div v-if="form.errors.has('width')" class="alert alert-danger" v-html="form.errors.get('width')" />
                                                                            </div>
                                                                            <div class="col-4">
                                                                                <input type="text" v-model="form.height" :disabled="!form.package_details" class="form-control" id="fName" placeholder="Height" required>
                                                                                <div v-if="form.errors.has('height')" class="alert alert-danger" v-html="form.errors.get('height')" />
                                                                            </div>
                                                                            <div class="col-4">
                                                                                <input type="text" v-model="form.length" :disabled="!form.package_details" class="form-control" id="fName" placeholder="Length" required>
                                                                                <div v-if="form.errors.has('length')" class="alert alert-danger" v-html="form.errors.get('length')" />
                                                                            </div>


                                                                        <div class="row">
                                                                            <div class="col-6 round ">
                                                                                <p for=""  style="color:white; float:left">Shipping To USA</p>
                                                                                <input type="checkbox" v-model="form.usa" id="checkbox1" placeholder="Title" >
                                                                                <label for="checkbox1" class="ml-3"></label>
                                                                                <div v-if="form.errors.has('usa')" class="alert alert-danger" v-html="form.errors.get('usa')" />
                                                                            </div>
                                                                            <div class="col-6 round ">
                                                                                <p style="color:white; float:left">Shipping To World Wide</p>
                                                                                <input type="checkbox" v-model="form.world_wide" id="checkbox2" placeholder="Title" >
                                                                                <label for="checkbox2" class="ml-3"></label>
                                                                                <div v-if="form.errors.has('world_wide')" class="alert alert-danger" v-html="form.errors.get('world_wide')" />
                                                                            </div>
                                                                        </div>   
                                                                        <div class="row">
                                                                            <div class="col-6">
                                                                                <input type="text" v-model="form.service_usa" :disabled="!form.usa" class="form-control" id="fName" placeholder="Service USA" required>
                                                                                <div v-if="form.errors.has('service_usa')" class="alert alert-danger" v-html="form.errors.get('service_usa')" />
                                                                            </div>
                                                                            <div class="col-6">
                                                                                <input type="text" v-model="form.service_world_wide" :disabled="!form.world_wide" class="form-control" id="fName" placeholder="Sevice World Wide" required>
                                                                                <div v-if="form.errors.has('service_world_wide')" class="alert alert-danger" v-html="form.errors.get('service_world_wide')" />
                                                                            </div>
                                                                            <div class="col-6">
                                                                                <input type="text" v-model="form.price_usa" :disabled="!form.usa" class="form-control" id="fName" placeholder="Price USA" required>
                                                                                <div v-if="form.errors.has('price_usa')" class="alert alert-danger" v-html="form.errors.get('price_usa')" />
                                                                            </div>
                                                                     
                                                                            <div class="col-6">
                                                                                <input type="text" v-model="form.price_world_wide" :disabled="!form.world_wide" class="form-control" id="fName" placeholder="Price World Wide" required>
                                                                                <div v-if="form.errors.has('price_world_wide')" class="alert alert-danger" v-html="form.errors.get('price_world_wide')" />
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

</style>
<script>
import SideBar from "./SidebarComponent";
import { createEditor } from 'vueditor';
export default ({
    
    components:{
        SideBar,
    },
      data:()=>({
        form : new form({
            product_id: null,
            world_wide: false,
            usa: true,
            service_usa: null,
            price_usa: null,
            service_world_wide: null,
            price_world_wide: null,
            height: null,
            weight: null,
            width: null,
            length: null,
            package_details: true,
            draft: 0,
        }),
    }),
    methods:{
        async saveProductShipping(){
           this.$Progress.start();
           this.form.usa = this.form.usa == true ? 1 :0;
           this.form.world_wide = this.form.world_wide == true ? 1 :0;
           this.form.package_details = this.form.package_details == true ? 'details' : 'no_details'
            const response = await this.form.post('/api/product/store/step_three').then((response)=>{
                this.$Progress.finish();
                this.indicator();
                if(response.data = false){
                    this.$Progress.fail();
                }else{
                    this.$Progress.finish();
                this.$router.push('/selling/overview');

                }
                
            }).catch((error)=>{
                this.$Progress.fail();
                console.log(error);
            });
        },
       
        draft(){
            this.form.draft = 1;
            this.saveProductShipping();
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
        this.form.product_id = this.$route.params.id;
         axios.get('/api/product/checkUserProduct/'+this.form.product_id).then((response) => {
                if(response.data == false){
                    this.$router.push('/');
                }
            });
        axios.get('/api/product/getProductShipping/'+this.form.product_id).then((response) => {
            if(response.data.shipping != null){
                this.form.world_wide = response.data.shipping.world_wide;
                this.form.usa = response.data.shipping.usa;
                this.form.service_usa = response.data.shipping.service_usa;
                this.form.service_world_wide = response.data.shipping.service_world_wide;
                this.form.price_usa = response.data.shipping.price_usa;
                this.form.price_world_wide = response.data.shipping.price_world_wide;
                this.form.height = response.data.shipping.height;
                this.form.weight = response.data.shipping.weight;
                this.form.length = response.data.shipping.length;
                this.form.width  = response.data.shipping.width;
                
            }
        });
    }
})
</script>
