<template>
       <div class="inner-price-table">
                            <div class="card-cus">
                                <h2 v-if="openBidding">Closes at {{ this.bid.to.human }} </h2>
                                <h2 v-else>Opens at {{ this.bid.from.human }}</h2>
                               <div class="content">
                                    <div class="mb-3">
                                        <h3 class="mb-0" v-if="isHighst">You Are The Highest Bidder</h3>
                                         <h3 class="mb-0" v-else>You Have Been Outbid</h3><br>
                                        <h3 class="mb-0">Current bid {{ this.bid.last_price }} {{ this.user_details.currency }} </h3><br>
                                        <small style="color:white">Minimum Bid is {{ Number((this.minimum_price).toFixed(10)) }} {{ this.user_details.currency }}</small>
                                        <!-- <p>8 Bids</p> -->
                                    </div>
                                    
                                     <div v-if="!author && openBidding">
                                        <form @submit.prevent="makeBid()">
                                            <input type="number" v-model="form.bidValue" name="" id="" :disabled="!openBidding">
                                            <button class="btn-dark" :disabled="!openBidding">BID</button>
                                        </form>
                                    </div>
                                  <div class="btns-det form-style" v-if="!author && openBidding">
                                     <form  v-for="(step, key) in this.steps" :key="key" @submit.prevent="makeBid(key)" >
                                        <input type="hidden" :value="step" :id="'form_'+key"> 
                                        <button class="btn btn-dark" :disabled="!openBidding" >${{ step }}</button>
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
    props : ['bid','steps','user_details','author'],
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
            if(response.data == true){
                this.isHighst = true;
            }else{
                this.isHighst = false;
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
        if(now > from){
            this.openBidding = true;
        }

        if(now > to){
            this.bid_end = true;
        }

    }
}
</script>
