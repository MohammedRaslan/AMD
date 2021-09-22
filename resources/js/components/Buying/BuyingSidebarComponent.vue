<template>
    <div class="col-xl-2 col-md-12">
            <div :class="{ 'd-block': openSlideBar }" class="header-taps mb-lg-4 header-taps-buying slide-bar-taps">
                <div class="nav flex-column nav-pills m-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <!--1 Offers/Bids -->
                    <router-link class="nav-link" to="/buying/purchased">Purchase History</router-link>
                    <hr>
                    <router-link class="nav-link" to="/buying/offers">Offers/Bids</router-link>

                    <!--2 Request an Item -->
                    <!-- <router-link class="nav-link" to="/buying/requestItem">Request an Item</router-link>
                    <hr> -->

                    <!--3 My Favorites -->
                    <!-- <button class="nav-link disabled" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">My Favorites</button> -->

                    <!--4 Wachlist -->
                    <!-- <router-link class="nav-link nav-link-sub" id="v-pills-settings-tab" to="/buying/wishlist">Wishlist</router-link> -->

                    <!--5 Saved Items -->
                    <!-- <router-link class="nav-link nav-link-sub" id="v-pills-home-tab2" to="/buying/saved" >Saved Items</router-link> -->

                    <!--6 Saved sellers -->
                    <!-- <button class="nav-link nav-link-sub" id="v-pills-profile-tab3" data-bs-toggle="pill" data-bs-target="#v-pills-home3" type="button" role="tab" aria-controls="v-pills-home3" aria-selected="false" disabled>Saved sellers</button> -->
                    <!-- <hr> -->

                    <!--8 Purchase History -->
                </div>
            </div>
        </div>
</template>

<script>
export default ({
    props : ['openSlideBar'],
})
</script>
