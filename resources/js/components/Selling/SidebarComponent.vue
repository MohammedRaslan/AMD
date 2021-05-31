<template>
        <div class="col-xl-2 col-md-6">
                    <div class="header-taps">
                        <div class="nav flex-column nav-pills m-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <!-- Overview -->
                            <router-link to="/selling/overview" class="nav-link active" id="v-pills-home-tab" >Overview</router-link>
                            <hr>
                            <!-- Sell an Item -->
                            <router-link to="/selling/sell_item" id="v-pills-profile-tab" class="nav-link" >
                              Sell An Item
                            </router-link>
                            <hr>
                            <!-- My Items -->
                            <button class="nav-link disabled" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">My Items</button>
                            <!-- Active -->
                            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Active</button>
                            <!-- Sold -->
                            <button class="nav-link" id="v-pills-home-tab2" data-bs-toggle="pill" data-bs-target="#v-pills-home2" type="button" role="tab" aria-controls="v-pills-home2" aria-selected="false">Sold</button>
                            <!-- Unsold -->
                            <button class="nav-link" id="v-pills-profile-tab3" data-bs-toggle="pill" data-bs-target="#v-pills-home3" type="button" role="tab" aria-controls="v-pills-home3" aria-selected="false">Unsold</button>
                            <!-- Draft -->
                            <button class="nav-link" id="v-pills-messages-tab4" data-bs-toggle="pill" data-bs-target="#v-pills-home4" type="button" role="tab" aria-controls="v-pills-home4" aria-selected="false">Draft</button>
                            <hr>
                            <!-- Seller Details -->
                            <button class="nav-link" id="v-pills-settings-tab5" data-bs-toggle="pill" data-bs-target="#v-pills-home5" type="button" role="tab" aria-controls="v-pills-home5" aria-selected="false">Seller Details</button>
                        </div>
                    </div>
                </div>
</template>
