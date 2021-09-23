<template>
    <div class="col-xl-2 col-md-12 mb-lg-3">
        <div class="header-taps slide-bar-taps slide-bar-taps-milky header-taps-setting mb-lg-4">
            <div class="nav flex-column nav-pills m-2">
                <!--1 Offers/Bids -->
                <router-link class="nav-link text-decoration-none text-white" id="v-pills-home-tab" to="/settings">Personal Info</router-link>
                <hr>

                <!--2 Request an Item -->
                <router-link class="nav-link text-decoration-none text-white" id="v-pills-home-tab" to="/settings/shipping_info">Address Info</router-link>
                <hr>

                <!--3 My Favorites -->
                <router-link class="nav-link text-decoration-none text-white" id="v-pills-home-tab" to="/settings/preferences">Preferences</router-link>
            </div>
        </div>
    </div>
</template>
