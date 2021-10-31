<template>
       <div class="inner-price-table">
            <div class="card-cus">
                <h2 v-if="openBidding">Time left {{ this.bid.to.actual }} </h2>
                <h2 v-else>Opens at {{ this.bid.from.human }}</h2>
                <div class="content pt-0">
                    <div class="mb-3">
                        <h3 v-if="!isHighst" class="text-white mb-3">You,ve been outbid </h3>
                        <h3 v-else class="text-white mb-3">You Are The Highest Bidder </h3>
                        <!-- <h3 class="text-maron mb-1">Current bid is {{ Number((this.minimum_price).toFixed(10)) }} <span v-html="currencyIcon"></span> </h3><br> -->
                        <!-- <small class="mb-0 text-white" v-if="isHighst">You Are The Highest Bidder</small>
                        <small class="mb-0 text-white" v-else>You Have Been Outbid</small><br> -->
                        <div class="row">
                            <div class="col-6 col-lg-5">
                                <p class="fs-17 text-light-gray">Current bid</p>
                            </div>
                            <div class="col-6">
                                <p><span v-html="currencyIcon"></span> {{ Number((this.minimum_price).toFixed(10)) }} </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-lg-5">
                                <p class="fs-17 text-light-gray">Your max bid</p>
                            </div>
                            <div class="col-6">
                                <p><span v-html="currencyIcon"></span> {{this.maxBidForUser}}</p>
                            </div>
                        </div>
                        <!-- <small class="text-white">Minimum Bid is {{ Number((this.minimum_price).toFixed(10)) }} {{ this.user_details.currency }}</small> -->
                        <!-- <p>8 Bids</p> -->
                    </div>

                        <div v-if="!author && openBidding  && !bid_end">
                        <form class="pb-3" @submit.prevent="makeBid()">
                            <input type="number" step='0.01' v-model="form.bidValue" name="" id="" :disabled="!openBidding">
                            <button class="btn-dark" :disabled="!openBidding ">BID</button>
                        </form>
                    </div>
                </div>

            </div>
    </div>
</template>
<style scoped>
    .form-style{
        display: flex;
        justify-content: space-between;
    }
    .swal2-select{
        display: none !important;
    }
</style>
<script>
import moment from "moment";

export default {
    props : ['bid','steps','user_details','author', 'currency'],
    data:()=>({
        form : new form({
            bidValue: null,
            bid_id: null,
        }),
        bidValue: null,
        openBidding: false,
        before_last_bid: null,
        minimum_price: null,
        bid_end: false,
        isHighst : false,
        currencyIcon: null,
        maxBidForUser : null,
    }),
    methods:{
        async makeBid(step = null){
                if(step != null){
                    let value = document.getElementById('form_'+step).value;
                    this.form.bidValue = parseInt(this.minimum_price) + parseInt(value);
                }
            if(this.form.bidValue < this.minimum_price){
                Swal.fire('Your Bid is Too Low');
            }else{
                this.form.bid_id = this.bid.id;

                const response = await this.form.post('/api/bid/store').then((response) => {
                       Toast.fire({
                        icon: 'success',
                        title: 'Your Bid Sent Successfully'
                    });
            });
            }

        },
    showUserHistory(id){
        axios.get('/api/bid/getHistory/'+id).then((response) => {
            console.log(response);
            if(response.data.isHighst != false){
                this.isHighst = true;
                this.maxBidForUser = response.data.maxForUser;
            }else{
                this.isHighst = false;
                this.maxBidForUser = response.data.maxForUser;

            }
        });
    },
    },
    created(){
        if(this.bid.last_price == 0){
            this.minimum_price = this.bid.minimum_price;
        }else{
            this.minimum_price = this.bid.last_price;
        }
    },


    mounted(){
        this.before_last_bid =  this.bid.before_last_price;
        this.showUserHistory(this.bid.id);
        window.Echo.channel('BiddingChannel').listen('BiddingEvent', event => {

                if(event.data.bid.id == this.bid.id){
                    this.before_last_bid = event.data.bid.before_last_price;
                    if(event.data.bid.last_price == 0){
                        this.minimum_price   = event.data.bid.minimum_price;
                    }else{
                         this.minimum_price = event.data.bid.last_price
                    }

                }
                this.showUserHistory(this.bid.id);
                console.log(event.data.history);
        });
        var from = moment(this.bid.from.actual).format('l');
        var now  = moment().format('l');
        var to   = moment(this.bid.to.actual).format('l');
        console.log("test..." , from , now , to);
        console.log("test..." , now > to);
        if(now > from){
            this.openBidding = true;
        }

        if(now > to){
            this.bid_end = true;
        }

        this.currencyIcon = this.currency;


    }
}
</script>
