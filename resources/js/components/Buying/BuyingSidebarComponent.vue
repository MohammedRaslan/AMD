<template>
    <div class="col-xl-2 col-md-12">
            <div class="header-taps mb-lg-4"> 
                <div class="nav flex-column nav-pills m-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <!--1 Offers/Bids -->
                    <router-link class="nav-link active" id="v-pills-home-tab" to="/buying/offers">Offers/Bids</router-link>
                    <hr>

                    <!--2 Request an Item -->
                    <router-link class="nav-link" id="v-pills-settings-tab" to="/buying/requestItem">Request an Item</router-link>
                    <hr>
                    
                    <!--3 My Favorites -->
                    <button class="nav-link disabled" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">My Favorites</button>
                    
                    <!--4 Wachlist -->
                    <router-link class="nav-link" id="v-pills-settings-tab" to="/buying/wishlist">Wishlist</router-link>
                    
                    <!--5 Saved Items -->
                    <button class="nav-link" id="v-pills-home-tab2" data-bs-toggle="pill" data-bs-target="#v-pills-home2" type="button" role="tab" aria-controls="v-pills-home2" aria-selected="false" disabled>Saved Items</button>
                    
                    <!--6 Saved sellers -->
                    <button class="nav-link" id="v-pills-profile-tab3" data-bs-toggle="pill" data-bs-target="#v-pills-home3" type="button" role="tab" aria-controls="v-pills-home3" aria-selected="false" disabled>Saved sellers</button>
                    
                    <!--7 Draft -->
                    <button class="nav-link d-none" id="v-pills-messages-tab4" data-bs-toggle="pill" data-bs-target="#v-pills-home4" type="button" role="tab" aria-controls="v-pills-home4" aria-selected="false" disabled>Unsold</button>
                    <hr>
                    
                    <!--8 Purchase History -->
                    <button class="nav-link" id="v-pills-settings-tab5" data-bs-toggle="pill" data-bs-target="#v-pills-home5" type="button" role="tab" aria-controls="v-pills-home5" aria-selected="false" disabled>Purchase History</button>
                </div>
            </div>
        </div>
</template>