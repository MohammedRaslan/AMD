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
        <section class="subscribe-here" style="background-color: #1B252C;">
            <div class="container">
            
                <div class="row pt-5 pb-5">
                
                    <div class="col-lg-8 col-md-8 col-sm-12 content" style="padding-left: 40px;">
                        <h1 style="color: white;">Silver Membership</h1>
                        <ul class="df">
                            <li>100 Free Listings Monthly</li>
                            <li>7% final value fee on the first 10 items sold.</li>
                            <li>Unlimited 8% final value fee on the 11th item sold</li>
                        </ul> 
                        <h3 style="color: white;">Terms and Conditions</h3>
                        <p class="terms-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor,
                            placeat ipsa quas quod deleniti soluta quis?
                            Nemo quod assumenda aut aliquam dicta dolores totam recusandae in, quae cupiditate cum culpa!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio a eius, corporis distinctio debitis pariatur earum 
                            aut iusto maxime possimus nesciunt eaque ad voluptatibus! Dolore labore assumenda temporibus aut tenetur.
                        </p>
                    
                        <!-- Subscribe Button -->
                    <div class="row">
                        <div class="col-6">
                            <div class="d-flex">
                                <label for="f-option" class="l-radio">
                                <input type="radio" id="f-option" name="selector" tabindex="1"  checked>
                                <span>Annual</span>
                                </label>
                                <p class="text-white pt-2">20 $</p>

                            </div>
                            <div class="d-flex">
                                <label for="s-option" class="l-radio">
                                    <input type="radio" id="s-option" name="selector" tabindex="2" >
                                    <span>Monthly</span>
                                </label>
                                 <p class="text-white pt-2">20 $</p>
                            </div>
                            
                        </div>
                        <div class="col-6 float-right" id="paypal-button-container"></div>
                    </div>
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

<script>

export default ({
    mounted() {
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
        return actions.order.create({
            purchase_units: [{
                amount: {
                    value: '20.0'
                }
            }]
        });
    },

    // Finalize the transaction
    onApprove: function(data, actions) {
        return actions.order.capture().then(function(details) {
            // Show a success message to the buyer
            alert('Transaction completed by ' + details.payer.name.given_name);
                return fetch('/api/paypal/purchase/subscription', {
                        method: 'post',
                        headers: {
                            'content-type': 'application/json'
                        },
                        body: JSON.stringify({
                            orderID: data.orderID
                        })
                    })
        });
    }

  }).render('#paypal-button-container');
});
    },
});

</script>
