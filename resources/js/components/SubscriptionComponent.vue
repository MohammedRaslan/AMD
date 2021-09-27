<template>

    <div>
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
                            <span>Subscriptions</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->


    <!-- Latest Blog Section Begin -->
    <section class="subscriptions pb-0">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 offset-lg-2">
                    <h2>SUBSCRIPTION PLANS</h2>
                </div>
            </div>
            <div class="row price-row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="inner px-2 h-100 first" id="first">
                        <p class="type">Regular</p>
                        <h3>FREE</h3>
                        <hr class="opacity-100 bg-white">
                        <p><span class="data"></span> 50 Free Listings monthly</p>
                        <p><span class="data"></span> Selling Fee 9% unlimited
                            <br>
                            final value fee.</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <router-link to="/subscriptions/free" class="btn bg-white"> Get Started</router-link>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="inner px-2 h-100 second" id="second">
                        <p class="type">Silver</p>
                        <h3>$ 19.99 /mo</h3>
                        <hr class="opacity-100 bg-white">
                        <p><span class="data data2"></span>100 Free Listings Monthly</p>
                        <p><span class="data data2"></span>7% final value fee on the first 10 items sold.</p>
                        <p><span class="data data2"></span>Unlimited 8% final value fee on the 11th item sold</p>
                        <p>&nbsp;</p>
                        <router-link to="/subscriptions/silver" class="btn bg-white">Get Started</router-link>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="inner px-2 h-100 third" id="third">
                        <p class="type">Gold</p>
                        <h3>$ 49.99 /mo</h3>
                        <hr class="opacity-100 bg-white">
                        <p><span class="data data2"></span>250 Free Listings</p>
                        <p><span class="data data2"></span>No final value fee on the first 2 items sold</p>
                        <p><span class="data data2"></span>Unlimited 7% final value fee on the 3rd item sold</p>
                        <p>&nbsp;</p>
                        <router-link to="/subscriptions/gold" class="btn bg-white">Get Started</router-link>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="inner px-2 h-100 fourth" id="fourth">
                        <p class="type">Platinum</p>
                        <h3>$ 99.99 /mo</h3>
                        <hr class="opacity-100 bg-white">
                        <p><span class="data data2"></span>500 Free Listings</p>
                        <p><span class="data data2"></span>No final value fee on the first 5 items sold</p>
                        <p><span class="data data2"></span>5% final value fee on the next 25 items sold</p>
                        <p><span class="data data2"></span>Unlimited 7% final value fee on the 31st item sold</p>
                        <router-link to="/subscriptions/platinum" class="btn bg-white">Get Started</router-link>
                    </div>
                </div>

            </div>
            <div class="row bot-row">
                <div class="col-5 d-none d-lg-block">
                    <img :src="'FrontEnd/images/sub-03.png'" alt="">
                    <img :src="'FrontEnd/images/sub-02.png'" alt="">
                    <img :src="'FrontEnd/images/sub-01.png'" alt="">
                </div>
                <div class="col-lg-7 col-sm-12">
                    <div class="inner-box">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nasct, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis
                            vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleife</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->



    </div>
</template>
<style scoped>
/*********** first active*************************/
/* .subscriptions .price-row>div .inner.first.first-hover p.type , .subscriptions .price-row>div .inner.first.first-hover h3{
    color: #fff !important;
} */
   /* .subscriptions .price-row>div .inner.first.first-hover{
        background-color: #22B3EB;
        z-index: 1;
    } */
/* .subscriptions .price-row>div .inner.first.first-hover span.data{
        display: none;
    } */

    /* .subscriptions .price-row>div:last-of-type .inner.first.first-hover{
        transform: translate(2px , -47px);
    } */

    /* .subscriptions .price-row>div .inner.first.first-hover{
        padding-top: 55px;
        transition: all 0.4s ease-in-out;
        transition: padding 0.1s;
        height: 100%;
    } */

    /* .subscriptions .price-row>div .inner.first.first-hover{

        position: absolute;
        height: auto;
        width: 100%;
        border-radius: 23px;
        transition: all 0.4s ease-in-out;
        transition: padding 0.1s;
        background-position: bottom;
        transform: translate(-2px , -47px);
    }

     .subscriptions .price-row>div .inner.first.first-hover a{
         display: block;
         padding-top: 5px;
     } */
/************** end first active******************************** */

/*********** second active*************************/
.subscriptions .price-row>div .inner.second.second-hover p.type , .subscriptions .price-row>div .inner.second.second-hover h3{
    color: #fff !important;
}
   .subscriptions .price-row>div .inner.second.second-hover{
        background-color: #A705E0;
        z-index: 1;
    }
.subscriptions .price-row>div .inner.second.second-hover span.data{
        display: none;
    }

    .subscriptions .price-row>div:last-of-type .inner.second.second-hover{
        transform: translate(2px , -47px);
    }

    .subscriptions .price-row>div .inner.second.second-hover{
        padding-top: 55px;
        transition: all 0.4s ease-in-out;
        transition: padding 0.1s;
        height: 100%;
    }

    .subscriptions .price-row>div .inner.second.second-hover{

        position: absolute;
        height: auto;
        width: 100%;
        border-radius: 23px;
        transition: all 0.4s ease-in-out;
        transition: padding 0.1s;
        background-position: bottom;
        transform: translate(-2px , -47px);
    }

     .subscriptions .price-row>div .inner.second.second-hover a{
         display: block;
         padding-top: 5px;
     }
/************** end second active******************************** */
    /*********** third active*************************/
     .subscriptions .price-row>div .inner.third.third-hover p.type ,  .subscriptions .price-row>div .inner.third.third-hover h3{
         color: #fff !important;
     }
   .subscriptions .price-row>div .inner.third.third-hover{
        background-color: #F31A6C;
        z-index: 1;
    }
.subscriptions .price-row>div .inner.third.third-hover span.data{
        display: none;
    }

    .subscriptions .price-row>div:last-of-type .inner.third.third-hover{
        transform: translate(2px , -47px);
    }

    .subscriptions .price-row>div .inner.third.third-hover{
        padding-top: 55px;
        transition: all 0.4s ease-in-out;
        transition: padding 0.1s;
        height: 100%;
    }

    .subscriptions .price-row>div .inner.third.third-hover{

        position: absolute;
        height: auto;
        width: 100%;
        border-radius: 23px;
        transition: all 0.4s ease-in-out;
        transition: padding 0.1s;
        background-position: bottom;
        transform: translate(-2px , -47px);
    }

     .subscriptions .price-row>div .inner.third.third-hover a{
         display: block;
         padding-top: 5px;
     }
/************** end third active******************************** */

/*********** fourth active*************************/
.subscriptions .price-row>div .inner.fourth.fourth-hover p.type , .subscriptions .price-row>div .inner.fourth.fourth-hover h3{
    color: #fff !important;
}
   .subscriptions .price-row>div .inner.fourth.fourth-hover{
        background-color: #a5841e;
        z-index: 1;
    }
.subscriptions .price-row>div .inner.fourth.fourth-hover span.data{
        display: none;
    }

    .subscriptions .price-row>div:last-of-type .inner.fourth.fourth-hover{
        transform: translate(2px , -47px);
    }

    .subscriptions .price-row>div .inner.fourth.fourth-hover{
        padding-top: 55px;
        transition: all 0.4s ease-in-out;
        transition: padding 0.1s;
        height: 100%;
    }

    .subscriptions .price-row>div .inner.fourth.fourth-hover{

        position: absolute;
        height: auto;
        width: 100%;
        border-radius: 23px;
        transition: all 0.4s ease-in-out;
        transition: padding 0.1s;
        background-position: bottom;
        transform: translate(-2px , -47px);
    }

     .subscriptions .price-row>div .inner.fourth.fourth-hover a{
         display: block;
         padding-top: 5px;
     }
/************** end forth active******************************** */


</style>
<script>

export default ({
    mounted() {
        Fire.$emit('mounted');
        axios.post('/api/getCurrentSubscription').then((response) => {
            if(response.data.subscription == 'FREE' || response.data.subscription == '' ){
                document.getElementById('first').className += ' first-hover';
            }else if(response.data.subscription == 'SILVER'){
                document.getElementById('second').className += ' second-hover';
            }else if(response.data.subscription == 'GOLD'){
                document.getElementById('third').className += ' third-hover';
            }else if(response.data.subscription == 'PLATINUM'){
                document.getElementById('fourth').className += ' fourth-hover';
            }
        });
    }

});
</script>
