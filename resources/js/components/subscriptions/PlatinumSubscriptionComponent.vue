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
                        <h1 style="color: white;">Platinum</h1>
                        <ul class="df">
                            <li>500 Free Listings Monthly</li>
                            <li>0% final value fee on the first 3 items sold per month</li>
                            <li>5% final value fee on the next 27 items sold</li>
                            <li>Unlimited 7% final value fee on every additioonal item sold</li>
                        </ul>
                        <h5 class="text-white"><b>(Get one month free annually when you purchase a yearly subscription of: $1,099.89)</b></h5>
                        <h3 style="color: white;">Terms and Conditions</h3>
                        <p class="terms-text">
                            * Any change/cancellation to the membership will take effect as of the following month
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
                                    <input type="radio"  value="1,099.89" id="f-option" name="selector" tabindex="1"  checked>
                                    <span>Annual</span>
                                    </label>
                                    <p class="text-white pt-2">$ 1,099.89</p>

                                </div>
                                <div class="d-flex" :style="[open_paypal_for_annual ? {'display' : 'none !important'}: '']">
                                    <label for="s-option" class="l-radio">
                                        <input type="radio" value="99.99" id="s-option" name="selector" tabindex="2" >
                                        <span>Monthly</span>
                                    </label>
                                    <p class="text-white pt-2">$ 99.99</p>
                                </div>

                            </div>
                            <div class="col-6 float-right" id="paypal-button-container"></div>
                        </div>
                        <div class="row pb-4 pt-3 buttons" v-show="subscriped && load" >
                                <div class="col-12 col-lg-6">
                                    <div class="card-subscrib" :class="[change_to_annual ? 'active' : '']">
                                        <h5 class="text-white text-center" v-if="change_to_annual">Your Subscription Is</h5>
                                        <h5 class="text-white text-center" v-else>Monthly Subscription</h5>
                                        <h3 class="text-white mb-2">$ {{ monthly  }} <small class="_19-px">(Monthly)</small> </h3>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="card-subscrib" :class="[!change_to_annual ? 'active' : '']">
                                        <h5 class="text-white text-center" v-if="!change_to_annual">Your Subscription Is</h5>
                                        <h5 class="text-white text-center" v-else>Annual Subscription</h5>
                                        <h3 class="text-white mb-2">$ {{ annual }} <small class="_19-px">(Annual)</small></h3>
                                        <button v-show="change_to_annual" class="btn btn-milky" @click="open_paypal_for_annual_function">Change To Annual</button>
                                    </div>
                                </div>
                                <div class="col-12 mt-4 d-flex justify-content-center">
                                    <a href="#" class="pink">
                                        <button class="py-2">
                                            <router-link to="/subscriptions" class="text-decoration-none text-white p-0 w-120">Upgrade</router-link>
                                        </button>
                                    </a>

                                    <a href="#" class="blue text-decoration-none">
                                        <button class="text-decoration-none text-white py-2 w-120" @click="cancel_subscription">Cancel</button>
                                    </a>

                                </div>
                        </div>
                    </div>

                    <div class="d-sm-nonecol-lg-4 col-md-4 d-sm-12 d-md-block" style="display: flex !important; justify-content: flex-end;">

                        <!-- <img :src="'/FrontEnd/images/sub-02.png'" alt=""> -->

                    <svg class="img-subscription" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 132.738 269.09">
                        <g id="Group_66" data-name="Group 66" transform="translate(-2461.7 -377.809)">
                            <g id="Group_65" data-name="Group 65" transform="translate(2512.579 402.608)">
                            <rect id="Rectangle_8" data-name="Rectangle 8" width="3.012" height="18.8" transform="translate(31.259 21.287)" fill="#ffe0e0"/>
                            <path id="Path_90" data-name="Path 90" d="M2551.211,417.731l2.7,1.349-5.1,8.891h5.6v9.509a7.805,7.805,0,0,0,7.574,7.777l1.463.039v13.371h-3.01V448.13a10.826,10.826,0,0,1-9.039-10.65v-6.5h-7.791Z" transform="translate(-2543.607 -417.731)" fill="#ffe0e0" fill-rule="evenodd"/>
                            </g>
                            <path id="Path_91" data-name="Path 91" d="M2499.6,449.445h4.473a13.852,13.852,0,0,1,13.821,13.82v59.567a3.649,3.649,0,1,0,7.3,0V489.906a9.068,9.068,0,0,1,18.136,0v56.852h-3.012V489.906a6.056,6.056,0,1,0-12.112,0v32.926a6.661,6.661,0,1,1-13.323,0V463.265a10.838,10.838,0,0,0-10.81-10.806H2499.6v-3.014Z" transform="translate(-14.359 -27.137)" fill="#ff3392" fill-rule="evenodd"/>
                            <path id="Path_92" data-name="Path 92" d="M2529.96,719.095l-3.467-.9L2550.5,626h35.067v92.738h-3.582v-88.39h-28.916Z" transform="translate(-24.545 -94.02)" fill="#7ac943" fill-rule="evenodd"/>
                            <path id="Path_93" data-name="Path 93" d="M2573.807,785.153c.845,0,1.742.011,2.7.023,1.1.013,2.354.029,3.686.029h12.889V796.07h-33.019a8.98,8.98,0,0,1,2.579-6.86c3.53-3.707,5.864-4.057,11.162-4.057m0-3.727c-6.012,0-9.42.549-13.861,5.214a12.738,12.738,0,0,0-2.889,13.157h39.755V781.478H2580.2c-2.447,0-4.54-.052-6.389-.052Z" transform="translate(-35.845 -152.898)" fill="#bf00ff"/>
                            <path id="Path_94" data-name="Path 94" d="M2481.663,774.716c.817.214,1.683.452,2.609.706,1.064.292,2.27.624,3.559.96l12.47,3.262-2.75,10.512-31.944-8.355a8.983,8.983,0,0,1,4.231-5.984c4.353-2.693,6.7-2.441,11.825-1.1m.943-3.606c-5.815-1.521-9.251-1.852-14.729,1.537a12.74,12.74,0,0,0-6.125,12l38.461,10.06,4.636-17.723-16.075-4.2c-2.367-.619-4.38-1.2-6.168-1.667Z" transform="translate(0 -148.573)" fill="#bf00ff"/>
                            <path id="Path_95" data-name="Path 95" d="M2598.408,568.875h-35.819v-3.106h32.51l-4.678-73.683a1.584,1.584,0,0,0-1.577-1.48h-29.2V487.5h29.2a4.7,4.7,0,0,1,4.676,4.389Z" transform="translate(-37.103 -41.553)" fill="#0cf"/>
                            <path id="Path_96" data-name="Path 96" d="M2614.3,559a35.512,35.512,0,0,1-7.1-.716l.622-3.043a32.149,32.149,0,1,0,6.48-63.639V488.5a35.252,35.252,0,1,1,0,70.5Z" transform="translate(-55.12 -41.932)" fill="#f1b320"/>
                            <path id="Path_97" data-name="Path 97" d="M2580.649,422.963a10.207,10.207,0,0,1-10.2-10.2v-3.324a7.1,7.1,0,0,0-7.089-7.089h-4.819c-9.036,0-16.286-8.293-16.506-18.881l-.018-.876.74-.468a27.915,27.915,0,0,1,14.953-4.32h5.319a28.01,28.01,0,0,1,27.978,27.979l-.166,7.017A10.2,10.2,0,0,1,2580.649,422.963Zm-35.467-38.672c.552,8.325,6.4,14.957,13.363,14.957h4.819a10.207,10.207,0,0,1,10.2,10.2v3.324a7.09,7.09,0,0,0,14.179,0l.166-7.017a24.893,24.893,0,0,0-24.873-24.835h-5.319A24.83,24.83,0,0,0,2545.181,384.291Z" transform="translate(-30.427 0)" fill="#f58220"/>
                        </g>
                    </svg>

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
export default ({
    data: () => ({
        subscriped: false,
        load: false,
        monthly: 99.99,
        annual : 1099.89,
        change_to_annual: false,
        open_paypal_for_annual: false,
    }),
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
             if(response.data.subscription == 'PLATINUM'){
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
      }else{
          var amount = document.getElementById('s-option').value;
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
                            subscription_name:'platinum',
                            email: email,
                            quantity: 500,
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
