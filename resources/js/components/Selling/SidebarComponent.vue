<template>
    <div class="col-xl-2 col-md-6">
        <div class="header-taps">
            <div class="nav flex-column nav-pills m-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <!-- Overview -->
                <!-- <router-link to="/selling/overview" class="nav-link"  id="v-pills-home-tab">Overview</router-link>
                <hr> -->
                <!-- Sell an Item -->
                <router-link to="/selling/sell_item" id="v-pills-profile-tab" class="nav-link">
                    Sell An Item 
                </router-link>
                <hr>
                <!-- My Items -->
                <button class="nav-link disabled" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">My Items</button>
                <!-- Active -->
                <router-link to="/selling/active_product" class="nav-link insided" id="v-pills-settings-tab">Active</router-link>
                <!-- Sold -->
                <button class="nav-link insided" id="v-pills-home-tab2" data-bs-toggle="pill" data-bs-target="#v-pills-home2" type="button" role="tab" aria-controls="v-pills-home2" aria-selected="false">Sold</button>
                <!-- Unsold -->
                <button class="nav-link insided" id="v-pills-profile-tab3" data-bs-toggle="pill" data-bs-target="#v-pills-home3" type="button" role="tab" aria-controls="v-pills-home3" aria-selected="false">Unsold</button>
                <!-- Draft -->
                <router-link to="/selling/drafted" class="nav-link insided" id="v-pills-messages-tab4">Draft</router-link>
                <hr>
                <!-- Seller Details -->
                <router-link to="/selling/seller_details" class="nav-link outside" >Seller Details</router-link>
            </div>
        </div>
    </div>
</template>
<style scoped>
    .insided{
        padding-left: 30px !important;
        margin: auto;
    }
    .outside{
            display: flex !important;
    flex-wrap: wrap !important;
        padding-left: 0px !important;
    }
</style>

