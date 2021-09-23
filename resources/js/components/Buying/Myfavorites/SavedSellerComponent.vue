<template>
    <div>
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="6" viewBox="0 0 4 6">
                                <g id="Icon_20_Grey_Dropdown" data-name="Icon / 20 / Grey / Dropdown" transform="translate(-8 13) rotate(-90)">
                                    <path id="Triangle" d="M3,4,6,0H0Z" transform="translate(7 8)" fill="#ffe0e0"/>
                                </g>
                            </svg>
                            <span>Saved</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->


    <!-- Latest Blog Section Begin -->
    <section class="selling buying">
        <div class="over-lay-selling d-none" @click="openSlideBar = !openSlideBar" :aria-pressed="openSlideBar ? 'true' : 'false'" :class="{ 'd-block1': openSlideBar }"></div>
        <div class="container">
            <div class="row">
                <div class="top-tabs p-0 mb-4">
                    <h1 class='py-3 py-lg-5 text-green'>Favorites <span @click="openSlideBar = !openSlideBar" :aria-pressed="openSlideBar ? 'true' : 'false'" class="open-tabs"><i class="fa fa-bars"></i></span> </h1>
                </div>
            <!-- Compnent Here -->
                <side-bar :openSlideBar='openSlideBar'></side-bar>
            <!-- End Component  -->
                <div class="col-xl-10 col-md-12">
                    <!-- <h3 class="text-center text-green my-5">There are no saved Sellers</h3> -->
                    <div class="inner-saved-seller mb-5">
                        <div class="row">
                            <!-- Block Item -->  
                            <div class="col-6 col-lg-3 mb-3" v-for="wishlist in wishlists" :key="wishlist.id" :id="'wishlist_'+wishlist.id">
                                <div class="card-box text-center p-3">
                                    <router-link :to="'/vendorCategory/' + wishlist.id" class="d-block text-decoration-none">
                                        <figure>
                                            <img class="rounded-circle" :src="'/' +wishlist.image" alt="">
                                        </figure>
                                        <h5 class="text-offwhite">{{wishlist.user_name}}</h5>
                                    </router-link>
                                </div>
                            </div>

           

                        </div>
                    </div>


                </div>
            </div>




        </div>
    </section>
    <!-- Latest Blog Section End -->
    </div>
</template>
<style  scoped>
    .black{
        background-color: black !important;
        color: white !important;
    }
</style>
<script>
import SideBar from "./BuyingSidebarComponent";
export default ({
    data :()=>({
        openSlideBar: false,
        wishlists : {}
    }),
    components:{
        SideBar,
    },
    methods:{
      getProducts(){
            axios.get('/api/wishlist/getVendorWishlist').then((response) => {
            this.wishlists = response.data;
            console.log(this.wishlists);
            console.log(response.data);
            if(response.data.length == 0 ){
                this.message = 'You dont have products';
                }
        });
      }
    },
    beforeCreate() {
        this.$Progress.start();
    },
    mounted(){
        // console.log(window.location.origin, this.$route);
        // Fire.$emit('mounted');
        this.$Progress.finish();
        this.getProducts();
        // Fire.$emit('mounted');
    }
})
</script>
