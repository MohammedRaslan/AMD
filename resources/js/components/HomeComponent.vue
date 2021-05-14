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
                                <div class="inner-img h-100" >
                                </div>
                            </div>
                            <div class="col-lg-7 details col-md-6 col-sm-12">
                               <div class="inner-title">
                                    <h2>CORPSE BRIDE <br class="d-none d-lg-block d-xl-block"> 12” SET </h2>
                                    <p>MCFARLANE 2005 RARE TIM BURTON</p>
                                    <button class="btn position-relative"><a href="dolls.html" class="over-link"></a> Buy Now</button>
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
                                <div class="inner-img h-100" >
                                </div>
                            </div>
                            <div class="col-lg-7 details col-md-6 col-sm-12">
                               <div class="inner-title">
                                    <h2>CORPSE BRIDE <br> 12” SET </h2>
                                    <p>MCFARLANE 2005 RARE TIM BURTON</p>
                                    <button class="btn position-relative"><a href="dolls.html" class="over-link"></a> Buy Now</button>
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
                                <div class="inner-img h-100" >
                                </div>
                            </div>
                            <div class="col-lg-7 details col-md-6 col-sm-12">
                               <div class="inner-title">
                                    <h2>CORPSE BRIDE <br> 12” SET </h2>
                                    <p>MCFARLANE 2005 RARE TIM BURTON</p>
                                    <button class="btn position-relative"><a href="dolls.html" class="over-link"></a> Buy Now</button>
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
    <section class="auction-follow">
        <div class="container">
            <hr class="top">
            <h2>Auctions you follow</h2>
            <hr class="bot">

<form @submit.prevent="test">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" v-model="form.email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
       <div v-if="form.errors.has('email')" style="color:red" v-html="form.errors.get('email')" />
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" v-model="form.password" class="form-control" id="exampleInputPassword1">
       <div v-if="form.errors.has('password')" class="alert alert-danger" v-html="form.errors.get('password')" />
  </div>
  <button type="submit" :disabled="form.busy" class="btn btn-primary">Submit</button>
  <div v-if="form.successful">HHHH</div>
</form>
            <div class="inner-carousel">
                <div class="owl-carousel auction-follow-slide owl-theme">
                <!-- Block Item -->
                <div class="item">
                    <div class="inner-item postion-relative">
                        <a class='over-link' href='shop-details.html'></a>
                        <!-- <img src="{{ asset('FrontEnd') }}/images/Auctions/Product-01.png" alt=""> -->
                        <h4>LUXURIOUS LEISURE - CONSTANCE MADSSEN</h4>
                        <p>Ends today from 21:00</p>
                    </div>
                </div>
                

            </div>
            </div>
        </div>
    </section>
    <!-- End #Auction Follow -->
    

    <!-- Product Section Begin -->
    <section class="product product-section spad position-relative">
        <!-- <img src="{{ asset('FrontEnd') }}/images/filter.png" class="img-filter" alt=""> -->
        <div class="img-top">
            <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#fecc2f" fill-opacity="1" d="M0,96L480,32L960,192L1440,32L1440,0L960,0L480,0L0,0Z"></path>
            </svg> -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#fecc2f" fill-opacity="1" d="M0,32L480,96L960,32L1440,192L1440,0L960,0L480,0L0,0Z"></path>
            </svg>
            <svg style="position: absolute;top: -13px;right: 0;left: 0;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
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
                                <li class="active" data-filter="*">All</li>
                                <li data-filter=".cat1">Category 1</li>
                                <li data-filter=".cat2">Category 2</li>
                                <li data-filter=".cat3">Category 3</li>
                                <li data-filter=".cat4">Category 4</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row product__filter">
                        <!-- Block Item -->                        
                        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix cat1">
                            <div class="product__item position-relative">
                                <a class="over-link" href="shop-details.html"></a>
                                <!-- <div class="product__item__pic set-bg" data-setbg="{{ asset('FrontEnd') }}/images/Products/Product-01.png"></div> -->
                                <div class="product__item__text">
                                    <h6>Item Name</h6>
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
    <section class="auction-follow auc-soon">
        <div class="container">
            <hr class="top">
            <h2>Auctions end soon</h2>
            <hr class="bot">
        <!-- owl-carousel auction-follow-slide owl-theme -->
            <div class="inner-carousel">
                <div class="owl-carousel auc-soon-slide owl-theme">
                    <!-- Block Item -->
                    <div class="item">
                        <div class="inner-item positionrelative">
                            <a class="over-link" href="shop-details.html"></a>
                            <!-- <img src="{{ asset('FrontEnd') }}/images/Auctions/Product-01.png" alt=""> -->
                            <h4>LUXURIOUS LEISURE - CONSTANCE MADSSEN</h4>
                            <p>Ends today from 21:00</p>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </section>
    <!-- End #Auction Follow -->
    </div>
</template>
<style scoped>
    .block{
        display: block i !important;
    }
</style>
<script>
export default({
    data: () => ({
        loaded: true,
        form: new form({
            email: '',
            password: '',
        }),
    }),
    methods:{
        async test(){
            const response = this.form.post('api/test');
            console.log(response);
        }
    },
    created(){
        this.$Progress.start();

    },
    mounted(){
        this.$Progress.finish();

    }
})
</script>
