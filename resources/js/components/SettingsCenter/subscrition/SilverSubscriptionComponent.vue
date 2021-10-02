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
                     <div class="top-tabs p-0 mb-4">
                        <h1 class='py-3 py-lg-5 text-milky'>Subscription <span @click="openSlideBar = !openSlideBar" :aria-pressed="openSlideBar ? 'true' : 'false'" class="open-tabs"><i class="fa fa-bars"></i></span> </h1>
                    </div>

                    <side-bar :openSlideBar='openSlideBar'></side-bar>

                    <div class="col-lg-10 col-md-8 col-sm-12 content px-2 border-0 py-0" >
                        <div class="border border-milky border-2 px-4 border-radius-5">
                            <h2 class="pt-5 pb-4" style="color: white;">Silver</h2>
                            <ul class="df">
                                <li>100 Free Listings Monthly</li>
                                <li>7% final value fee on the first 10 items sold.</li>
                                <li>Unlimited 8% final value fee on any additional item sold</li>
                            </ul>
                            <h5 class="text-white"><b>(Get one month free annually when you purchase a yearly subscription of :$219.89)</b></h5>
                            <h3 style="color: white;">Terms and Conditions</h3>
                            <p class="terms-text">* Any change/cancellation to the membership will take effect as of the following month
                                of subscription.<br>
                                * If you decide to cancel a monthly subscription after the start of the subscription month,
                                no refunds will be issued. Your membership will change to the free regular membership
                                as of the following subscription month.<br>
                                * Yearly subscriptions are NON-REFUNDABLE<br>
                                * If you choose to upgrade your yearly membership to a higher tier, the upgrade will be
                                effective as of the following month. The extra cost for the remaining months in
                                the subscription year will be charged to your original method of payment.<br>
                                * If you choose to downgrade your yearly membership to a lower tier, no refund will be
                                issued.
                            </p>

                            <!-- Subscribe Button -->
                        <div class="row" v-show="subscriped == false && load || open_paypal_for_annual== true">
                            <div class="col-6">
                                <div class="d-flex">
                                    <label for="f-option" class="l-radio">
                                    <input type="radio" value="219.89" id="f-option" name="selector" tabindex="1"  checked>
                                    <span>Annual</span>
                                    </label>
                                    <p class="text-white pt-2">$ {{ annual }}</p>

                                </div>
                                <div class="d-flex" :style="[open_paypal_for_annual ? {'display' : 'none !important'}: '']" >
                                    <label for="s-option" class="l-radio">
                                        <input type="radio" value="19.99" id="s-option" name="selector" tabindex="2" >
                                        <span>Monthly</span>
                                    </label>
                                    <p class="text-white pt-2">$ {{ monthly }} </p>
                                </div>

                            </div>
                            <div class="col-6 float-right" id="paypal-button-container"></div>
                        </div>
                        <div class="row pb-5 buttons" v-show="subscriped && load" >

                            <div class="row mb-3">
                                <div class="col-12">
                                <div class="col-6" :class="[change_to_annual ? 'active' : '']">
                                    <h5 class="text-white text-center" v-if="change_to_annual">Your Subscription Is</h5>
                                    <h5 class="text-white text-center" v-else>Monthly Subscription</h5>
                                    <h3 class="text-white mb-2">$ {{ monthly  }} <small class="_19-px">(Monthly)</small> </h3>
                                </div>
                                <div class="col-6"   :class="[!change_to_annual ? 'active' : '']">
                                    <h5 class="text-white text-center" v-if="!change_to_annual">Your Subscription Is</h5>
                                    <h5 class="text-white text-center" v-else>Annual Subscription</h5>
                                        <h3 class="text-white mb-2">$ {{ annual }} <small class="_19-px">(Annual)</small></h3>
                                        <button v-show="change_to_annual" class="btn btn-milky" @click="open_paypal_for_annual_function">Change To Annual</button>
                                </div>


                                </div>

                            </div>

                            <div class="col-12 pr-5" style="display: flex !important; justify-content: center;">
                                <router-link style="text-decoration: none;color: white;" to="/subscriptions" class="pink">
                                    <button> Upgrade </button>
                                </router-link>

                                <a href="#" class="blue">
                                    <button @click="cancel_subscription">Cancel</button>
                                </a>

                            </div>
                        </div>

                    </div>
                </div>


                </div>

            </div>
        </section>
<!-- Latest Blog Section End -->

    </div>
</template>
<style scoped>
    .active{
        background-color: #1c72a8 !important;
    }
    ._19-px{
        font-size: 19px !important;
    }
</style>
<script>
import SideBar from './SideBarComponent.vue'
export default ({
    data: () => ({
        subscriped: false,
        load: false,
        monthly: 19.99,
        annual : 219.89 ,
        change_to_annual: false,
        open_paypal_for_annual: false,
        openSlideBar: false
    }),
     components:{
        SideBar,
    },
    methods:{
        cancel_subscription: function(){
            axios.post('/api/cancelSubscription').then((response) => {
                if(response.data.status){
                    this.subscriped = false;
                }
            });
        },
        open_paypal_for_annual_function: function(){
            this.open_paypal_for_annual = true;
            this.subscriped = false;
        }
    },
    mounted() {
        axios.post('/api/getCurrentSubscription').then((response) => {
             if(response.data.subscription == 'SILVER'){
                 this.subscriped = true;
             }
             if(response.data.duration == 'monthly'){
                 this.change_to_annual = true;
             }
                 this.load = true;

        });
        Fire.$emit('mounted');
        function loadAsync(url, callback) {
            var s = document.createElement('script');
            s.setAttribute('src', url); s.onload = callback;
            document.head.insertBefore(s, document.head.firstElementChild);
        }

loadAsync('https://www.paypal.com/sdk/js?client-id=AUuivy3A41GeLf_nxhIVY4QyW9rPnUc3Ksx-ueYsZTjQvw0loyTa4VK7srlDkWce5fwgDM0Zq2pfcZBa&debug=false&components=buttons', function() {
  paypal.Buttons({

    // Set up the transaction
    createOrder: function(data, actions) {
      if(document.getElementById('f-option').checked){
          var amount = document.getElementById('f-option').value;
          var type   = 'annual';
      }else{
          var amount = document.getElementById('s-option').value;
          var type   = 'monthly';
      }
        return actions.order.create({
            purchase_units: [{
                amount: {
                    value: amount
                }
            }]
        });
    },

    // Finalize the transaction
    onApprove: function(data, actions) {
        var email = JSON.parse(localStorage.getItem('currentUser'))['email'];
      if(document.getElementById('f-option').checked){
          var type   = 'annual';
      }else{
          var type   = 'monthly';
      }
        return actions.order.capture().then(function(details) {
            // Show a success message to the buyer
            // alert('Transaction completed by ' + details.payer.name.given_name);
                let api = fetch('/api/paypal/purchase/subscription', {
                        method: 'post',
                        headers: {
                            'content-type': 'application/json'
                        },
                        body: JSON.stringify({
                            orderID: data.orderID,
                            details: details,
                            type: type,
                            subscription_name:'silver',
                            email: email,
                            quantity: 100,
                        })
                    });
                    api.then(response => {
                        if(response.status == 200){
                            window.location.href =  '/subscriptions';
                        }
            })
        });
    }

  }).render('#paypal-button-container');
});
    },
});

</script>
