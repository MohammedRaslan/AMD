<template>
    <div>
        <section class="breadcrumb-option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb__text">
                            <div class="breadcrumb__links">
                                <router-link to="/">Home</router-link>
                                <svg xmlns="http://www.w3.org/2000/svg" width="4" height="6" viewBox="0 0 4 6">
                                    <g id="Icon_20_Grey_Dropdown" data-name="Icon / 20 / Grey / Dropdown" transform="translate(-8 13) rotate(-90)">
                                        <path id="Triangle" d="M3,4,6,0H0Z" transform="translate(7 8)" fill="#ffe0e0"/>
                                    </g>
                                </svg>
                                <span>Sell an Item</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Breadcrumb Section End -->


    <!-- Latest Blog Section Begin -->
    <section class="selling">
        <div class="over-lay-selling d-none"></div>
        <div class="container">
            <div class="row">
                <div class="top-tabs p-0 mb-4">
                    <h1 class='py-3 py-lg-5'>Offer an Item  </h1>
                </div>

            <!-- Compnent Here -->
                <div class="col-xl-10 col-md-12">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="inner-content p-0">
                            <!-- Tab1 Overview -->
                             <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <!-- Block Item -->
                                <div class="inner-item">
                                    <div class="row">
                                        <div class="col-lg-12 detalis border-0 sell-an-item-section p-0">
                                            <div class="signup bg-transparent">
                                                <div class="container p-2">
                                                    <div class="row text-center pt-0">
                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <h2 class="pb-3 pt-0 text-offwhite">Product Info</h2>
                                                            <form @submit.prevent="saveProduct" class="form-product p-lg-4">
                                                                <div class="row">
                                                                    <div class="col-12 text-left">
                                                                            <label class="text-white" for="fName">Item Name <span class="requiredItem text-maroon">*</span></label>
                                                                        <input type="text" v-model="form.title" class="form-control" id="fName" placeholder="Item Name" required>
                                                                        <div v-if="form.errors.has('title')" class="alert alert-danger" v-html="form.errors.get('title')" />
                                                                    </div>
                                                                    <div class="row pb-4 pr-sm-0">
                                                                        <div class="col-lg-6 select-product text-left mb-4 pr-sm-0">
                                                                            <label class="text-white" for="cats">Category <span class="requiredItem text-maroon">*</span></label>
                                                                            <v-select placeholder="Select Category" id='cats' v-model="form.category" :reduce="category => category.id"  label="title" :options="categories" >
                                                                                <template #search="{attributes, events}">
                                                                                        <input
                                                                                            class="vs__search"
                                                                                            :required="!form.category"
                                                                                            v-bind="attributes"
                                                                                            v-on="events"
                                                                                        />
                                                                                    </template>
                                                                            </v-select>
                                                                            <div v-if="form.errors.has('type')" class="alert alert-danger" v-html="form.errors.get('type')" />
                                                                        </div>
                                                                        <div class="col-lg-6 select-product text-left mb-4 pr-sm-0">
                                                                            <label class="text-white" for="condition">Condition <span class="requiredItem text-maroon">*</span></label>
                                                                            <v-select placeholder="Select Condition"   id='cats' v-model="form.condition"   label="title" :options="conditions">
                                                                                    <template #search="{attributes, events}">
                                                                                        <input
                                                                                            class="vs__search"
                                                                                            :required="!form.condition"
                                                                                            v-bind="attributes"
                                                                                            v-on="events"
                                                                                        />
                                                                                    </template>
                                                                            </v-select>
                                                                            <div v-if="form.errors.has('condition')" class="alert alert-danger" v-html="form.errors.get('condition')" />
                                                                        </div>
                                                                        <div class="col-lg-6 select-product text-left mb-4 pr-sm-0">
                                                                            <label class="text-white" for="brand">Brand <span class="requiredItem text-maroon">*</span></label>
                                                                            <v-select placeholder="Select Brand" id='cats' v-model="form.brand" :reduce="brand => brand.title"  label="title" :options="brands">
                                                                                    <template #search="{attributes, events}">
                                                                                        <input
                                                                                            class="vs__search"
                                                                                            :required="!form.brand"
                                                                                            v-bind="attributes"
                                                                                            v-on="events"
                                                                                        />
                                                                                    </template>
                                                                            </v-select>
                                                                            <div v-if="form.errors.has('brand')" class="alert alert-danger" v-html="form.errors.get('brand')" />
                                                                        </div>
                                                                        <div class="col-lg-6 select-product text-left mb-4 pr-sm-0">
                                                                            <label class="text-white" for="brand">Return Policy <span class="requiredItem text-maroon">*</span></label>
                                                                            <v-select placeholder="Select Policy" id='cats' v-model="form.return_policy" label="title" :options="policies">
                                                                                    <template #search="{attributes, events}">
                                                                                        <input
                                                                                            class="vs__search"
                                                                                            :required="!form.return_policy"
                                                                                            v-bind="attributes"
                                                                                            v-on="events"
                                                                                        />
                                                                                    </template>
                                                                            </v-select>
                                                                            <div v-if="form.errors.has('brand')" class="alert alert-danger" v-html="form.errors.get('brand')" />
                                                                        </div>

                                                                        <div class="col-lg-6 select-product text-left mb-4 pr-sm-0">
                                                                                            <label for="priceListing" class='text-offwhite mb-2 pb-1'>Price <span v-html="currencyIcon"></span> <span class="requiredItem text-maroon">*</span></label>
                                                                                            <input class="form-control mt-3" v-model="form.price" id='priceListing' type="number" placeholder="Price" required>
                                                                                        </div>
                                                                    </div>
                                                                    <div class="col-4 mb-3 d-flex flex-column upload-img" v-if="load">
                                                                        <label for="#description" style="color:white">Feature Image <span class="requiredItem text-maroon">*</span></label>
                                                                        <div v-show="!openFeatured">
                                                                             <img  :src='str_replace(product.image)' alt="">
                                                                             <button class="btn btn-milky w-100" type="button" @click="changeFeatureImage">Change Featured Image</button>
                                                                        </div>

                                                                        <div v-show="openFeatured">
                                                                                <div class="alert alert-danger" :style="[imagenull ? {'display':'block'} :  {'display':'none'}]" v-if="imagenull">Image Cannot be empty</div>
                                                                                <UploadImages @change="handleImage" :max="1" maxError="Max files exceed" uploadMsg="Upload Item Images (up to 1 image)" fileError="images files only accepted"/>
                                                                                <!-- <div v-if="form.errors.has('image')" class="alert alert-danger" v-html="form.errors.get('image')" /> -->
                                                                                <button class="btn btn-milky bg-gray w-100" @click="changeFeatureImage">Return</button>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-8 mb-3  d-flex flex-column upload-img" v-if="load">
                                                                        <label for="#description" style="color:white">Optional Image <span class="requiredItem text-maroon">*</span></label>
                                                                        <div v-show="!openOptionalImages" class="d-flex">
                                                                            <div v-for="(image, index) in product.images" :key="index" >
                                                                                <img  :src='str_replace(image.url)' alt="">

                                                                            </div>
                                                                        </div>
                                                                        <button type="button" class="btn btn-milky w-100 pb-2" @click="changeOptionalImages">Change Optional Image</button>
                                                                        <div v-show="openOptionalImages">
                                                                                <div class="alert alert-danger" :style="[imagenull ? {'display':'block'} :  {'display':'none'}]" v-if="imagenull">Image Cannot be empty</div>
                                                                                <UploadImages @change="handleImages" :max="12" maxError="Max files exceed" uploadMsg="Upload Item Images (up to 12 image)" fileError="images files only accepted"/>
                                                                                <!-- <div v-if="form.errors.has('image')" class="alert alert-danger" v-html="form.errors.get('image')" /> -->
                                                                                <button class="btn btn-milky bg-gray w-100 pb-2" @click="changeOptionalImages">Return</button>
                                                                        </div>
                                                                     </div>
                                                                    <div class="col-12 mb-5 description text-left">
                                                                        <label for="#description" style="color:white">Description <span class="requiredItem text-maroon">*</span></label>
                                                                        <textarea rows="5" type="text" v-model="form.description" name="description" placeholder="description"  class="form-control text-white"></textarea>
                                                                        <div v-if="form.errors.has('description')" class="alert alert-danger" v-html="form.errors.get('description')" />
                                                                    </div>
                                                           
                                                                    <div class="row">
                                                                            <a class="btn btn-milky m-3" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                                            Additional Information
                                                                            </a>
                                                                            <div class="collapse m-3 additional-information p-0" id="collapseExample">
                                                                            <div class="card card-body background-color border-0 p-0">
                                                                                <div class="row text-left">

                                                                                        <div class="col-lg-4">
                                                                                            <label class="text-white" for="cats">Item Size {{is_american ==1? "(in)" : "(cm)" }}</label>
                                                                                            <input type="text" v-model="form.doll_size" class="form-control" id="fName" placeholder="Item size" >
                                                                                            <div v-if="form.errors.has('doll_size')" class="alert alert-danger" v-html="form.errors.get('doll_size')" />
                                                                                        </div>
                                                                                        <div class="col-lg-4">
                                                                                                <label class="text-white" for="cats">Quantity</label>
                                                                                            <input type="number" v-model="form.quantity" class="form-control" id="fName" placeholder="Quantity" >
                                                                                            <div v-if="form.errors.has('quantity')" class="alert alert-danger" v-html="form.errors.get('quantity')" />
                                                                                        </div>
                                                                                        <div class="col-lg-4">
                                                                                                <label class="text-white" for="cats">Item Gender</label>
                                                                                            <v-select placeholder="Select gender" v-model="form.doll_gender" :options="gender"></v-select>
                                                                                            <div v-if="form.errors.has('doll_gender')" class="alert alert-danger" v-html="form.errors.get('doll_gender')" />
                                                                                        </div>
                                                                                        <div class="row my-3">
                                                                                            <div class="col-lg-6">
                                                                                                    <label class="text-white" for="cats">UPC</label>
                                                                                                <input type="text" v-model="form.upc" class="form-control" id="fName" placeholder="UPC" >
                                                                                                <div v-if="form.errors.has('upc')" class="alert alert-danger" v-html="form.errors.get('upc')" />
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                    <label class="text-white" for="cats">Featured Refinements</label>
                                                                                                <input type="text" v-model="form.featured_refinements" class="form-control" id="fName" placeholder="Featured Refinements" >
                                                                                                <div v-if="form.errors.has('featured_refinements')" class="alert alert-danger" v-html="form.errors.get('featured_refinements')" />
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="row">
                                                                                            <div class="col-lg-6 round">
                                                                                                <p class="text-white w-100">This Product is Domestic Product</p>
                                                                                                <input type="checkbox" v-model="form.domestic_product" id="checkbox1" placeholder="Title" >
                                                                                                <label for="checkbox1" class="ml-3"></label>
                                                                                                <div v-if="form.errors.has('domestic_product')" class="alert alert-danger" v-html="form.errors.get('domestic_product')" />
                                                                                            </div>
                                                                                            <div class="col-lg-6 round">
                                                                                                <p class="text-white w-100">This Product is Modified Item</p>
                                                                                                <input type="checkbox" v-model="form.modified_item" id="checkbox2" placeholder="Title" >
                                                                                                <label for="checkbox2" class="ml-3"></label>
                                                                                                <div v-if="form.errors.has('modified_item')" class="alert alert-danger" v-html="form.errors.get('modified_item')" />
                                                                                            </div>
                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4"></div>
                                                                    <div class="col-lg-4">
                                                                        <input type="button" @click="draft" value="Save as Draft" class="form-control btn btn-milky bg-gray" id="draft">
                                                                    </div>
                                                                    <div class="col-lg-4">
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
<style lang='scss'>
    .bg-gray{
        background-color: gray !important;
    }
    .sell-an-item-section{
        .minimum-offer{
            label{
                width: 100%;
                background: transparent;
                color: #fff;
                border: none;
                text-align: left;
                padding-left: 27px;
                // top: auto !important;
                top: 18px;
                left: -15px;
                &::before{
                    content: '';
                    border: 1px solid #fd1266;
                    position: absolute;
                    top: 0px;
                    width: 20px;
                    height: 20px;
                    border-radius: 50%;
                    left: 0;
                }
                &::after{
                    left: 4px;
                }
            }
            input[type=checkbox]:checked + label{
                background: transparent;
                &::before{
                    background: #fd1266;

                }
            }
        }
        .nav-tabs{
            .nav-link {
                border: none;
                padding: 0 12px;
                background: transparent;
                @media (max-width: 992px) {
                    padding: 4 !important;
                }
                &.active{
                    div{
                        background: white;
                        color: black;
                    }
                }
                div{
                    height: 100%;
                    border: 1px solid #dee2e6;
                    border-radius: 8px;
                    padding: 8px;
                    color: #fff;
                     @media (max-width: 992px) {
                        font-size: 13px;
                    }
                }
                &:hover{
                    border: none;
                }
            }
        }
        input[type=submit], #draft{
            height: 40px;
        }
        .vs__dropdown-toggle{
            border: 1px solid #42525e !important;
            input{
                height: auto !important;
                border: none;
                margin: 0 !important;
                height: 60px !important;
                &:focus{
                    border: none;
                    box-shadow: none;
                }
            }
        }
        .upload-img{
            .container{
                background: transparent;
                border: 1px solid #42525e !important;
            }
        }
        textarea{
            border: 1px solid #42525e;
            background: transparent;
            min-height: 100px;
            &:focus{
                color: white;
                background-color: #fff0;
                border-color: #42525e;
                outline: 0;
                box-shadow: 0px 0px 5px 0rem #42525e;
            }
        }
        .form-control:disabled{
            background: transparent;
            opacity: .2;
        }
        .additional-information{
            .round label{
                left: 0;
            }
            .round p{
                padding: 0px 30px !important;
                @media (max-width: 992px) {
                    font-size: 14px;
                }
            }
        }
    }



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
    height: 20px;
    left: 22px;
    position: absolute;
    top: 0;
    width: 20px;
    }

    .round label:after {
    border: 2px solid #fff;
    border-top: none;
    border-right: none;
    content: "";
    height: 6px;
    left: 3px;
    opacity: 0;
    position: absolute;
    top: 6px;
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
    .background-color{
        background-color: #111b29 !important;
    }
    .requiredItem text-maroon{
    color:#fd1266 ;
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
        id: null,
        openFeatured: false,
        openOptionalImages: false,
        product: {},
        types: [],
        load: false,
        categories: [],
        conditions: [],
        brands: [],
        gender:[
            'male',
            'female',
        ],
        policies: [],
        bid_step : [],
        imagenull: false,
        minimum_offer_message : '',
        form : new form({
            title : null,
            type : "4",
            condition:null,
            featured_image : {},
            image : {},
            brand : null,
            description: null,
            category: null,
            return_policy: null,
            price: null,
            best_offer: true,
            minimum_offer: 0,
            product_id :null,
            bidding_from: null,
            bidding_to: null,
            bid_minimum_price: null,
            step: null,
            doll_size: null,
            doll_gender: null,
            modified_item: 0,
            domestic_product: 0,
            featured_refinements: null,
            quantity: null,
            upc: null,
            details: "",
            draft: 1,
            best_offer_price: null,
        }),
        openSlideBar: false
    }),
    methods:{
        async saveProduct(isDraft = 0){
            console.log(this.form);
           this.$Progress.start();
           this.form.minimum_offer = this.form.best_offer == false ? null : this.form.minimum_offer;
           this.form.domestic_product = this.form.domestic_product == true ? 1 :0;
           this.form.modified_item = this.form.modified_item == true ? 1 :0;
           this.form.price = this.form.bidding_from != null || this.form.bidding_to != null ? 0 : this.form.price;
                if(this.form.best_offer == 1 &&parseFloat(this.form.best_offer_price) >parseFloat (this.form.price)){
                   this.minimum_offer_message = "This value can not be higher than Price";
                   this.$Progress.fail();

               }else if(this.form.brand == "Any" || this.form.condition =="Any"){
                    Swal.fire('Brands and Conditions Can Not be Null!')
               }else{
            const response = await this.form.post('/api/product/store/').then((response)=>{
                this.$Progress.finish();
                if(isDraft ==1){
                    this.$router.push('/selling/drafted');
                    return ;
                }
                console.log(response);
                this.$router.push('/selling/offer_item/'+response.data.product_id);
            }).catch((error)=>{
                this.$Progress.fail();
                console.log(error);
            });

               }
        },
        handleImage(files){
            this.form.featured_image = files;
        },
        handleImages(files){
            this.form.image = files;
        },
        draft(){
            this.form.draft = 1;
            this.saveProduct(1);
        },
        str_replace: function(str){
            str = str.replace('public',window.location.origin + '/storage');
            return str;
        },
        changeFeatureImage: function(){
            this.openFeatured = this.openFeatured  == true ? false : true;
        },
        changeOptionalImages: function(){
            this.openOptionalImages = this.openOptionalImages == true ? false : true;
        }
    },

    beforeCreate() {
        this.$Progress.start();
    },
    mounted(){
        Fire.$emit('mounted');
        this.$Progress.finish();

        axios.get('/api/product/getProductData/'+this.$route.params.id).then((response) => {
            this.types = response.data.types;
            this.categories = response.data.categories;
            this.conditions = response.data.conditions;
            this.brands = response.data.brands;
            this.policies = response.data.return_policy;
            this.product  = response.data.product;
            this.form.title = this.product.title;
            this.form.condition = this.product.condition;
            this.form.description = this.product.description;
            this.form.doll_gender = this.product.doll_gender;
            this.form.doll_size = this.product.doll_size;
            this.form.domestic_product = this.product.domestic_product;
            this.form.featured_refinements = this.product.featured_refinements;
            this.form.modified_item  = this.product.modified_item;
            this.form.price = this.product.price;
            this.form.quantity = this.product.quantity;
            this.form.return_policy = this.product.return_policy;
            this.form.upc = this.product.upc;
            this.form.category = this.product.categories[0].id;
            //console.log(this.product.categories);
            this.form.featured_image = this.product.image;
            this.form.image = this.product.images;
            this.form.brand  = this.product.brand;
            this.currencyIcon = response.data.currencyIcon;
            this.is_american = response.data.is_american;
            this.form.product_id = this.$route.params.id;
            this.load = true;
        });
    }

})
</script>
