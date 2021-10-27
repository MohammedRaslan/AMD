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
                                    <router-link to="/">Home</router-link>
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
               <div class="sort select-dolls">
                    <div class="row">
                        <div class="col-6 col-xl-2">
                            <div class="inner-sort mb-4">
                                <label class="text-green fs-14">Filter by</label>
                                <div class="nice-select form-select1  d-block" tabindex="0">
                                    <span class="current">All</span>
                                    <ul class="list">
                                        <li>All</li>
                                        <li data-value="All" class="option selected">All</li>
                                        <li data-value="1" class="option">Auchion</li>
                                        <li data-value="2" class="option">Listing</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-xl-2">
                            <div class="inner-sort mb-4">
                                <label class="text-maroon fs-14">Sort by</label>
                                <div class="nice-select form-select1 d-block nice-select-maroon" tabindex="1">
                                    <span class="current text-maroon">Price Low to High</span>
                                    <ul class="list">
                                        <li>Price Low to High</li>
                                        <li data-value="Price Low to High" class="option selected">Price Low to High</li>
                                        <li data-value="1" class="option">Price High to Low</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-xl-2">
                            <div class="inner-sort mb-4">
                                <label class="text-green fs-14">No of itmes</label>
                                <div class="nice-select form-select d-block" tabindex="2">
                                    <span class="current">Show 20 Items</span>
                                    <ul class="list">
                                        <li>Show 20 Items</li>
                                        <li data-value="Show 20 Items" class="option selected">Show 20 Items</li>
                                        <li data-value="1" class="option">Show 40 Items</li><li data-value="2" class="option">Show 60 Items</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-xl-3">
                            <div class="d-flex align-items-end h-100">
                                <div class="inner-sort mb-4 text-sm-center border-0 w-100">
                                    <form action="" class="border-yellow border-radius-20 p-2">
                                        <input type="search" name="search" class="w-100" placeholder="Search here" id="search">
                                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="20" height="27" viewBox="0 0 19.944 19.945">
                                                <g id="Icon_20_Grey_Search" data-name="Icon / 20 / Grey / Search" transform="translate(0 0)">
                                                    <path id="Shape" d="M18.279,19.945a1.656,1.656,0,0,1-1.179-.488l-4.334-4.334a.389.389,0,0,1-.034-.041c-.009-.011-.017-.022-.026-.033a8.2,8.2,0,1,1,2.344-2.344l.032.026a.4.4,0,0,1,.042.035L19.457,17.1a1.667,1.667,0,0,1-1.179,2.845ZM8.2,2.842A5.358,5.358,0,1,0,13.558,8.2,5.364,5.364,0,0,0,8.2,2.842Z" fill="#FECC2F"/>
                                                </g>
                                            </svg>
                                    </form>
                                </div>
                            </div>
                        </div>

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
                        <h4><router-link class="link-del" :to="{name: 'ShopDetailComponent', params:{query: product.id}}">{{ product.title }}</router-link> </h4>
                        <h5 v-if="product.type == 0"><span v-html=" product.currencyIcon"></span> {{ product.price }}</h5>
                        <h5 v-else>Bidding</h5>
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
            axios.get('/api/product/getVendorProducts/'+this.id).then((response) =>{

            this.products = response.data;
            this.$Progress.finish();
            this.loading = false;
            console.log(response);
        });
        }
    },
   mounted(){
        Fire.$emit('mounted');
        this.getProducts();
   }
}
</script>
