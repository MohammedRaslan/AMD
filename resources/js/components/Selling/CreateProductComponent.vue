Skip to content
Search or jump to…
Pull requests
Issues
Marketplace
Explore
 
@kiroSamirI 
MohammedRaslan
/
AMD
Public
1
00
Code
Issues
Pull requests
1
Actions
Projects
Wiki
Security
Insights
AMD/resources/js/components/Selling/CreateProductComponent.vue
@mohamedelkamary5
mohamedelkamary5 done fix sell & buy & shop details & q navbar
Latest commit 010ac2e 3 hours ago
 History
 4 contributors
@MohammedRaslan@mohamedelkamary5@haidyeed@kiroSamirI
597 lines (573 sloc)  40.8 KB
   
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
        <div class="over-lay-selling d-none" @click="openSlideBar = !openSlideBar" :aria-pressed="openSlideBar ? 'true' : 'false'" :class="{ 'd-block1': openSlideBar }"></div>
        <div class="container">
            <div class="row">
                 <div class="top-tabs p-0 mb-4">
                    <h1 class='py-3 py-lg-5'>Sell an Item <span @click="openSlideBar = !openSlideBar" :aria-pressed="openSlideBar ? 'true' : 'false'" class="open-tabs"><i class="fa fa-bars"></i></span> </h1>
                </div>
            <!-- Compnent Here -->
            <side-bar :openSlideBar='openSlideBar'></side-bar>
            <!-- End Component  -->
                <div class="col-xl-10 col-md-12">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="inner-content p-0">
                            <!-- Tab1 Overview -->
                             <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <!-- Block Item -->
                                <div class="inner-item">
                                    <div class="row">
                                        <div class="col-lg-12 detalis border-0 sell-an-item-section p-0">
                                            <div class="signup bg-transparent pb-4 pb-lg-5">
                                                <div class="container p-2">
                                                    <div class="row text-center pt-0">
                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <h2 class="pb-3 pt-0 sub-title text-offwhite">Product Info</h2>
                                                            <form @submit.prevent="saveProduct" class="form-product p-lg-4">
                                                                <div class="row">
                                                                    <div class="col-12 text-left">
                                                                            <label class="text-offwhite" for="fName">Item Name <span class="requiredItem text-maroon">*</span></label>
                                                                        <input type="text" v-model="form.title" class="form-control" id="fName" placeholder="Item Name" required>
                                                                        <div v-if="form.errors.has('title')" class="alert alert-danger" v-html="form.errors.get('title')" />
                                                                    </div>
                                                                    <!-- <div class="row pb-4 pr-sm-0"> -->
                                                                    <div class="col-lg-6 select-product text-left mb-4">
                                                                        <label class="text-offwhite" for="cats">Category <span class="requiredItem text-maroon">*</span></label>
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
                                                                    <div class="col-lg-6 select-product text-left mb-4">
                                                                        <label class="text-offwhite" for="condition">Condition <span class="requiredItem text-maroon">*</span></label>
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
                                                                    <div class="col-lg-6 select-product text-left mb-4">
                                                                        <label class="text-offwhite" for="brand">Brand <span class="requiredItem text-maroon">*</span></label>
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
                                                                    <div class="col-lg-6 select-product text-left mb-4">
                                                                        <label class="text-offwhite" for="brand">Return Policy <span class="requiredItem text-maroon">*</span></label>
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
                                                                    <!-- </div> -->
                                                                    <div class="col-12 mb-3 upload-img">
                                                                        <div class="alert alert-danger" :style="[imagenull ? {'display':'block'} :  {'display':'none'}]" v-if="imagenull">Image Cannot be empty</div>
                                                                        <UploadImages @change="handleImages" :max="12" maxError="Max files exceed" uploadMsg="Upload Item Images (up to 12 image)" fileError="images files only accepted"/>
                                                                        <div v-if="form.errors.has('image')" class="alert alert-danger" v-html="form.errors.get('image')" />
                                                                    </div>
                                                                    <div class="col-12 mb-5 description text-left">
                                                                        <label for="#description" style="color:white">Description <span class="requiredItem text-maroon">*</span></label>
                                                                        <textarea rows="5" type="text" v-model="form.description" name="description" placeholder="description"  class="form-control"></textarea>
                                                                        <div v-if="form.errors.has('description')" class="alert alert-danger" v-html="form.errors.get('description')" />
                                                                    </div>
                                                                </div>
                                                                <div class="row listing-type">
                                                                    <h3 class="text-left text-maroon mt-3">Selling Format <span class="requiredItem text-maroon">*</span></h3>
                                                                    <!-- <form class="row mt-4 border-0 p-0">
                                                                        <div class="col-lg-4">
                                                                            <input class="radio-custom"  id="radio-1" name="radio-group" type="radio" checked>
                                                                            <label class="radio-custom-label" for="radio-1">Listing Product</label>
                                                                        </div>
                                                                        <div class="col-lg-7">
                                                                            <input class="radio-custom" id="radio-2" name="radio-group" type="radio">
                                                                            <label class="radio-custom-label" for="radio-2">… or Bidding Product</label>
                                                                        </div>
                                                                    </form> -->
                                                                    <nav>
                                                                        <div class="nav nav-tabs mt-3 border-0 row" id="nav-tab" role="tablist">
                                                                            <!-- data-bs-target="#nav-home" -->
                                                                            <div class="nav-link col active" id="nav-home-tab" data-bs-toggle="tab"  type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                                                                                <div>Listing</div>
                                                                            </div>
                                                                            <div class="nav-link col" id="nav-profile-tab"   type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                                                                                <div>… or Bidding</div>
                                                                            </div>
                                                                        </div>
                                                                    </nav>

                                                                </div>

                                                                <div class="row listing-type">
                                                                    <div class="tab-content" id="nav-tabContent">
                                                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                                            <div class="row save">
                                                                                <div class="col-lg-6 d-flex align-items-center justify-content-center h-100">
                                                                                    <div class="inner-save inner-save1 w-100">
                                                                                        <form action="" class="border-0 px-0 text-left pb-0">
                                                                                                <label for="#listing1" style="color:white">Price <span v-html="currencyIcon"></span> <span class="requiredItem text-maroon">*</span></label>
                                                                                            <input class="form-control mt-3" v-model="form.price" id='listing1' type="number" placeholder="Price">
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6 text-left">
                                                                                    <div class="round round-3 pl-3 minimum-offer custom-checkbox">
                                                                                        <input type="checkbox" v-model="form.best_offer" id="checkbox3"  placeholder="Title">
                                                                                        <label for="checkbox3" class="ml-3">Accept best offer</label>

                                                                                        <div v-if="form.errors.has('best_offer')" class="alert alert-danger" v-html="form.errors.get('best_offer')" />
                                                                                    </div>
                                                                                    <label for="#listing1" style="color:white">Minimum Offer <span v-html="currencyIcon"></span> <span class="requiredItem text-maroon">*</span></label>

                                                                                    <input class="form-control" type="text" v-model="form.minimum_offer" placeholder="Minimum offer" :disabled="!form.best_offer">
                                                                                    <span style="color:red" v-show="minimum_offer_message != ''">{{ minimum_offer_message }}</span>
                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                                            <div class="inner-save inner-save2">
                                                                                <form action="" class="border-0 px-3">
                                                                                    <div class="row g-3">
                                                                                        <div class="col-6">
                                                                                            <label for="from" style="color:white; float:left">From</label>
                                                                                            <input class="form-control" type="datetime-local" v-model="form.bidding_from" id="from">
                                                                                        </div>
                                                                                        <div class="col-6">
                                                                                            <label for="to" style="color:white; float:left">To</label>
                                                                                            <input class="form-control" type="datetime-local" v-model="form.bidding_to"  id="to">
                                                                                        </div>
                                                                                        <div class="col-6">
                                                                                            <label for="minimum_price" style="color:white; float:left">Minimum Price</label>
                                                                                            <input class="form-control" type="number" v-model="form.bid_minimum_price" id="minimum_price">
                                                                                        </div>
                                                                                        <div class="col-6 select-product text-left">
                                                                                            <label class="text-offwhite" for="condition">Select Step <span class="requiredItem text-maroon">*</span></label>
                                                                                            <v-select placeholder="Select Step" id='cats' v-model="form.step" label="title" :options="bid_step">
                                                                                                <template #search="{attributes, events}">
                                                                                                        <input
                                                                                                            class="vs__search"
                                                                                                            :required="!form.step"
                                                                                                            v-bind="attributes"
                                                                                                            v-on="events"
                                                                                                        />
                                                                                                    </template>
                                                                                            </v-select>
                                                                                            <div v-if="form.errors.has('condition')" class="alert alert-danger" v-html="form.errors.get('condition')" />
                                                                                    </div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <a class="btn btn-milky mb-4 w-100" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                                    Additional Information
                                                                    </a>
                                                                    <div class="collapse m-3 additional-information p-0" id="collapseExample">
                                                                        <div class="card card-body background-color border-0 p-0">
                                                                            <div class="row text-left">

                                                                                    <div class="col-lg-4">
                                                                                        <label class="text-offwhite" for="cats">Item Size</label>
                                                                                        <input type="text" v-model="form.doll_size" class="form-control" id="fName" placeholder="Item size" >
                                                                                        <div v-if="form.errors.has('doll_size')" class="alert alert-danger" v-html="form.errors.get('doll_size')" />
                                                                                    </div>
                                                                                    <div class="col-lg-4">
                                                                                            <label class="text-offwhite" for="cats">Quantity</label>
                                                                                        <input type="number" v-model="form.quantity" class="form-control" id="fName" placeholder="Quantity" >
                                                                                        <div v-if="form.errors.has('quantity')" class="alert alert-danger" v-html="form.errors.get('quantity')" />
                                                                                    </div>
                                                                                    <div class="col-lg-4">
                                                                                            <label class="text-offwhite" for="cats">Item Gender</label>
                                                                                        <v-select placeholder="Select gender" v-model="form.doll_gender" :options="gender"></v-select>
                                                                                        <div v-if="form.errors.has('doll_gender')" class="alert alert-danger" v-html="form.errors.get('doll_gender')" />
                                                                                    </div>
                                                                                    <div class="row my-3">
                                                                                        <div class="col-lg-6">
                                                                                                <label class="text-offwhite" for="cats">UPC</label>
                                                                                            <input type="text" v-model="form.upc" class="form-control" id="fName" placeholder="UPC" >
                                                                                            <div v-if="form.errors.has('upc')" class="alert alert-danger" v-html="form.errors.get('upc')" />
                                                                                        </div>
                                                                                        <div class="col-lg-6">
                                                                                                <label class="text-offwhite" for="cats">Featured Refinements</label>
                                                                                            <input type="text" v-model="form.featured_refinements" class="form-control" id="fName" placeholder="Featured Refinements" >
                                                                                            <div v-if="form.errors.has('featured_refinements')" class="alert alert-danger" v-html="form.errors.get('featured_refinements')" />
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="row">
                                                                                        <!-- <div class="col-lg-6 round">
                                                                                            <p class="text-offwhite w-100">This Product is Domestic Product</p>
                                                                                            <input type="checkbox" v-model="form.domestic_product" id="checkbox1" placeholder="Title" >
                                                                                            <label for="checkbox1" class="ml-3"></label>
                                                                                            <div v-if="form.errors.has('domestic_product')" class="alert alert-danger" v-html="form.errors.get('domestic_product')" />
                                                                                        </div> -->
                                                                                        <div class="col-lg-6">
                                                                                            <div class="round round-3 pl-3 custom-checkbox">
                                                                                                <input type="checkbox" v-model="form.domestic_product" id="checkbox1" placeholder="Title" >
                                                                                                <label for="checkbox1" class="ml-3">This Product is Domestic Product</label>

                                                                                                <div v-if="form.errors.has('domestic_product')" class="alert alert-danger" v-html="form.errors.get('domestic_product')" />
                                                                                            </div>
                                                                                        </div>

                                                                                        <!-- <div class="col-lg-6 round">
                                                                                            <p class="text-offwhite w-100">This Product is Modified Item</p>
                                                                                            <input type="checkbox" v-model="form.modified_item" id="checkbox2" placeholder="Title" >
                                                                                            <label for="checkbox2" class="ml-3"></label>
                                                                                            <div v-if="form.errors.has('modified_item')" class="alert alert-danger" v-html="form.errors.get('modified_item')" />
                                                                                        </div> -->
                                                                                        <div class="col-lg-6">
                                                                                            <div class="round round-3 pl-3 custom-checkbox">
                                                                                                <input type="checkbox" v-model="form.modified_item" id="checkbox2" placeholder="Title" >
                                                                                                <label for="checkbox2" class="ml-3">This Product is Modified Item</label>

                                                                                                <div v-if="form.errors.has('modified_item')" class="alert alert-danger" v-html="form.errors.get('modified_item')" />
                                                                                            </div>
                                                                                        </div>


                                                                                    </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <input type="button" value="Cancel" class="form-control mb-3 btn btn-outline-offwhite" >

                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <input type="button" @click="draft" value="Save as Draft" class="form-control mb-3 btn btn-milky bg-gray" id="draft">
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <input type="submit" :disabled="form.busy" value="Next" class="form-control mb-3" id="register">
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
    .requiredItem{
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
        currencyIcon: null,
        types: [],
        categories: [],
        conditions: [],
        brands: [],
        gender:[
            'Male',
            'Female',
            'Others'
        ],
        policies: [],
        bid_step : [],
        imagenull: false,
        minimum_offer_message : '',
        form : new form({
            title : null,
            type : 0, // type 0 => Regular , type 1 => Bidding
            condition:null,
            image : {},
            brand : null,
            description: null,
            category: null,
            return_policy: null,
            price: null,
            best_offer: false,
            minimum_offer: null,
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
            details: false,
            draft: 1,
        }),
        openSlideBar: false
    }),
    methods:{
        async saveProduct(){
           this.$Progress.start();
           this.form.minimum_offer = this.form.best_offer == false ? null : this.form.minimum_offer;
           this.form.best_offer = this.form.best_offer == true ? 1 : 0;
           this.form.domestic_product = this.form.domestic_product == true ? 1 :0;
           this.form.modified_item = this.form.modified_item == true ? 1 :0;
           this.form.type = this.form.bidding_from || this.form.bidding_to != null ? 1 : 0;
           this.form.price = this.form.bidding_from != null || this.form.bidding_to != null ? 0 : this.form.price;
           if( jQuery.isEmptyObject(this.form.image)  ){
               this.imagenull = true;
               this.$Progress.fail();
           }else{
               if(this.form.best_offer == 1 && parseFloat(this.form.minimum_offer) >parseFloat(this.form.price)){
                   this.minimum_offer_message = "This value can not be higher than Price";
               }else{
            const response = await this.form.post('/api/product/store').then((response)=>{
                this.$Progress.finish();
                // this.indicator();
                this.form.reset();
                this.$router.push('/product_shipping/'+response.data.product_id);
            }).catch((error)=>{
                this.$Progress.fail();
                console.log(error);
            });
           }
           }
        },
        handleImages(files){
            this.form.image = files;
          },
        draft(){
            this.form.draft = 1;
            this.saveProduct();
        },
    },
    beforeCreate() {
        this.$Progress.start();
    },
    mounted(){
        Fire.$emit('mounted');
        this.$Progress.finish();
        axios.get('/api/product/getProductData').then((response) => {
            this.types = response.data.types;
            this.categories = response.data.categories;
            this.conditions = response.data.conditions;
            this.brands = response.data.brands;
            this.policies = response.data.return_policy;
            this.bid_step = response.data.bidding_step;
            this.currencyIcon = response.data.currencyIcon;
        });
    }
})
</script>
