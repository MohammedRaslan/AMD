<template>
    <div>
        <section class="dells">
            <div class="dells-top">
                <div class="inner-top">
                    <div class="container">
                        <h2>Dolls</h2>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb Section Begin -->
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
                                    <span>Dolls</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- Breadcrumb Section End -->

            <div class="container">
                <div class="sort row select-dolls">
                    <div class="inner-sort col-sm-6 col-6">
                        <div class="nice-select form-select1" tabindex="0">
                            <span class="current">Price Low to High</span>
                            <ul class="list">
                                <li data-value="Price Low to High" class="option selected">Price Low to High</li>
                                <li data-value="1" class="option">Price High to Low</li>
                            </ul>
                        </div>
                    </div>

                <div class="inner-sort col-sm-6 col-6">
                    <div class="nice-select form-select" tabindex="0">
                        <span class="current">Show 20 Items</span>
                        <ul class="list">
                            <li data-value="Show 20 Items" class="option selected">Show 20 Items</li>
                            <li data-value="1" class="option">Show 40 Items</li><li data-value="2" class="option">Show 60 Items</li>
                        </ul>
                    </div>
                </div>

                <div class="inner-sort text-sm-center col-sm-12">
                    <form action="">
                        <input type="search" name="search" placeholder="Search here" id="search">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="27" viewBox="0 0 19.944 19.945">
                                <g id="Icon_20_Grey_Search" data-name="Icon / 20 / Grey / Search" transform="translate(0 0)">
                                    <path id="Shape" d="M18.279,19.945a1.656,1.656,0,0,1-1.179-.488l-4.334-4.334a.389.389,0,0,1-.034-.041c-.009-.011-.017-.022-.026-.033a8.2,8.2,0,1,1,2.344-2.344l.032.026a.4.4,0,0,1,.042.035L19.457,17.1a1.667,1.667,0,0,1-1.179,2.845ZM8.2,2.842A5.358,5.358,0,1,0,13.558,8.2,5.364,5.364,0,0,0,8.2,2.842Z" fill="#FECC2F"/>
                                </g>
                            </svg>
                    </form>
                </div>
            </div>

            <div v-if="loading">
                <div class="row del-product"   >
                        <!-- Block Item -->
                        <div class="col-lg-3 col-md-6 col-sm-12" v-for="index in 8" :key="index" >
                            <div class="inner">
                                <figure style="height: 230px;background-color: gray;">
                                    <a class="link-del" href="_shop-details2.htm">
                                        <img  alt="">
                                    </a>
                                    </figure>
                                <h4 style="background-color:grey; height:25px"><a class="link-del" href="_shop-details2.htm"> </a> </h4>

                            </div>
                        </div>
                    </div>
            </div>


            <div class="row del-product" v-else>
                <!-- Block Item -->
                <div class="col-lg-3 col-md-6 col-sm-12" v-for="(product, index) in products" :key="index">
                    <div class="inner">
                        <figure>
                            <router-link class="link-del" :to="{name: 'ShopDetailComponent', params:{query: product.id}}">
                                <img  :src='str_replace(product.image)' alt="">
                            </router-link>
                            </figure>
                        <h4><a class="link-del" href="_shop-details2.htm">{{ product.title }}</a> </h4>
                        <h5>$ {{ product.price }}</h5>
                        <h6>
                            <span v-if="product.best_offer" class="float-left">or Best Offer</span>
                           
                                <Wishlist :product_id="product.id" 
                                          :userAddedItemToWishlist="product.userAddedItemToWishlist"
                                          :wishlistCount="product.wishlistCount"
                                          :product_user_id="product.user_id">
                                </Wishlist>
                           
                        </h6>
                    </div>
                </div>
            </div>
            <div class="pagination-product">
                
            </div>

            </div>
        </section>
    </div>
</template>


<script>
import Wishlist from "./widgets/WishlistComponent";
export default {
    data:()=>({
        id : null,
        loading: true,
        products:{},
    }),
     components: {
        Wishlist,
    },
    methods:{
        str_replace: function(str){
            str = str.replace('public',window.location.origin + '/storage');
            return str;
        },
        getProducts: function(){
            this.id = this.$route.params.query;
            axios.get('/api/category/getCategoryProducts/'+this.id).then((response) =>{
            this.products = response.data;
            this.$Progress.finish();
            this.loading = false;
        });
        }
    },
   mounted(){
        Fire.$emit('mounted');
        this.getProducts();
   }
}
</script>
