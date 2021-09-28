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
                                <span>Requested Item</span>
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
                    <h1 class='py-3 py-lg-5 text-green'>Requested Item <span @click="openSlideBar = !openSlideBar" :aria-pressed="openSlideBar ? 'true' : 'false'" class="open-tabs"><i class="fa fa-bars"></i></span> </h1>
                </div>
            <!-- Compnent Here -->
            <side-bar :openSlideBar='openSlideBar'></side-bar>
            <!-- End Component  -->
                <div class="col-xl-10 col-md-12">
                    <h3 class="text-center text-green my-5">No Products</h3>
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
