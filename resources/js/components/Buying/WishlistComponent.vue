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
                            <span>Buying</span>
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
                    <h1 class='py-3 py-lg-5 text-green'>Buying <span @click="openSlideBar = !openSlideBar" :aria-pressed="openSlideBar ? 'true' : 'false'" class="open-tabs"><i class="fa fa-bars"></i></span> </h1>
                </div>
            <!-- Compnent Here -->
            <side-bar :openSlideBar='openSlideBar'></side-bar>
            <!-- End Component  -->
                <div class="col-xl-10 col-md-12">
                    <h3 v-if="message != '' " class="text-center text-green my-5">{{message}}</h3>
                    <div class="tab-content"  v-for="wishlist in wishlists" :key="wishlist.id" :id="'wishlist_'+wishlist.id">
                        <div class="inner-content">
                            <!-- Tab1 Overview -->
                             <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <!-- Block Item -->
                                <div class="inner-item">
                                    <div class="row">
                                        <div class="col-lg-7 detalis">
                                            <div class="row">
                                                <div class="col-sm-1 dot" id="dot"><div class="inner"></div></div>

                                                <div class="col-lg-4 col-md-3 col-sm-4 col-6">
                                                    <figure>
                                                        <img :src='str_replace(wishlist.product.image)' alt="">
                                                    </figure>
                                                </div>

                                                <div class="col-lg-7 col-md-6 col-sm-6 col-6">
                                                    <h5>
                                                        {{ wishlist.product.title }}
                                                        <p> {{ wishlist.product.brand }}</p>
                                                    </h5>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-lg-3 col-md-12 price">
                                            <p>Price</p>
                                            <h5>$ {{ wishlist.product.price }}</h5>
                                            <p style="display:grid">created at in <span>{{ wishlist.product.created_at | myDate }}</span></p>
                                            <!-- <button class="btn btn-outline-warning"> <a href="#">New Offer Received!</a> </button> -->
                                        </div>
                                        <div class="col-lg-2 col-md-12 btns">
                                           <div class="inner-gruop">

                                                  <div class="inner" >
                                                    <button class="btn btn-secondary"><router-link :to="{name: 'ShopDetailComponent', params:{query: wishlist.product.id}}">View</router-link></button>
                                                </div>
                                                <div class="inner">
                                                    <button class="btn btn-outline-danger" @click="removeFromWishlist(wishlist.id)">Remove Item</button>
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>


                             </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <pagination :data="products" @pagination-change-page="getProducts"></pagination> -->

          <!-- <div class="pagination-selling">

              <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="13.995" viewBox="0 0 8 13.995">
                                <g id="Icon_20_Grey_Arrow" data-name="Icon / 20 / Grey / Arrow" transform="translate(13.998 -3.002) rotate(90)">
                                    <path id="Shape" d="M7.712,7.69,1.678,13.708a.981.981,0,0,1-1.39-1.386L5.627,7,.288,1.673A.981.981,0,0,1,1.678.287L7.712,6.3a.978.978,0,0,1,0,1.386Z" transform="translate(16.998 5.998) rotate(90)" fill="#99abb9"/>
                                </g>
                            </svg>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="13.995" viewBox="0 0 8 13.995">
                            <g id="Icon_20_Grey_Arrow" data-name="Icon / 20 / Grey / Arrow" transform="translate(-5.998 16.998) rotate(-90)">
                            <path id="Shape" d="M7.712,7.69,1.678,13.708a.981.981,0,0,1-1.39-1.386L5.627,7,.288,1.673A.981.981,0,0,1,1.678.287L7.712,6.3a.978.978,0,0,1,0,1.386Z" transform="translate(16.998 5.998) rotate(90)" fill="#7ac943"/>
                            </g>
                        </svg>
                    </a>
                    </li>
                </ul>
               </nav>
          </div> -->

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
        loading : false,
        wishlists: {},
        message : '',
        pagination: {},
        openSlideBar: false
    }),
    components:{
        SideBar,
    },
    methods:{
        str_replace(str){
            str = str.replace('public',window.location.origin + '/storage');
            return str;
        },
        getProducts(){
            axios.get('/api/wishlist/getWishlist/0').then((response) => {
            this.wishlists = response.data;
            // this.pagination = response.data.links;
            // console.log(this.pagination);
            if(response.data.length == 0 ){
                this.message = 'You dont have products';
                }
        });
        },
        removeFromWishlist(wishlistId){
             axios.delete('/api/wishlist/remove/'+wishlistId).then((response) => {
                 document.getElementById('wishlist_'+wishlistId).remove();
                    Toast.fire({
                        icon: 'success',
                        title: 'Removed From Wishlist'
                        });
        });

        }
    },
    beforeCreate() {
        this.$Progress.start();
    },
    mounted(){
        // console.log(window.location.origin, this.$route);
        Fire.$emit('mounted');
        this.$Progress.finish();
        this.getProducts();
        Fire.$emit('mounted');
    }
})
</script>
