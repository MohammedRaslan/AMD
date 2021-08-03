<template>
       <div class="inner-price-table">
                            <div class="card-cus">
                                <h2>Closes at {{ this.bid.to }} </h2>

                               <div class="content">
                                    <div>
                                        <h3>Current bid € {{ this.bid.last_price }}</h3>
                                        <!-- <p>8 Bids</p> -->
                                    </div>
                                    <div>
                                        <form action="">
                                            <input type="number" v-model="bidValue" name="" id="" :disabled="!openBidding">
                                            <button class="btn-dark" :disabled="!openBidding">BID</button>
                                        </form>
                                    </div>
                                  <div class="btns-det">
                                        <button class="btn btn-dark">$30</button>
                                    </div>
                               </div>
                            </div>
                        </div>
</template>

<script>
import moment from "moment";

export default {
    props : ['bid','bid_step_list'],
    data:()=>({
        bidValue: null,
        openBidding: false,

    }),
    mounted(){
        var from = moment(this.bid.from).format('l');
        var now  = moment().format('l');
        var to   = moment(this.bid.to).format('l');
        if(now > from){
            this.openBidding = true;
        }
        var i = 0;
        // for(i = 0; i < this.bid_step_list.length(); ++i){
        //     if(this.bid_step_list[i] == this.bid.step){
        //         if(this.bid_step_list.indexOf(i + 2)){
        //             console.log('OKKKK');
        //         }else{
        //             console.log('NOOOO');
        //         }
        //     }
        // }

        
    }
}
</script>
