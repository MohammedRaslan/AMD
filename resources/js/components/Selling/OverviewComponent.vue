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
        <div class="over-lay-selling d-none" @click="openSlideBar = !openSlideBar" :aria-pressed="openSlideBar ? 'true' : 'false'" :class="{ 'd-block1': openSlideBar }"></div>
        <div class="container">
            <div class="row">
                <div class="top-tabs p-0 mb-4">
                    <h2 class='py-3 py-lg-5'>Selling <span @click="openSlideBar = !openSlideBar" :aria-pressed="openSlideBar ? 'true' : 'false'" class="open-tabs"><i class="fa fa-bars"></i></span> </h2>
                </div>
            <!-- Compnent Here -->
            <side-bar :openSlideBar='openSlideBar'></side-bar>

            <!-- End Component  -->
                <div class="col-xl-10 col-md-12">
                    <h2 v-if="message != '' " class="text-center">{{message}}</h2>
                    <div class="tab-content" id="v-pills-tabContent" v-for="product in products.data" :key="product.id">
                        <div class="inner-content">
                            <!-- Tab1 Overview -->
                             <div class="tab-pane fade show openSlideBar" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
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
                                        <div class="col-lg-3 col-md-12 price">
                                            <p>Price</p>
                                            <h5>$ {{ product.price }}</h5>
                                            <p style="display:grid">created at in <span>{{ product.created_at | myDate }}</span></p>
                                            <!-- <button class="btn btn-outline-warning"> <a href="#">New Offer Received!</a> </button> -->
                                        </div>
                                        <div class="col-lg-2 col-md-12 btns">
                                           <div class="inner-gruop">
                                                <div class="inner" v-if="product.draft == 0">
                                                    <button class="btn btn-primary"><router-link :to="{name: 'ShopDetailComponent', params:{query: product.id}}">View</router-link></button>
                                                </div>
                                                  <div class="inner" v-if="product.draft == 1">
                                                    <button class="btn btn-secondary"><router-link :to="{name: 'ProductCreateShipping', params:{id: product.id}}">Complete</router-link></button>
                                                </div>
                                                <div class="inner">
                                                    <button class="btn btn-danger" v-if="product.status == 1" :id="'product_'+product.id" @click="changeStatus(product.id)"><a >Suspend</a></button>
                                                    <button class="btn black" v-else :id="'product_'+product.id" @click="changeStatus(product.id)"><a >Suspended</a></button>

                                                </div>
                                                <div class="inner">
                                                    <button class="btn btn-outline-danger"><router-link to="#">Update</router-link></button>
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
            <pagination :data="products" @pagination-change-page="getProducts"></pagination>
        </div>
    </section>
    <!-- Latest Blog Section End -->
    </div>
</template>
<style  scoped>
    .black{
        background-color: black !important;
        color: white !important;
    }
</style>
<script>
import SideBar from "./SidebarComponent";
export default ({
    data :()=>({
        loading : false,
        products: {},
        message : '',
        pagination: {},
        openSlideBar: false
    }),
    components:{
        SideBar,
    },
    methods:{
        str_replace(str){
            str = str.replace('public',window.location.origin + '/storage');
            return str;
        },
        getProducts(page = 1){
            axios.get('/api/product/getUserProduct?page=' + page).then((response) => {
            this.products = response.data;
            if(response.data.data.length == 0 ){
                this.message = 'You dont have products';
                }
        });
        },
        changeStatus(product_id){
            axios.get('/api/product/changeStatus/'+product_id).then((response) => {
                Toast.fire({
                        icon: 'success',
                        title: 'Status Changed Successfully'
                    });
                  if(response.data.status == 1){
                    document.getElementById("product_"+product_id).classList.remove('black');
                    document.getElementById("product_"+product_id).innerHTML = 'Suspend'
                    document.getElementById("product_"+product_id).classList.add('btn-danger');
                }else{
                    document.getElementById("product_"+product_id).classList.remove('btn-danger');
                    document.getElementById("product_"+product_id).innerHTML = 'Suspened'
                    document.getElementById("product_"+product_id).classList.add('black');
                }
            });
        },
        greet: function () {
            alert('Hello')
        }
    },
    beforeCreate() {
        this.$Progress.start();
    },
    mounted(){
        Fire.$emit('mounted');
        this.$Progress.finish();
        this.getProducts();
        Fire.$emit('mounted');
    }
})
</script>
