<template>
    <div>
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
                            <span>Subscriptions</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->


    <!-- Latest Blog Section Begin -->
    <section class="subscriptions">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-8 offset-lg-2">
                        <h2>SUBSCRIPTION PLANS</h2>
                        <!-- <p class="title">Home is behind, the world ahead and there are many paths to tread through shadows to the edge.</p> -->
                    </div>                    
                </div>
                <div class="row price-row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                       <div class="inner">
                           <p class="type">Regular Membership</p>
                           <h3>FREE</h3>
                           <hr>
                           <p>50 Free Listings</p>
                           <p>Fees:  8% (Unlimited).</p>
                           <p> - </p>
                           <p> - </p>
                           <a href="#" class="btn bg-white">Get Started</a>
                       </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-12">
                       <div class="inner">
                           <p class="type">Silver Membership</p>
                           <h3>$ 19.99 /mo</h3>
                           <hr>
                           <p>100 Free Listings</p>
                           <p>Fees:  7% (10 items)</p>
                           <p>Fees:  8% afterwards</p>
                           <p> - </p>
                           <a href="#" class="btn bg-white">Get Started</a>
                       </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                       <div class="inner">
                           <p class="type">Gold Membership</p>
                            <h3>$ 49.99 /mo</h3>
                           <hr>
                           <p>250 Free Listings</p>
                           <p>Fees:  Free (2 items)</p>
                           <p>Fees:  7% afterwards</p>
                           <p> - </p>
                           <a href="#" class="btn bg-white">Get Started</a>
                       </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                       <div class="inner">
                           <p class="type">Platinum Membership</p>
                           <h3>$ 99.99 /mo</h3>
                           <hr>
                           <p>500 Free Listings</p>
                           <p>Fees:  Free (5 items)</p>
                           <p>Fees:  5% (50 items)</p>
                           <p>Fees:  7% afterwards</p>
                           <a href="#" class="btn bg-white">Get Started</a>
                       </div>
                    </div>

                </div>
                <div class="row bot-row">
                    <div class="col-5 d-none d-lg-block">
                        <img :src="'FrontEnd/images/sub-03.png'" alt="">
                        <img :src="'FrontEnd/images/sub-02.png'" alt="">
                        <img :src="'FrontEnd/images/sub-01.png'" alt="">
                    </div>
                    <!-- <div class="col-lg-7 col-sm-12">
                        <div class="inner-box">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nasct, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleife</p>
                        </div>
                    </div> -->
                </div>
            </div>
    </section>
    <!-- Latest Blog Section End -->

    </div>
</template>

<script>

export default ({
    mounted() {
        Fire.$emit('mounted');
    },
})
</script>
