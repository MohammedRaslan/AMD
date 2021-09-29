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
<section class="subscribe-here selling" style="background-color: #1B252C;">
    <div class="over-lay-selling d-none" @click="openSlideBar = !openSlideBar" :aria-pressed="openSlideBar ? 'true' : 'false'" :class="{ 'd-block1': openSlideBar }"></div>
    <div class="container">
        <div class="row pb-5">

            <div class="top-tabs p-0 mb-4 bg-transparent">
                <h1 class='py-3 py-lg-5 text-milky'>Subscription <span @click="openSlideBar = !openSlideBar" :aria-pressed="openSlideBar ? 'true' : 'false'" class="open-tabs"><i class="fa fa-bars"></i></span> </h1>
            </div>

            <side-bar :openSlideBar='openSlideBar'></side-bar>

            <div class="col-lg-10 col-md-8 col-sm-12 content px-2 border-0 py-0" >
                <div class="border border-milky border-2 px-4 border-radius-5">
                    <h2 class="pt-5 pb-4" style="color: white;">Free</h2>
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
            </div>


        </div>

    </div>
</section>
<!-- Latest Blog Section End -->

    </div>
</template>

<script>
    import SideBar from './SideBarComponent.vue'
    export default {
         data: () => ({
            openSlideBar: false
        }),
         components:{
            SideBar,
        },
    }

</script>
