<template>
    <div>
        <!-- Home For Guest -->
    <div v-show=" !logged">
        <!-- #Hero Section Begin -->
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
        <section class="auction-follow">
        <div class="container">
            <hr class="top">
            <h2>Latest Poducts</h2>
            <hr class="bot">

            <div class="inner-carousel">
                <div class="owl-carousel auction-follow-slide owl-theme">
                    <!-- Block Item -->
                    <div class="item">
                        <div class="inner-item postion-relative">
                            <a class="over-link" href="/"></a>
                            <img :src="'FrontEnd/images/Auctions/Product-01.png'" alt>
                            <h4>LUXURIOUS LEISURE - CONSTANCE MADSSEN</h4>
                            <p>Ends today at 21:00</p>
                        </div>
                    </div>

                    <!-- Block Item -->
                    <div class="item">
                        <div class="inner-item postion-relative">
                            <a class="over-link" href="/"></a>
                            <img :src="'FrontEnd/images/Auctions/Product-02.png'" alt>
                            <h4>LUXURIOUS LEISURE - CONSTANCE MADSSEN</h4>
                            <p>Ends today at 21:00</p>
                        </div>
                    </div>

                    <!-- Block Item -->
                    <div class="item">
                        <div class="inner-item postion-relative">
                            <a class="over-link" href="/"></a>
                            <img :src="'FrontEnd/images/Auctions/Product-03.jpg'" alt>
                            <h4>LUXURIOUS LEISURE - CONSTANCE MADSSEN</h4>
                            <p>Ends today at 21:00</p>
                        </div>
                    </div>

                    <!-- Block Item -->
                    <div class="item">
                        <div class="inner-item postion-relative">
                            <a class="over-link" href="/"></a>
                            <img :src="'FrontEnd/images/Auctions/Product-04.jpg'" alt>
                            <h4>LUXURIOUS LEISURE - CONSTANCE MADSSEN</h4>
                            <p>Ends today at 21:00</p>
                        </div>
                    </div>

                    <!-- Block Item -->
                    <div class="item">
                        <div class="inner-item postion-relative">
                            <a class="over-link" href="/"></a>
                            <img :src="'FrontEnd/images/Auctions/Product-05.jpg'" alt>
                            <h4>LUXURIOUS LEISURE - CONSTANCE MADSSEN</h4>
                            <p>Ends today at 21:00</p>
                        </div>
                    </div>

                    <!-- Block Item -->
                    <div class="item">
                        <div class="inner-item postion-relative">
                            <a class="over-link" href="/"></a>
                            <img :src="'FrontEnd/images/Auctions/Product-06.jpg'" alt>
                            <h4>LUXURIOUS LEISURE - CONSTANCE MADSSEN</h4>
                            <p>Ends today at 21:00</p>
                        </div>
                    </div>

                    <!-- Block Item -->
                    <div class="item">
                        <div class="inner-item postion-relative">
                            <a class="over-link" href="/"></a>
                            <img :src="'FrontEnd/images/Auctions/Product-07.jpg'" alt>
                            <h4>LUXURIOUS LEISURE - CONSTANCE MADSSEN</h4>
                            <p>Ends today at 21:00</p>
                        </div>
                    </div>

                    <!-- Block Item -->
                    <div class="item">
                        <div class="inner-item postion-relative">
                            <a class="over-link" href="/"></a>
                            <img :src="'FrontEnd/images/Auctions/Product-08.jpg'" alt>
                            <h4>LUXURIOUS LEISURE - CONSTANCE MADSSEN</h4>
                            <p>Ends today at 21:00</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </section>
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
    </div>
    <!-- Home For Looged -->
    <div v-show="logged">
        <section class="hero hero-logged" style="background:url(/FrontEnd/images/home-logged-banner.jpg);background-repeat: no-repeat;  height: 500px; position: relative;">
            <!--<div style="background: rgba(0, 0, 0, 0.7); width:100% ; height: 100%; position: absolute;left: 0; top: 0;"></div>-->
            <div class="container-fluid" style="background: rgb(0 0 0 / 80%); height: 100%; position: absolute;left: 0; top: 0;">
                <div class="row pt-5">
                    <h3 style="color: #fff; text-align: center;">What would you like to do today ?</h3>
                </div>
                <div class="row home-logged">
                    <div class="col-5 buy-side">
                        <!-- <a href="dollshouse.html" class="green">
                            <button class="green">Buy</button>
                        </a> -->
                        <!--<a href="#" class="green">Buy</a>-->

                        <div class="dropdown dropdown-hero" style="padding: 0 23px 0 21px;">
                            <button   id="dropdownMenuMarket" data-bs-toggle="dropsdown" type="button" aria-expanded="false" class="btn dropdown-toggle">
                                <span>Buy</span>
                                <svg id="Icon_down_solid" xmlns="http://www.w3.org/2000/svg" width="20.833" height="20.833" viewBox="0 0 20.833 20.833"><path id="Shape" d="M10.417,20.833A10.417,10.417,0,1,1,20.833,10.417,10.428,10.428,0,0,1,10.417,20.833ZM5.208,7.291A1.042,1.042,0,0,0,4.472,9.07L9.68,14.278a1.042,1.042,0,0,0,1.474,0L16.361,9.07A1.042,1.042,0,1,0,14.888,7.6l-4.472,4.472L5.945,7.6A1.035,1.035,0,0,0,5.208,7.291Z" fill="#fff"></path></svg>
                            </button>
                            <ul aria-labelledby="dropdownMenuMarket" class="dropdown-menu dropdown-menu-dark">
                                <li  v-for="category in categories" :key="category.id">
                                    <router-link class="dropdown-item" :to="{name: 'ShopCategoryComponent', params:{query: category.id}}">{{ category.title }}</router-link>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="divider"></div>

                    </div>

                    <div class="col-5 sell-side">
                        <!--<a href="#" class="pink">Sell</a>-->
                        <router-link to="/selling/sell_item" class="pink">
                            <button class="pink" style="padding: 9px 57px 8px ;">Sell</button>
                        </router-link>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Section End -->

        <!-- Start #Auction Follow -->
        <section class="auction-follow">
            <div class="container">
                <hr class="top">
                <h2>Recent Viewed</h2>
                <hr class="bot">

                <div class="inner-carousel">
                    <div class="owl-carousel auction-follow-slide owl-theme">
                        <!-- Block Item -->
                        <div class="item">
                            <div class="inner-item postion-relative">
                                <a class="over-link" href="/"></a>
                                <img :src="'FrontEnd/images/Auctions/Product-01.png'" alt>
                                <h4>LUXURIOUS LEISURE - CONSTANCE MADSSEN</h4>
                                <p>Ends today at 21:00</p>
                            </div>
                        </div>

                        <!-- Block Item -->
                        <div class="item">
                            <div class="inner-item postion-relative">
                                <a class="over-link" href="/"></a>
                                <img :src="'FrontEnd/images/Auctions/Product-02.png'" alt>
                                <h4>LUXURIOUS LEISURE - CONSTANCE MADSSEN</h4>
                                <p>Ends today at 21:00</p>
                            </div>
                        </div>

                        <!-- Block Item -->
                        <div class="item">
                            <div class="inner-item postion-relative">
                                <a class="over-link" href="/"></a>
                                <img :src="'FrontEnd/images/Auctions/Product-03.jpg'" alt>
                                <h4>LUXURIOUS LEISURE - CONSTANCE MADSSEN</h4>
                                <p>Ends today at 21:00</p>
                            </div>
                        </div>

                        <!-- Block Item -->
                        <div class="item">
                            <div class="inner-item postion-relative">
                                <a class="over-link" href="/"></a>
                                <img :src="'FrontEnd/images/Auctions/Product-04.jpg'" alt>
                                <h4>LUXURIOUS LEISURE - CONSTANCE MADSSEN</h4>
                                <p>Ends today at 21:00</p>
                            </div>
                        </div>

                        <!-- Block Item -->
                        <div class="item">
                            <div class="inner-item postion-relative">
                                <a class="over-link" href="/"></a>
                                <img :src="'FrontEnd/images/Auctions/Product-05.jpg'" alt>
                                <h4>LUXURIOUS LEISURE - CONSTANCE MADSSEN</h4>
                                <p>Ends today at 21:00</p>
                            </div>
                        </div>

                        <!-- Block Item -->
                        <div class="item">
                            <div class="inner-item postion-relative">
                                <a class="over-link" href="/"></a>
                                <img :src="'FrontEnd/images/Auctions/Product-06.jpg'" alt>
                                <h4>LUXURIOUS LEISURE - CONSTANCE MADSSEN</h4>
                                <p>Ends today at 21:00</p>
                            </div>
                        </div>

                        <!-- Block Item -->
                        <div class="item">
                            <div class="inner-item postion-relative">
                                <a class="over-link" href="/"></a>
                                <img :src="'FrontEnd/images/Auctions/Product-07.jpg'" alt>
                                <h4>LUXURIOUS LEISURE - CONSTANCE MADSSEN</h4>
                                <p>Ends today at 21:00</p>
                            </div>
                        </div>

                        <!-- Block Item -->
                        <div class="item">
                            <div class="inner-item postion-relative">
                                <a class="over-link" href="/"></a>
                                <img :src="'FrontEnd/images/Auctions/Product-08.jpg'" alt>
                                <h4>LUXURIOUS LEISURE - CONSTANCE MADSSEN</h4>
                                <p>Ends today at 21:00</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- End #Auction Follow -->



        <!-- Start #Auction Follow -->
        <section class="auction-follow auc-soon">
            <div class="container">
                <hr class="top">
                <h2>My Bids And Offers</h2>
                <hr class="bot">
                <!-- owl-carousel auction-follow-slide owl-theme -->
                <div class="inner-carousel">
                    <div class="owl-carousel auc-soon-slide owl-theme">
                        <!-- Block Item -->
                        <div class="item">
                            <div class="inner-item positionrelative">
                                <a class="over-link" href="/"></a>
                                <img :src="'FrontEnd/images/Auctions/Product-09.jpg'" alt>
                                <h4>LUXURIOUS LEISURE - CONSTANCE MADSSEN</h4>
                                <p>Ends today at 21:00</p>
                            </div>
                        </div>

                        <!-- Block Item -->
                        <div class="item">
                            <div class="inner-item positionrelative">
                                <a class="over-link" href="/"></a>
                                <img :src="'FrontEnd/images/Auctions/Product-10.jpg'" alt>
                                <h4>LUXURIOUS LEISURE - CONSTANCE MADSSEN</h4>
                                <p>Ends today at 21:00</p>
                            </div>
                        </div>

                        <!-- Block Item -->
                        <div class="item">
                            <div class="inner-item positionrelative">
                                <a class="over-link" href="/"></a>
                                <img :src="'FrontEnd/images/Auctions/Product-11.jpg'" alt>
                                <h4>LUXURIOUS LEISURE - CONSTANCE MADSSEN</h4>
                                <p>Ends today at 21:00</p>
                            </div>
                        </div>

                        <!-- Block Item -->
                        <div class="item">
                            <div class="inner-item positionrelative">
                                <a class="over-link" href="/"></a>
                                <img :src="'FrontEnd/images/Auctions/Product-12.jpg'" alt>
                                <h4>LUXURIOUS LEISURE - CONSTANCE MADSSEN</h4>
                                <p>Ends today at 21:00</p>
                            </div>
                        </div>

                        <!-- Block Item -->
                        <div class="item">
                            <div class="inner-item positionrelative">
                                <a class="over-link" href="/"></a>
                                <img :src="'FrontEnd/images/Auctions/Product-13.jpg'" alt>
                                <h4>LUXURIOUS LEISURE - CONSTANCE MADSSEN</h4>
                                <p>Ends today at 21:00</p>
                            </div>
                        </div>

                        <!-- Block Item -->
                        <div class="item">
                            <div class="inner-item positionrelative">
                                <a class="over-link" href="/"></a>
                                <img :src="'FrontEnd/images/Auctions/Product-14.jpg'" alt>
                                <h4>LUXURIOUS LEISURE - CONSTANCE MADSSEN</h4>
                                <p>Ends today at 21:00</p>
                            </div>
                        </div>

                        <!-- Block Item -->
                        <div class="item">
                            <div class="inner-item positionrelative">
                                <a class="over-link" href="/"></a>
                                <img :src="'FrontEnd/images/Auctions/Product-15.jpg'" alt>
                                <h4>LUXURIOUS LEISURE - CONSTANCE MADSSEN</h4>
                                <p>Ends today at 21:00</p>
                            </div>
                        </div>

                        <!-- Block Item -->
                        <div class="item">
                            <div class="inner-item positionrelative">
                                <a class="over-link" href="/"></a>
                                <img :src="'FrontEnd/images/Auctions/Product-16.jpg'" alt>
                                <h4>LUXURIOUS LEISURE - CONSTANCE MADSSEN</h4>
                                <p>Ends today at 21:00</p>
                            </div>
                        </div>

                        <!-- Block Item -->
                        <div class="item">
                            <div class="inner-item positionrelative">
                                <a class="over-link" href="/"></a>
                                <img :src="'FrontEnd/images/Auctions/Product-17.jpg'" alt>
                                <h4>LUXURIOUS LEISURE - CONSTANCE MADSSEN</h4>
                                <p>Ends today at 21:00</p>
                            </div>
                        </div>

                        <!-- Block Item -->
                        <div class="item">
                            <div class="inner-item positionrelative">
                                <a class="over-link" href="/"></a>
                                <img :src="'FrontEnd/images/Auctions/Product-18.jpg'" alt>
                                <h4>LUXURIOUS LEISURE - CONSTANCE MADSSEN</h4>
                                <p>Ends today at 21:00</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
    </div>
</template>

<script>
export default({
    data: () => ({
        loaded: true,
        auth: null,
        categories : {},
        products: {},
        logged : false,
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
        if (localStorage.getItem("token")) {
            this.logged = true;
        }
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
