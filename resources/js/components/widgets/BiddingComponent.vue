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
                                            <input type="text" name="" id="">
                                            <button class="btn-dark">BID</button>
                                        </form>
                                    </div>
                               </div>
                            </div>
                        </div>
</template>

<script>
export default {
    props : ['bid']
}
</script>
