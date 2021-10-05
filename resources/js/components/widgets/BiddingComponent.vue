<template>
       <div class="inner-price-table">
            <div class="card-cus">
                <!-- <h2 v-if="openBidding">Closes in {{ this.bid.to.actual }} </h2> -->
                <h2 v-if="openBidding">Closes in <span class="count-down-bid" v-for="times in times" :key="times.id"> {{ times.time }} &nbsp; </span></h2>
                <h2 v-else>Opens at {{ this.bid.from.human }}</h2>
                <div class="content">
                    <div class="mb-3">
                    <h3 class="text-maron mb-1">Current bid is {{ Number((this.minimum_price).toFixed(10)) }} <span v-html="currencyIcon"></span> </h3><br>
                    <small class="mb-0 text-white" v-if="isHighst">You Are The Highest Bidder</small>
                    <small class="mb-0 text-white" v-else>You Have Been Outbid</small><br>
                    <!-- <small class="text-white">Minimum Bid is {{ Number((this.minimum_price).toFixed(10)) }} {{ this.user_details.currency }}</small> -->
                        <!-- <p>8 Bids</p> -->
                    </div>

                        <div v-if="!author && openBidding">
                        <form class="pb-3" @submit.prevent="makeBid()">
                            <input type="number" v-model="form.bidValue" name="" id="" :disabled="!openBidding">
                            <button class="btn-dark" :disabled="!openBidding">BID</button>
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
        //
        startTime: "July 17, 2021 12:03:00",
        endTime: 'Oct 29, 2021 14:55:00',
        times: [
        { id: 0, text: "D", time: 1 },
        { id: 1, text: "H", time: 1 },
        { id: 2, text: "M", time: 1 },
        { id: 3, text: "S", time: 1 }
        ],
        progress: 100,
        // isActive: false,
        timeinterval: undefined
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
        updateTimer: function() {
        if (
            this.times[3].time > 0 ||
            this.times[2].time > 0 ||
            this.times[1].time > 0 ||
            this.times[0].time > 0
        ) {
            this.getTimeRemaining();
            this.updateProgressBar();
        } else {
            clearTimeout(this.timeinterval);
            // this.times[3].time = this.times[2].time = this.times[1].time = this.times[0].time = 0;
            this.progress = 0;
        }
        },
        getTimeRemaining: function() {
        let t = Date.parse(new Date(this.endTime)) - Date.parse(new Date());
        if(t >= 0){
        this.times[3].time = Math.floor(t / 1000 % 60); //seconds
        this.times[2].time = Math.floor(t / 1000 / 60 % 60); //minutes
        this.times[1].time = Math.floor(t / (1000 * 60 * 60) % 24); //hours
        this.times[0].time = Math.floor(t / (1000 * 60 * 60 * 24)); //days
        }else {
            this.times[3].time = this.times[2].time = this.times[1].time = this.times[0].time = 0;
            this.progress = 0;
        }
        },
        updateProgressBar: function() {
        let startTime = Date.parse(new Date(this.startTime));
        let currentTime = Date.parse(new Date());
        let endTime = Date.parse(new Date(this.endTime));
        let interval = parseFloat(
            (currentTime - startTime) / (endTime - startTime) * 100
        ).toFixed(2);
        this.progress = 100-interval;
        }
    },
    created(){
        if(this.bid.last_price == 0){
            this.minimum_price = this.bid.minimum_price;
        }else{
            this.minimum_price = this.bid.last_price;
        }
        this.updateTimer();
        this.timeinterval = setInterval(this.updateTimer, 1000);
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

        this.currencyIcon = this.currency;

        // l

    }
}
</script>
