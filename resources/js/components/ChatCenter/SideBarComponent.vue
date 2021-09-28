<template>
    <div class="col-xl-2 col-md-12">
        <div :class="{ 'd-block': openSlideBar }" class="header-taps message heaer-tabs-yellow mb-lg-4">
            <div class="nav flex-column nav-pills m-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <router-link class="nav-link active-maroon pl-8 text-decoration-none text-white" id="v-pills-home-tab" to="/notifications">Notifications</router-link>
                <hr>

                <router-link class="nav-link active-maroon pl-8 text-decoration-none text-white" id="v-pills-home-tab" to="/messages">Inbox</router-link>
                <hr>

                <router-link class="nav-link active-maroon pl-8 text-decoration-none text-white" id="v-pills-home-tab" disabled to="/archive">Archive</router-link>

            </div>
        </div>
    </div>
</template>

<script>
export default ({
    props : ['openSlideBar'],
})
</script>
