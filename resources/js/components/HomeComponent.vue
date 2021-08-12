<template>
    <div>            <!-- #Hero Section Begin -->
    <section class="hero">
         <!-- Swiper -->
        <div class="swiper-container swiper-hero">
            <div class="swiper-wrapper">
                <!-- Block Item -->
                <div class="swiper-slide h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="over-lay"></div>
                            <div class="col-lg-5 col-md-6 col-sm-12 img-slid h-100">
                                <div class="inner-img h-100" :style="' background: url(FrontEnd/images/slider/doll_1.jpg);'" >
                                </div>
                            </div>
                            <div class="col-lg-7 details col-md-6 col-sm-12">
                               <div class="inner-title">
                                    <h2>Register Today <br class="d-none d-lg-block d-xl-block"> </h2>
                                    <p>and start listing your items</p>
                                    <button class="btn position-relative"><router-link to="/register" class="over-link"></router-link> SIGNUP</button>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Block Item -->
                <div class="swiper-slide h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="over-lay"></div>
                            <div class="col-lg-5 col-md-6 col-sm-12 img-slid h-100">
                                <div class="inner-img h-100" :style="' background: url(FrontEnd/images/slider/doll_2.jpg);'">
                                </div>
                            </div>
                            <div class="col-lg-7 details col-md-6 col-sm-12">
                               <div class="inner-title">
                                    <h2>Explore<br> </h2>
                                   <p>our Membership plans <br> (coming soon)</p>
                                    <button class="btn position-relative"><router-link to="/subscriptions" class="over-link"></router-link> EXPLORE </button>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Start #Auction Follow -->
    <!-- <section class="auction-follow">
        <div class="container">
            <hr class="top">
            <h2>Auctions you follow {{ auth }}</h2>
            <hr class="bot">
            <div class="inner-carousel">
                <div class="owl-carousel auction-follow-slide owl-theme">
                <div class="item">
                    <div class="inner-item postion-relative">
                        <a class='over-link' href='shop-details.html'></a>
                        <img src="{{ asset('FrontEnd') }}/images/Auctions/Product-01.png" alt="">
                        <h4>LUXURIOUS LEISURE - CONSTANCE MADSSEN</h4>
                        <p>Ends today from 21:00</p>
                    </div>
                </div>


            </div>
            </div>
        </div>
    </section> -->
    <!-- End #Auction Follow -->


    <!-- Product Section Begin -->
    <section class="product product-section spad position-relative">
        <!-- <img src="{{ asset('FrontEnd') }}/images/filter.png" class="img-filter" alt=""> -->
        <div class="img-top">
            <svg xmlns="http://www.w3.org/2000/svg" style="position: absolute; top: -22px;" viewBox="0 0 1440 320">
                <path fill="#fecc2f" fill-opacity="1" d="M0,32L480,96L960,32L1440,192L1440,0L960,0L480,0L0,0Z"></path>
            </svg>
            <svg style="position: absolute;top: -30px;right: 0;left: 0;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#fd1266" fill-opacity="1" d="M0,32L480,96L960,32L1440,192L1440,0L960,0L480,0L0,0Z"></path>
            </svg>
        </div>
        <div class="container swiper-container">
           <div class="row">
               <div class="col-lg-8">
                   <h2>Latest Items</h2>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="filter__controls">
                                <li class="active" data-filter="*" @click="random">All</li>
                                <li  v-for="category in categories" :key="category.id" :data-filter="'.cat_' + category.id " @click="fetchproducts(category.id)">{{ category.title }}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row ">
                        <!-- Block Item -->                        
                        <div v-for="product in products" :key="'product_'+product.id" class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix cat_1">
                            <div class="product__item position-relative">
                                <a class="over-link" href="/"></a>
                                <img class="product__item__pic set-bg" :src="str_replace(product.image)">
                                <div class="product__item__text">
                                    <h6>{{ product.title }}</h6>
                                    <h5>
                                        <a href="">Buy Now </a>
                                    </h5>
                                </div>
                            </div>
                        </div>



                    </div>
               </div>
           </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Start #Auction Follow -->
    <!-- <section class="auction-follow auc-soon">
        <div class="container">
            <hr class="top">
            <h2>Auctions end soon</h2>
            <hr class="bot">
            <div class="inner-carousel">
                <div class="owl-carousel auc-soon-slide owl-theme">
                    <div class="item">
                        <div class="inner-item positionrelative">
                            <a class="over-link" href="shop-details.html"></a>
                            <img src="{{ asset('FrontEnd') }}/images/Auctions/Product-01.png" alt="">
                            <h4>LUXURIOUS LEISURE - CONSTANCE MADSSEN</h4>
                            <p>Ends today from 21:00</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section> -->
    <!-- End #Auction Follow -->
    </div>
</template>

<script>
export default({
    data: () => ({
        loaded: true,
        auth: null,
        categories : {},
        products: {},
    }),
    methods:{
         fetchproducts: function(id){
             axios.get('/api/guest/getCategoryProducts/'+id).then((response) =>{
            this.products = response.data;
            this.$Progress.finish();
            this.loading = false;
       });
        },
         random: function(){
             axios.get('/api/product/random').then((response) =>{
            this.products = response.data;
        });
        },
        str_replace: function(str){
            str = str.replace('public',window.location.origin + '/storage');
            return str;
        }
    },
    created(){
        this.$Progress.start();
        if(localStorage.getItem('auth')){
           Toast.fire({
            icon: 'error',
            title: 'Not Authorize'
            });
            localStorage.removeItem('auth');
        }
        axios.get('/api/category/get').then((response) => {
            this.categories = response.data;
        });


    },
    mounted(){
        this.$Progress.finish();
        axios.get('/api/product/random').then((response) =>{
            this.products = response.data;
        });
        Fire.$emit('mounted');
   
    }
})
</script>
