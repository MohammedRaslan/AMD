<template>
    <div class="col-xl-2 col-md-6">
        <div :class="{ 'd-block': openSlideBar }" class="slide-bar-taps slide-bar-taps-maroon header-taps header-taps-selling mb-lg-4" >
            <div class="nav flex-column nav-pills m-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <!-- Overview -->
                <!-- <router-link to="/selling/overview" class="nav-link"  id="v-pills-home-tab">Overview</router-link>
                <hr> -->
                <!-- Sell an Item -->
                <router-link to="/selling/sell_item" class="nav-link">
                    Sell an Item
                </router-link>
                <hr>
                <!-- My Items -->
                <!-- <button class="nav-link disabled mb-0" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">My Items</button> -->
                <!-- Active -->
                <router-link to="/selling/active_product" class="nav-link" id="v-pills-settings-tab">Active Items</router-link>
                <!-- Sold -->
                <router-link class="nav-link" to="/selling/sold">Sold Items</router-link>
                <!-- Unsold -->
                <router-link class="nav-link" to='/selling/unsold'>Unsold Items</router-link>
                <!-- Draft -->
                <router-link to="/selling/drafted" class="nav-link">Draft Items</router-link>
                <hr>
                <!-- Seller Details -->
                <router-link to="/selling/seller_details" class="nav-link outside" >Seller Details</router-link>
            </div>
        </div>
    </div>
</template>

<script>
export default ({
    props : ['openSlideBar'],
})
</script>

