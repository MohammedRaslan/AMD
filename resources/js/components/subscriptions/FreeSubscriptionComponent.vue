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
<section class="subscribe-here" style="background-color: #1B252C;">
    <div class="container">
       
        <div class="row pt-5 pb-5">
           
            <div class="col-lg-8 col-md-8 col-sm-12 content" style="padding-left: 40px;">
                <h1 style="color: white;">Free</h1>
                <ul class="df">
                    <li>50 Free Listings monthly</li>
                    <li>Selling Fee 9% unlimited final value fee.</li>
                </ul> 
                  <h3 style="color: white;">Terms and Conditions</h3>
                        <p class="terms-text">
                            * Any change/cancellation to the membership will take effect as of the following month
                                of subscription.<br>
                                * If you decide to cancel a monthly subscription after the start of the subscription month,
                                no refunds will be issued. Your membership will change to the free regular membership
                                as of the following subscription month.<br>
                                * Yearly subscriptions are NON-REFUNDABLE
                                * If you choose to upgrade your yearly membership to a higher tier, the upgrade will be
                                effective as of the following month. The extra cost for the remaining months in
                                the subscription year will be charged to your original method of payment.<br>
                                * If you choose to downgrade your yearly membership to a lower tier, no refund will be
                                issued.
                        </p>
                  <!-- Subscribe Button -->
                  <div></div>
            </div>

            <div class="d-sm-nonecol-lg-4 col-md-4 d-sm-12 d-md-block" style="display: flex !important; justify-content: flex-end;">
              
                <img :src="'/FrontEnd/images/sub-02.png'" alt="">
            </div>

        </div>
        
    </div>
</section>
<!-- Latest Blog Section End -->

    </div>
</template>