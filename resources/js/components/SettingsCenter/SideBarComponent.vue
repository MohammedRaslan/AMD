<template>
    <div class="col-xl-2 col-md-12 mb-lg-3">
        <div :class="{ 'd-block': openSlideBar }" class="header-taps header-taps-setting">
            <div class="nav flex-column nav-pills m-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <!--1 Offers/Bids -->
                <router-link class="nav-link text-decoration-none text-white" id="v-pills-home1-tab" to="/settings">Personal Info</router-link>
                <hr>

                <!--2 Request an Item -->
                <router-link class="nav-link text-decoration-none text-white" id="v-pills-home2-tab" to="/settings/shipping_info">Address Info</router-link>
                <hr>

                <!--3 My Favorites -->
                <router-link class="nav-link text-decoration-none text-white" id="v-pills-home3-tab" to="/settings/preferences">Preferences</router-link>
            </div>
        </div>
    </div>
</template>

<script>
export default ({
    props : ['openSlideBar'],
})
</script>
