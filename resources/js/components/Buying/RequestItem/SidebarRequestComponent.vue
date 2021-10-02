<template>
    <div class="col-xl-2 col-md-12">
            <div :class="{ 'd-block': openSlideBar }" class="header-taps mb-lg-4 header-taps-buying slide-bar-taps">
                <div class="nav flex-column nav-pills m-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <router-link class="nav-link" to="/buying/requestItem">Request Item</router-link>
                    <hr>

                    <router-link class="nav-link" to="/buying/myrequests">My Requests</router-link>

                </div>
            </div>
        </div>
</template>

<script>
export default ({
    props : ['openSlideBar'],
})
</script>
