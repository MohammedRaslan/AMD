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
                <h2>Drafted <span class="open-tabs"><i class="fa fa-bars"></i></span> </h2>
            <!-- Compnent Here -->
            <side-bar></side-bar>
            <!-- End Component  -->
                <div class="col-xl-10 col-md-12">
                    <h2 v-if="message != '' " class="text-center">{{message}}</h2>
                    <div class="tab-content"  v-for="product in products.data" :key="product.id" :id="'v-pills-tabContent product_'+product.id">
                        <div class="inner-content">
                            <!-- Tab1 Overview -->
                             <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <!-- Block Item -->
                                <div class="inner-item">
                                    <div class="row">
                                        <div class="col-lg-7 detalis">
                                            <div class="row">
                                                <div class="col-sm-1 dot"><div class="inner"></div></div>
                                                
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
                                                <div class="inner">
                                                    <button class="btn btn-primary" disabled><router-link  :to="{name: 'EditProductComponent', params:{id: product.id}}" >Publish</router-link></button>
                                                </div>
                                                <div class="inner">
                                                    <button class="btn btn-secondary"><router-link :to="{name: 'EditProductComponent', params:{id: product.id}}">Edit</router-link></button>
                                                </div>
                                                <div class="inner">
                                                    <button class="btn btn-outline-danger" type="button" @click="deleteProduct(product.id)"><a href="#">Delete</a></button>
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

<script>
import SideBar from "./SidebarComponent";
export default ({
    data :()=>({
        loading : false,
        products: {},
        message : '',
    }),
    components:{
        SideBar,
    },
    methods:{
        str_replace(str){
            str = str.replace('public',window.location.origin + '/storage');
            return str;
        },
        deleteProduct(id){
            axios.get('/api/product/deleteProduct/'+id).then((response) =>{
                if(response.data){
                   var elm = document.getElementById('product_'+id).remove();
                   elm.parentNode.removeChild(elm);
                }
            });
        },
        complete(draft){
            this.$router.push({
                name:'SellingOverview', 
                params:{
                    id: '12',
                }
            });
            },
        getProducts(page = 1){
            axios.get('/api/product/getUserProductDrafted?page=' + page).then((response) => {
            this.products = response.data;
              if(response.data == '' ){
                this.message = 'You dont have products';
                }
        });
        }
    },
    beforeCreate() {
        this.$Progress.start();
    },
    mounted(){
        Fire.$emit('mounted');
        // console.log(window.location.origin, this.$route);
        this.$Progress.finish();
        this.getProducts();
    }
})
</script>
