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
                        <div class="nice-select form-select" tabindex="0">
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
                            <span class="float-left">or Best Offer</span>
                            <span v-if="product.best_offer != userId">
                                <i class="far fa-heart heart" :id="'wishlist_'+product.id" @click="addToWishlist(product.id)"></i>
                                <span>{{ hearts }} </span>
                            </span>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="pagination-product">

                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="13.995" viewBox="0 0 8 13.995">
                                    <g id="Icon_20_Grey_Arrow" data-name="Icon / 20 / Grey / Arrow" transform="translate(13.998 -3.002) rotate(90)">
                                        <path id="Shape" d="M7.712,7.69,1.678,13.708a.981.981,0,0,1-1.39-1.386L5.627,7,.288,1.673A.981.981,0,0,1,1.678.287L7.712,6.3a.978.978,0,0,1,0,1.386Z" transform="translate(16.998 5.998) rotate(90)" fill="#99abb9"/>
                                    </g>
                                </svg>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="dolls.html">1</a></li>
                        <li class="page-item"><a class="page-link" href="_dolls2.html">2</a></li>
                        <li class="page-item"><a class="page-link" href="_dolls3.html">3</a></li>
                        <li class="page-item active">
                            <a class="page-link" href="_dolls2.html" aria-label="Next">
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="13.995" viewBox="0 0 8 13.995">
                                    <g id="Icon_20_Grey_Arrow" data-name="Icon / 20 / Grey / Arrow" transform="translate(-5.998 16.998) rotate(-90)">
                                    <path id="Shape" d="M7.712,7.69,1.678,13.708a.981.981,0,0,1-1.39-1.386L5.627,7,.288,1.673A.981.981,0,0,1,1.678.287L7.712,6.3a.978.978,0,0,1,0,1.386Z" transform="translate(16.998 5.998) rotate(90)" fill="#7ac943"/>
                                    </g>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            </div>
        </section>
    </div>
</template>


<script>
export default {
    data:()=>({
        id : null,
        loading: true,
        products:{},
        hearts : 0,
        userId: null,
    }),
    methods:{
        str_replace(str){
            str = str.replace('public',window.location.origin + '/storage');
            return str;
        },
        addToWishlist(product_id){
            axios.get('/api/product/AddToWishlist/'+product_id).then((response) => {
                if(response.data.status == 'added'){
                    document.getElementById("wishlist_"+product_id).classList.remove('far');
                    document.getElementById("wishlist_"+product_id).classList.add('fas');
                }else{
                    document.getElementById("wishlist_"+product_id).classList.remove('fas');
                    document.getElementById("wishlist_"+product_id).classList.add('far');
                }
                this.hearts = response.data.count;
            });
        }

    },
   mounted(){
        axios.get('/api/user/getUserId').then((response) => {
            this.userId = response.data;
        });
        Fire.$emit('mounted');
        this.id = this.$route.params.query;
        axios.get('/api/category/getCategoryProducts/'+this.id).then((response) =>{
           this.products = response.data;
           console.log(response.data);
           this.$Progress.finish();
           this.loading = false;
       });
   }
}
</script>
