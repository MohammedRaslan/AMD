<template>
    <div class="col-xl-2 col-md-12">
            <div :class="{ 'd-block': openSlideBar }" class="header-taps mb-lg-4 header-taps-buying slide-bar-taps">
                <div class="nav flex-column nav-pills m-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <!--1 Offers/Bids -->
                    <router-link class="nav-link" to="/buying/wishlist">Watchlist</router-link>
                    <hr>

                    <!--2 Request an Item -->
                    <router-link class="nav-link" to="/buying/saved">Saved Items</router-link>
                    <hr>

                    <router-link class="nav-link" to="/buying/saved-seller">Saved sellers</router-link>
                </div>
            </div>
        </div>
</template>

<script>
export default ({
    props : ['openSlideBar'],
})
</script>
