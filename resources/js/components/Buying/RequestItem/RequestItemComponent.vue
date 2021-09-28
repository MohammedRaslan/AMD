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
                                <span>Request an Item</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Breadcrumb Section End -->


    <!-- Latest Blog Section Begin -->
    <section class="selling buying">
        <div class="over-lay-selling d-none" @click="openSlideBar = !openSlideBar" :aria-pressed="openSlideBar ? 'true' : 'false'" :class="{ 'd-block1': openSlideBar }"></div>
        <div class="container">
            <div class="row">
                <div class="top-tabs p-0 mb-4">
                    <h1 class='py-3 py-lg-5 text-green'>Request an Item<span @click="openSlideBar = !openSlideBar" :aria-pressed="openSlideBar ? 'true' : 'false'" class="open-tabs"><i class="fa fa-bars"></i></span> </h1>
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
                                                <div class="container px-2">
                                                    <div class="row text-center pt-0">
                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <h2 class="pb-3 pt-0 sub-title text-offwhite">Product Info</h2>
                                                            <form @submit.prevent="saveProduct" class="form-product p-lg-4 border-color-green">
                                                                <div class="row">
                                                                    <div class="col-lg-6 text-left">
                                                                        <label class="text-offwhite" for="fName">Item Name <span class="requiredItem text-maroon">*</span></label>
                                                                        <input type="text" v-model="form.title" class="form-control" id="fName" placeholder="Item Name" required>
                                                                        <div v-if="form.errors.has('title')" class="alert alert-danger" v-html="form.errors.get('title')" />
                                                                    </div>
                                                                    <div class="col-lg-6 select-product text-left mb-4">
                                                                        <label class="text-offwhite" for="cats">Category <span class="requiredItem text-maroon">*</span></label>
                                                                        <v-select placeholder="Select Category" class="" id='cats' v-model="form.category_id" :reduce="category => category.id"  label="title" :options="categories" >
                                                                            <template #search="{attributes, events}">
                                                                                    <input
                                                                                        class="vs__search"
                                                                                        :required="!form.category_id"
                                                                                        v-bind="attributes"
                                                                                        v-on="events"
                                                                                    />
                                                                                </template>
                                                                        </v-select>
                                                                        <div v-if="form.errors.has('type')" class="alert alert-danger" v-html="form.errors.get('type')" />
                                                                    </div>
                                                                    <div class="row pb-4 pr-sm-0">

                                                                        <div class="col-lg-6 select-product text-left mb-4 pr-sm-0">
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
                                                                        <div class="col-lg-6 select-product text-left mb-4 pr-sm-0">
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
                                                                    </div>
                                                                    <div class="col-12 mb-3 upload-img">
                                                                        <div class="alert alert-danger" :style="[imagenull ? {'display':'block'} :  {'display':'none'}]" v-if="imagenull">Image Cannot be empty</div>
                                                                        <UploadImages @change="handleImages" :max="5" maxError="Max files exceed" uploadMsg="Upload Item Images (up to 12 image)" fileError="images files only accepted"/>
                                                                        <div v-if="form.errors.has('image')" class="alert alert-danger" v-html="form.errors.get('image')" />
                                                                    </div>
                                                                    <div class="col-12 mb-5 description text-left">
                                                                        <label for="#description" style="color:white">Description <span class="requiredItem text-maroon">*</span></label>
                                                                        <textarea rows="5" type="text" v-model="form.description" name="description" placeholder="description"  class="form-control text-white"></textarea>
                                                                        <div v-if="form.errors.has('description')" class="alert alert-danger" v-html="form.errors.get('description')" />
                                                                    </div>
                                                                    <div class="listing-type">
                                                                        <h3 class="text-left mt-3 text-green">Price <span class="fst-italic">(optional)</span> </h3>

                                                                        <form class="row mt-4 border-0 p-0">
                                                                            <div class="col-lg-6 text-left">
                                                                                <label class="text-offwhite" for="">From <span v-html="currencyIcon"></span></label>
                                                                                <input type="text" class="form-control" id="" v-model="form.price_from" placeholder="From" required>
                                                                            </div>
                                                                            <div class="col-lg-6 text-left">
                                                                                <label class="text-offwhite" for="">To <span v-html="currencyIcon"></span></label>
                                                                                <input type="text" class="form-control" id="" placeholder="To"  v-model="form.price_to" required>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                            <!-- <div class="col-lg-4">
                                                                                <input class="radio-custom"  id="radio-1" name="radio-group" type="number" >
                                                                                <label class="radio-custom-label" for="radio-1">Listing Product</label>
                                                                            </div>
                                                                            <div class="col-lg-7">
                                                                                <input class="radio-custom" name="radio-group" type="number">
                                                                                <label class="radio-custom-label" for="radio-2">… or Bidding Product</label>
                                                                            </div> -->
                                                                        <!-- <nav>
                                                                            <div class="nav nav-tabs mt-3 border-0 row" id="nav-tab" role="tablist">
                                                                                <div class="nav-link col active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                                                                                    <div>Requested Product</div>
                                                                                </div>
                                                                            </div>
                                                                        </nav> -->


                                                                    <!-- <div class="row listing-type"> -->
                                                                        <!-- <div class="tab-content" id="nav-tabContent"> -->
                                                                            <!-- <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"> -->
                                                                                <!-- <div class="row save"> -->
                                                                                    <!-- <div class="col-lg-6 d-flex align-items-center justify-content-center h-100">
                                                                                        <div class="inner-save inner-save1 w-100"> -->
                                                                                            <!-- <form action="" class="border-0 px-0"> -->
                                                                                                <!-- <input class="form-control mt-3"  v-model="form.minimum_offer" id='listing1' type="number" placeholder="Minimum Offer"> -->
                                                                                            <!-- </form> -->
                                                                                        <!-- </div>
                                                                                    </div> -->
                                                                                <!-- </div> -->

                                                                            <!-- </div> -->
                                                                        <!-- </div> -->
                                                                    <!-- </div> -->
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <a @click="$router.go(-1)" class="form-control mb-3 btn btn-outline-white"> Cancel</a>
                                                                    </div>
                                                                    <div class="col-lg-8">
                                                                        <input type="submit" :disabled="form.busy" value="Publish Your Request" class="form-control btn-green" id="register">
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
        .minimum-offer, .custom-checkbox{
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
                height: 60px !important;
            input{
                // height: auto !important;
                border: none;
                margin: 0 !important;
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
import SideBar from "./SidebarRequestComponent.vue";
import UploadImages from "vue-upload-drop-images";
import { createEditor } from 'vueditor';
export default ({

    components:{
        SideBar,
        UploadImages,
    },
      data:()=>({
        id: null,
        categories: [],
        conditions: [],
        brands: [],
        currencyIcon: null,
        imagenull: false,
        form : new form({
            title : null,
            type : 2 , // Requested
            condition:null,
            image : {},
            brand : null,
            description: null,
            category_id: null,
            price_from: null,
            price_to : null,
            draft: 1,
            price : 0,
        }),
        openSlideBar: false
    }),
    methods:{
        async saveProduct(){
           this.$Progress.start();
           if( jQuery.isEmptyObject(this.form.image)  ){
               this.imagenull = true;
               this.$Progress.fail();
           }else{
            const response = await this.form.post('/api/product/storeRequestItem').then((response)=>{
                this.$Progress.finish();
                this.form.reset();
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
    },

    beforeCreate() {
        this.$Progress.start();
    },
    mounted(){
        Fire.$emit('mounted');
        this.$Progress.finish();

        axios.get('/api/product/getProductData').then((response) => {
            this.categories = response.data.categories;
            this.conditions = response.data.conditions;
            this.brands = response.data.brands;
            this.currencyIcon = response.data.currencyIcon;
        });

    }

})
</script>
