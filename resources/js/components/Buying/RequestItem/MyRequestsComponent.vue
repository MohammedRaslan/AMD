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
                                <span>My Requests</span>
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
                    <h1 class='py-3 py-lg-5 text-green'>My Requests<span @click="openSlideBar = !openSlideBar" :aria-pressed="openSlideBar ? 'true' : 'false'" class="open-tabs"><i class="fa fa-bars"></i></span> </h1>
                </div>
            <!-- Compnent Here -->
            <side-bar :openSlideBar='openSlideBar'></side-bar>
            <!-- End Component  -->
                <div class="col-xl-10 col-md-12">
                        <h3 v-if="message != '' " class="text-center">{{message}}</h3>
                        <div class="tab-content" id="v-pills-tabContent" v-for="product in products.data" :key="product.id">
                            <div class="inner-content">
                                <!-- Tab1 Overview -->
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <!-- Block Item -->
                                    <div class="inner-item">
                                        <div class="row">
                                            <div class="col-lg-7 detalis">
                                                <div class="row">
                                                    <div class="col-sm-1 dot" id="dot"><div class="inner"></div></div>

                                                    <div class="col-lg-4 col-md-3 col-sm-4 col-6">
                                                        <figure>
                                                            <img :src='str_replace(product.image)' alt="">
                                                        </figure>
                                                    </div>

                                                    <div class="col-lg-7 col-md-6 col-sm-6 col-6">
                                                        <h5>
                                                            {{ product.title }}
                                                            <p>Dolls</p>
                                                        </h5>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-2 col-md-12 btns">
                                            <div class="inner-gruop">
                                                    <div class="inner" >
                                                        <button class="btn btn-primary"><router-link :to="{name: 'ShopDetailComponent', params:{query: product.id}}">View</router-link></button>
                                                    </div>
                                                    <div class="inner">
                                                        <button class="btn btn-outline-maroon" type="button" @click="deleteProduct(product.id)"><a href="#">Delete</a></button>x
                                                    </div>

                                                    <!-- <div class="inner">
                                                        <button class="btn btn-outline-danger"><a href="#">Delete</a></button>
                                                    </div> -->
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>


                                </div>
                            </div>
                        </div>
                        <pagination :data="products" @pagination-change-page="getProducts"></pagination>
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
        message : '',
        products: {},
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
          str_replace(str){
            str = str.replace('public',window.location.origin + '/storage');
            return str;
        },
        getProducts(page = 1) {
                 axios.get('/api/product/getRequestedItems?page=' + page).then((response) => {
            this.products = response.data;
            if(response.data.length == 0 ){
                this.message = 'You dont have products';
                }
        });
        },
    },

    beforeCreate() {
        this.$Progress.start();
    },
    mounted(){
        Fire.$emit('mounted');
        this.$Progress.finish();

        this.getProducts()

    }

})
</script>
