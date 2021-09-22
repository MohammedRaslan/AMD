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
                    <!-- <h3 class="text-center text-green my-5">There are no saved Products</h3> -->
                    <div data-v-131b9e68="" id="wishlist_12" class="tab-content"><div data-v-131b9e68="" class="inner-content"><div data-v-131b9e68="" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" class="tab-pane fade show active"><div data-v-131b9e68="" class="inner-item"><div data-v-131b9e68="" class="row"><div data-v-131b9e68="" class="col-lg-7 detalis"><div data-v-131b9e68="" class="row"><div data-v-131b9e68="" id="dot" class="col-sm-1 dot"><div data-v-131b9e68="" class="inner"></div></div> <div data-v-131b9e68="" class="col-lg-4 col-md-3 col-sm-4 col-6"><figure data-v-131b9e68=""><img data-v-131b9e68="" src="http://127.0.0.1:8000/storage/products/6/1631702368.jpg" alt=""></figure></div> <div data-v-131b9e68="" class="col-lg-7 col-md-6 col-sm-6 col-6"><h5 data-v-131b9e68="">
                                                    ldkfndflk
                                                    <p data-v-131b9e68=""> Anne Geddes</p></h5></div></div></div> <div data-v-131b9e68="" class="col-lg-3 col-md-12 price"><p data-v-131b9e68="">Price</p> <h5 data-v-131b9e68="">$ 111</h5> <p data-v-131b9e68="" style="display: grid;">created at in <span data-v-131b9e68="">September 15th 2021</span></p></div> <div data-v-131b9e68="" class="col-lg-2 col-md-12 btns"><div data-v-131b9e68="" class="inner-gruop"><div data-v-131b9e68="" class="inner"><button data-v-131b9e68="" class="btn btn-secondary"><a data-v-131b9e68="" href="/shop/6" class="">View</a></button></div> <div data-v-131b9e68="" class="inner"><button data-v-131b9e68="" class="btn btn-outline-danger">Remove Item</button></div></div></div></div></div> <hr data-v-131b9e68=""></div></div></div>

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
        openSlideBar: false
    }),
    components:{
        SideBar,
    },
    methods:{

    },
    beforeCreate() {
        this.$Progress.start();
    },
    mounted(){
        // console.log(window.location.origin, this.$route);
        // Fire.$emit('mounted');
        this.$Progress.finish();
        // this.getProducts();
        // Fire.$emit('mounted');
    }
})
</script>
