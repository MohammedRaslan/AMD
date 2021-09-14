<template>
        <div class="col-xl-2 col-md-12">
            <div class="header-taps message heaer-tabs-yellow">
                <div class="nav flex-column nav-pills m-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <!--1 Offers/Bids -->
                    <router-link class="nav-link active-maroon pl-8 text-decoration-none text-white" id="v-pills-home-tab" to="/notifications">Notifications</router-link>
                    <hr>

                    <!--2 Request an Item -->
                   <router-link class="nav-link active-maroon pl-8 text-decoration-none text-white" id="v-pills-home-tab" to="/messages">Inbox</router-link>
                    <hr>

                    <!--3 My Favorites -->
                    <button class="nav-link active-maroon pl-8 text-decoration-none text-white" id="v-pills-home-tab" disabled>Archive</button>

                    <!--4 Wachlist -->

                </div>
            </div>
        </div>
</template>