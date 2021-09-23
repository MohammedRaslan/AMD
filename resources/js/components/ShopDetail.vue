<template>
    <div>
        <!-- Breadcrumb Section Begin -->
        <section class="breadcrumb-option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb__text">
                            <div class="breadcrumb__links">
                                <router-link to="/">Home</router-link>
                                <svg xmlns="http://www.w3.org/2000/svg" width="4" height="6" viewBox="0 0 4 6">
                                    <g id="Icon_20_Grey_Dropdown" data-name="Icon / 20 / Grey / Dropdown"
                                        transform="translate(-8 13) rotate(-90)">
                                        <path id="Triangle" d="M3,4,6,0H0Z" transform="translate(7 8)" fill="#ffe0e0" />
                                    </g>
                                </svg>
                                <router-link to="/shopCategory/1">Category</router-link>
                                <svg xmlns="http://www.w3.org/2000/svg" width="4" height="6" viewBox="0 0 4 6">
                                    <g id="Icon_20_Grey_Dropdown" data-name="Icon / 20 / Grey / Dropdown"
                                        transform="translate(-8 13) rotate(-90)">
                                        <path id="Triangle" d="M3,4,6,0H0Z" transform="translate(7 8)" fill="#ffe0e0" />
                                    </g>
                                </svg>
                                <span>Luxurious Dolls</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Section End -->


        <section class="shop-details">
            <div class="product__details__pic pt-5">
                <div class="container">
                    <div class="row">
                        <!-- <div class="col-lg-8" v-if="loading"> -->
                        <div class="col-lg-8">
                            <h2 > {{ product.title }}  </h2>
                            <div class="detail-top">
                                <p>
                                    <span>Seller:</span>
                                    <span v-if="loading"> <router-link :to="'/vendorCategory/' + product.user.id" class="text-milky text-decoration-underline">{{ product.user.user_name }}</router-link> </span>
                                    <span class="saved-seller-icon m-1" :title="iconSeller ? 'Saved Seller': 'Unsaved Seller' " v-html="iconSeller ? '<i class=\'fas fa-plus-circle\'></i>': '<i class=\'far fa-check-circle\'></i>' " v-on:click="addToVendorWishlist(product.user.id)"></span>
                                </p>
                                <p v-if="shipping !=null && shipping.duration_usa"><span>Shipping time:</span> <span>{{ shipping.duration_usa }}</span></p>
                                <p>
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" id="Icon_love_outline" width="20.833" height="18.75" viewBox="0 0 20.833 18.75">
                                        <g id="Icon_love_outline-2" data-name="Icon_love_outline">
                                            <path id="Shape" d="M10.417,18.75a1.048,1.048,0,0,1-.742-.31L1.731,10.387A6.069,6.069,0,0,1,0,6.134,6.173,6.173,0,0,1,6.2,0,4.733,4.733,0,0,1,9.3,1.373a10.989,10.989,0,0,1,1.115,1.162,11,11,0,0,1,1.115-1.162A4.733,4.733,0,0,1,14.635,0a6.173,6.173,0,0,1,6.2,6.134,6.055,6.055,0,0,1-1.88,4.4l-7.8,7.905A1.034,1.034,0,0,1,10.417,18.75ZM6.2,2.083A4.088,4.088,0,0,0,2.083,6.134a4,4,0,0,0,1.139,2.8l7.194,7.293,7.064-7.163L17.5,9.04A3.989,3.989,0,0,0,18.75,6.134a4.088,4.088,0,0,0-4.115-4.051,2.778,2.778,0,0,0-1.722.85,11.223,11.223,0,0,0-1.648,1.918,1.042,1.042,0,0,1-1.7,0A11.257,11.257,0,0,0,7.921,2.933,2.779,2.779,0,0,0,6.2,2.083Z" fill="#fd1266"/>
                                        </g>
                                    </svg> -->
                                    <Wishlist :product_id="product.id"
                                            :userAddedItemToWishlist="product.userAddedItemToWishlist"
                                            :wishlistCount="product.wishlistCount"
                                            :product_user_id="product.user_id">
                                    </Wishlist>
                                </p>
                            </div>

                            <!-- imgs-product -->
                            <div class="imgs-product">
                                <div class="product__thumb__pic">
                                    <img :src="str_replace(product.image)" alt>
                                </div>
                                <!-- #nav-tabs -->
                               <div class="img-tabs">
                                   <div class="inner-imgs-tabs mt-4">
                                       <carousel :items='4' :nav='false'  :margin='13'>
                                           <!-- <template slot="prev"><span class="prev">TEst</span></template> -->

                                            <div class="item" v-for="(image,index) in images" :key="index">
                                                <figure class="m-0">
                                                    <img :src="str_replace(image.url)" alt="">
                                                </figure>
                                            </div>

                                            <!-- <template slot="next"><span class="next">Test 111</span></template> -->
                                       </carousel>
                                   </div>
                                </div>


                                <div class="col-lg-3 col-md-3 tabs-img d-none">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item" v-for="(image,index) in images" :key="index">
                                            <a class="nav-link" :class="{'active' : index == 0}" data-toggle="tab" :href="'#tabs-'+index" role="tab">
                                                <img class="product__thumb__pic set-bg" :src="str_replace(image.url)">
                                            </a>
                                        </li>
                                    </ul>
                                    <ul v-if="images.length == 0" class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active">
                                                <img  class="product__thumb__pic" :src="'/FrontEnd/images/Logo.png'" alt="Logo">
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active">
                                                <img  class="product__thumb__pic" :src="'/FrontEnd/images/Logo.png'" alt="Logo">
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active">
                                                <img  class="product__thumb__pic" :src="'/FrontEnd/images/Logo.png'" alt="Logo">
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active">
                                                <img  class="product__thumb__pic" :src="'/FrontEnd/images/Logo.png'" alt="Logo">
                                            </a>
                                        </li>
                                    </ul>
                                </div>


                                <div class="col-lg-10 col-md-9 cont-img d-none" style="margin: auto;">
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-img1" role="tabpanel" aria-labelledby="nav-img1-tab">
                                            <div class="product__details__pic__item">
                                                <img  :src="str_replace(product.image)" alt>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <!-- #tab-content -->
                                <div class="col-lg-9 col-md-9 d-none">
                                    <div class="cont-img w-100">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                                <div class="product__details__pic__item">
                                                    <img  :src="str_replace(product.image)" alt>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fs-20 shop-details-table">
                                <div class="row">
                                    <table class="table-responsive table-borderless table px-0">
                                        <tbody>
                                            <tr v-if='product.brand'>
                                                <td class="col-lg-4 col-xs-5 maintype px-0">Brand:</td>
                                                <td class="col-lg-8 col-xs-7 subtype"> {{ product.brand == null ? '-' : product.brand}} </td>
                                            </tr>
                                            <tr v-if='product.condition'>
                                                <td class="col-lg-4 maintype px-0">Condition:</td>
                                                <td class="col-lg-8 col-xs-7 subtype"> {{ product.condition == null ? '-' : product.condition}} </td>
                                            </tr>
                                            <tr v-if='product.doll_size'>
                                                <td class="col-lg-4 maintype px-0"> Size:</td>
                                                <td class="col-lg-8 col-xs-7 subtype"> {{ product.doll_size == null ? '-' : product.doll_size}} </td>
                                            </tr>
                                            <tr v-if='product.featured_refinements'>
                                                <td class="col-lg-4 maintype px-0">Featured Refinements:</td>
                                                <td class="col-lg-8 col-xs-7 subtype"> {{ product.featured_refinements == null ? '-' : product.featured_refinements }} </td>
                                            </tr>
                                            <tr v-if='product.domestic_product'>
                                                <td class="col-lg-4 maintype px-0">Domestic Product:</td>
                                                <td class="col-lg-8 col-xs-7 subtype"> {{ product.domestic_product == 1 ? 'Yes' : 'No' }}  </td>
                                            </tr>
                                            <tr v-if='product.modified_item'>
                                                <td class="col-lg-4 maintype px-0">Modified:</td>
                                                <td class="col-lg-8 col-xs-7 subtype"> {{ product.modified_item == 1 ? 'Yes' : 'No' }}</td>
                                            </tr>
                                            <tr v-if='product.pc'>
                                                <td class="col-lg-4 maintype px-0">UPC:</td>
                                                <td class="col-lg-8 col-xs-7 subtype">{{ product.upc  == null ? '-' :  product.upc}} </td>
                                            </tr>
                                            <tr v-if='product.return_policy'>
                                                <td class="col-lg-4 maintype px-0">Return Policy:</td>
                                                <td class="col-lg-8 col-xs-7 subtype"> {{ product.return_policy  == null ? '-' :  product.return_policy}}  </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="product__details__content">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                            <svg xmlns="http://www.w3.org/2000/svg" id="Icon_menu_leftpoint_outline"
                                                width="18" height="14" viewBox="0 0 18 14">
                                                <path id="Path" d="M0,1A1,1,0,0,1,1,0H13a1,1,0,0,1,0,2H1A1,1,0,0,1,0,1Z"
                                                    transform="translate(4)" fill="#7ac943" />
                                                <path id="Path-2" data-name="Path"
                                                    d="M0,1A1,1,0,0,1,1,0H13a1,1,0,0,1,0,2H1A1,1,0,0,1,0,1Z"
                                                    transform="translate(4 6)" fill="#7ac943" />
                                                <path id="Path-3" data-name="Path"
                                                    d="M0,1A1,1,0,0,1,1,0H13a1,1,0,0,1,0,2H1A1,1,0,0,1,0,1Z"
                                                    transform="translate(4 12)" fill="#7ac943" />
                                                <path id="Path-4" data-name="Path" d="M2,1A1,1,0,1,1,1,0,1,1,0,0,1,2,1Z"
                                                    fill="#7ac943" />
                                                <path id="Path-5" data-name="Path" d="M2,1A1,1,0,1,1,1,0,1,1,0,0,1,2,1Z"
                                                    transform="translate(0 6)" fill="#7ac943" />
                                                <path id="Path-6" data-name="Path" d="M2,1A1,1,0,1,1,1,0,1,1,0,0,1,2,1Z"
                                                    transform="translate(0 12)" fill="#7ac943" />
                                            </svg>
                                            <span>Details</span>
                                            <svg class="active-arrow" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="10" viewBox="0 0 16 10">
                                                <path id="Polygon_1" data-name="Polygon 1" d="M8,0l8,10H0Z"
                                                    fill="#ffe0e0" />
                                            </svg>
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="13"
                                                viewBox="0 0 20 13">
                                                <g id="Icon_20_Grey_Shopping_Cart"
                                                    data-name="Icon / 20 / Grey / Shopping Cart"
                                                    transform="translate(0 -4)">
                                                    <path id="Shape"
                                                        d="M15.951,13a2.226,2.226,0,0,1-2.172-1.6h-7.4A2.268,2.268,0,0,1,4.209,13a2.229,2.229,0,0,1-2.173-1.6H.836A.83.83,0,0,1,0,10.578V.826A.8.8,0,0,1,.77,0H9.68a.8.8,0,0,1,.77.826v.9h3.3a1.5,1.5,0,0,1,1.2.6.2.2,0,0,1,.034.044.238.238,0,0,0,.035.044l1.741,2.579,1.017.157A1.461,1.461,0,0,1,19.254,6.6V8.708A.843.843,0,0,1,20,9.535v1.043a.83.83,0,0,1-.836.823h-1.04A2.27,2.27,0,0,1,15.951,13Zm0-3.336a1.137,1.137,0,0,0-1.131,1.112,1.123,1.123,0,0,0,1.131,1.112,1.137,1.137,0,0,0,1.131-1.112A1.123,1.123,0,0,0,15.951,9.663Zm-11.741,0a1.137,1.137,0,0,0-1.131,1.112A1.131,1.131,0,1,0,4.209,9.663ZM12,2.825a.1.1,0,0,0-.106.1V4.973A.106.106,0,0,0,12,5.078v0h3.193a.1.1,0,0,0,.09-.054.1.1,0,0,0,0-.107l-1.4-2.043a.1.1,0,0,0-.086-.044Z"
                                                        transform="translate(0 4)" fill="#fecc2f" />
                                                </g>
                                            </svg>
                                            <span>Shipping</span>
                                            <svg class="active-arrow" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="10" viewBox="0 0 16 10">
                                                <path id="Polygon_2" data-name="Polygon 1" d="M8,0l8,10H0Z"
                                                    fill="#ffe0e0" />
                                            </svg>
                                        </button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                        <div class="fs-20 shop-details-table mt-3">
                                            <div class="row">
                                                <table class="table-responsive table-borderless table px-0">
                                                    <tbody>
                                                        <tr v-if='product.brand'>
                                                            <td class="col-lg-4 col-xs-5 maintype px-0">Brand:</td>
                                                            <td class="col-lg-8 col-xs-7 subtype"> {{ product.brand == null ? '-' : product.brand}} </td>
                                                        </tr>
                                                        <tr v-if='product.condition'>
                                                            <td class="col-lg-4 maintype px-0">Condition:</td>
                                                            <td class="col-lg-8 col-xs-7 subtype"> {{ product.condition == null ? '-' : product.condition}} </td>
                                                        </tr>
                                                        <tr v-if='product.doll_size'>
                                                            <td class="col-lg-4 maintype px-0">Size:</td>
                                                            <td class="col-lg-8 col-xs-7 subtype"> {{ product.doll_size == null ? '-' : product.doll_size}} </td>
                                                        </tr>
                                                        <tr v-if='product.featured_refinements'>
                                                            <td class="col-lg-4 maintype px-0">Featured Refinements:</td>
                                                            <td class="col-lg-8 col-xs-7 subtype">  {{ product.featured_refinements == null ? '-' : product.featured_refinements }} </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="col-lg-4 maintype px-0">Domestic Product:</td>
                                                            <td class="col-lg-8 col-xs-7 subtype"> {{ product.domestic_product == 1 ? 'Yes' : 'No' }}  </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="col-lg-4 maintype px-0">Modified:</td>
                                                            <td class="col-lg-8 col-xs-7 subtype"> {{ product.modified_item == 1 ? 'Yes' : 'No' }}</td>
                                                        </tr>
                                                        <tr v-if='product.upc'>
                                                            <td class="col-lg-4 maintype px-0">UPC:</td>
                                                            <td class="col-lg-8 col-xs-7 subtype">{{ product.upc  == null ? '-' :  product.upc}} </td>
                                                        </tr>
                                                        <tr v-if='product.return_policy'>
                                                            <td class="col-lg-4 maintype px-0">Return Policy:</td>
                                                            <td class="col-lg-8 col-xs-7 subtype"> {{ product.return_policy  == null ? '-' :  product.return_policy}}  </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" class="tab-pane fade active show">
                                        <div class="shipping-details mt-3 mb-4">
                                           <!-- Package Details -->
                                            <div class="row shipping-poll py-3" v-if="shipping.package_details == 'details'">
                                                <h3 class="title-color title-shipping-details"> Package Details</h3>
                                                <div class="col-6 col-lg-3">
                                                    <span class="inner-title">Weight:</span>
                                                    <span class="inner-value">{{ shipping.weight }} kg</span>
                                                </div>
                                                <div class="col-6 col-lg-3">
                                                    <span class="inner-title">Width:</span>
                                                    <span class="inner-value">{{ shipping.width }} cm</span>
                                                </div>
                                                <div class="col-6 col-lg-3">
                                                    <span class="inner-title">Height:</span>
                                                    <span class="inner-value">{{ shipping.height }} cm</span>
                                                </div>
                                                <div class="col-6 col-lg-3">
                                                    <span class="inner-title">Length:</span>
                                                    <span class="inner-value">{{ shipping.length }} cm</span>
                                                </div>
                                            </div>
                                            <hr class="title-color m-0" v-if="shipping.package_details == 'details'">

                                            <!-- USA Shipping -->
                                            <div class="row shipping-poll py-3" v-if="shipping.usa">
                                                <h3 class="title-color title-shipping-details">USA Shipping</h3>
                                                <div class="row">
                                                    <span class="inner-title col-4 col-lg-3">Service:</span>
                                                    <span class="inner-value col-8">{{ shipping.service_usa }}</span>
                                                </div>
                                                <div class="row">
                                                    <span class="inner-title col-4 col-lg-3">Cost:</span>
                                                    <span class="inner-value col-8">{{ shipping.price_usa }} <span v-html="currencyIcon"></span> </span>
                                                </div>
                                                <div class="row">
                                                    <span class="inner-title col-4 col-lg-3">Duration:</span>
                                                    <span class="inner-value col-8">{{ shipping.duration_usa == null ? '-' : shipping.duration_usa }} </span>
                                                </div>
                                            </div>
                                            <hr class="title-color m-0" v-if="shipping.usa">

                                            <!-- Worldwide Shipping -->
                                            <div class="row shipping-poll py-3" v-if="shipping.world_wide">
                                                <h3 class="title-color title-shipping-details">Worldwide</h3>
                                                <div class="">
                                                    <span class="inner-title">Service:</span>
                                                    <span class="inner-value">{{ shipping.service_world_wide }}</span>
                                                </div>
                                                <div>
                                                    <span class="inner-title">Cost:</span>
                                                    <span class="inner-value">{{ shipping.price_world_wide }} <span v-html="currencyIcon"></span> </span>
                                                </div>
                                                <div v-if='shipping.duration_worldwide'>
                                                    <span class="inner-title">Duration:</span>
                                                    <span class="inner-value">{{ shipping.duration_worldwide == null ? '-' : shipping.duration_worldwide }} </span>
                                                </div>
                                            </div>
                                            <hr class="title-color m-0">
                                        </div>
                                    </div>

                                    <!-- <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                        <hr>
                                        <h3 class="title-color pt-2 underline"> Package Details</h3>

                                        <div class="row pt-1 pb-1 m-1" v-if="shipping.package_details == 'details'">
                                            <div class="col-3"> <span class="inner-title">Weight:</span> <span class="inner-value">{{ shipping.weight }}</span> </div>
                                            <div class="col-3"> <span class="inner-title">Width:</span> <span class="inner-value">{{ shipping.width }}</span> </div>
                                            <div class="col-3"> <span class="inner-title">Height:</span> <span class="inner-value">{{ shipping.height }}</span> </div>
                                            <div class="col-3"> <span class="inner-title">Length:</span> <span class="inner-value">{{ shipping.length }}</span> </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 fs-20" v-if="shipping.usa">
                                                <h3 class="title-color">USA</h3><hr class="title-color">
                                                <div class="mb-2 row">
                                                    <span class="inner-title col-4 col-lg-3">Service:</span>
                                                    <span class="inner-value col-8">{{ shipping.service_usa }}</span>
                                                </div>
                                                <div class="row">
                                                    <span class="inner-title col-4 col-lg-3">Price:</span>
                                                    <span class="inner-value col-8">{{ shipping.price_usa }} </span>
                                                </div>
                                                <div class="row">
                                                    <span class="inner-title col-4 col-lg-3">Duration:</span>
                                                    <span class="inner-value col-8">{{ shipping.duration_usa == null ? '-' : shipping.duration_usa }} </span>
                                                </div>
                                            </div>
                                            <div class="col-6" v-if="shipping.world_wide">
                                                <h3 class="title-color">World Wide</h3><hr class="title-color">
                                                <div class="mb-2"><span class="inner-title">Service:</span> <span class="inner-value">{{ shipping.service_world_wide }}</span></div>
                                                <div><span class="inner-title">Price:</span><span class="inner-value">{{ shipping.price_world_wide }}</span>  </div>
                                                <div><span class="inner-title">Duration:</span> <span class="inner-value">{{ shipping.duration_worldwide == null ? '-' : shipping.duration_worldwide }} </span></div>
                                            </div>
                                        </div>

                                    </div> -->

                                    <div class="tab-pane fade show active d-none" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                        <div class="fs-20 shop-details-table mt-3 mb-3">
                                            <div class="row">
                                                <table class="table-responsive table-borderless table mb-0">
                                                    <tbody>
                                                        <tr v-if='product.brand'>
                                                            <td class="col-lg-4 col-xs-5 maintype">Brand:</td>
                                                            <td class="col-lg-8 col-xs-7 subtype"> {{ product.brand == null ? '-' : product.brand}} </td>
                                                        </tr>
                                                        <tr v-if='product.condition'>
                                                            <td class="col-lg-4 maintype">Condition:</td>
                                                            <td class="col-lg-8 col-xs-7 subtype"> {{ product.condition == null ? '-' : product.condition}} </td>
                                                        </tr>
                                                        <tr v-if='product.doll_size'>
                                                            <td class="col-lg-4 maintype">Size:</td>
                                                            <td class="col-lg-8 col-xs-7 subtype"> {{ product.doll_size == null ? '-' : product.doll_size}} </td>
                                                        </tr>
                                                        <tr v-if='product.featured_refinements'>
                                                            <td class="col-lg-4 maintype">Featured Refinements:</td>
                                                            <td class="col-lg-8 col-xs-7 subtype">  {{ product.featured_refinements == null ? '-' : product.featured_refinements }} </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="col-lg-4 maintype">Domestic Product:</td>
                                                            <td class="col-lg-8 col-xs-7 subtype"> {{ product.domestic_product == 1 ? 'Yes' : 'No' }}  </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="col-lg-4 maintype">Modified:</td>
                                                            <td class="col-lg-8 col-xs-7 subtype"> {{ product.modified_item == 1 ? 'Yes' : 'No' }}</td>
                                                        </tr>
                                                        <tr v-if='product.upc'>
                                                            <td class="col-lg-4 maintype">UPC:</td>
                                                            <td class="col-lg-8 col-xs-7 subtype">{{ product.upc  == null ? '-' :  product.upc}} </td>
                                                        </tr>
                                                        <tr v-if='product.return_policy'>
                                                            <td class="col-lg-4 maintype">Return Policy:</td>
                                                            <td class="col-lg-8 col-xs-7 subtype"> {{ product.return_policy  == null ? '-' :  product.return_policy}}  </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <h3 class="title-color title-shipping-details">Description</h3>
                                        <p class="text-offwhite" v-html="product.description"></p>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="fs-20 bottom pb-3 pt-3">
                                <div class="row">
                                    <span class="col-lg-4 col-xs-5 maintype">Price:</span>
                                    <span class="col-lg-8 col-xs-7 subtype">{{ product.price == null ? '-' : product.price}} <span v-html="currencyIcon"></span></span>
                                </div>
                                <div class="row">
                                    <span class="col-lg-4 col-xs-5 maintype">Brand:</span>
                                    <span class="col-lg-8 col-xs-7 subtype">{{ product.brand == null ? '-' : product.brand}} </span>
                                </div>
                                <div class="row">
                                    <span class="col-lg-4 col-xs-5 maintype">Condition:</span>
                                    <span class="col-lg-8 col-xs-7 subtype">{{ product.condition == null ? '-' : product.condition}} </span>
                                </div>
                                <div class="row">
                                    <span class="col-lg-4 col-xs-5 maintype">Featured Refinements:</span>
                                    <span class="col-lg-8 col-xs-7 subtype">{{ product.featured_refinements == null ? '-' : product.featured_refinements }} </span>
                                </div>
                                <div class="row">
                                    <span class="col-lg-4 col-xs-5 maintype">Modified :</span>
                                    <span class="col-lg-8 col-xs-7 subtype">{{ product.modified_item == 1 ? 'Yes' : 'No' }} </span>
                                </div>
                                <div class="row">
                                    <span class="col-lg-4 col-xs-5 maintype">Return Policy:</span>
                                    <span class="col-lg-8 col-xs-7 subtype">{{ product.return_policy  == null ? '-' :  product.return_policy}} </span>
                                </div>


                            </div>
                            <div class="product__details__content pt-3">
                                <div class="col-lg-12">
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-home-tab" data-bs-target="#pills-home" data-bs-toggle="pill" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                            <svg id="Icon_menu_leftpoint_outline" xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14">
                                                <path id="Path" d="M0,1A1,1,0,0,1,1,0H13a1,1,0,0,1,0,2H1A1,1,0,0,1,0,1Z" transform="translate(4)" fill="#7ac943"></path>
                                                <path id="Path-2" data-name="Path" d="M0,1A1,1,0,0,1,1,0H13a1,1,0,0,1,0,2H1A1,1,0,0,1,0,1Z" transform="translate(4 6)" fill="#7ac943"></path>
                                                <path id="Path-3" data-name="Path" d="M0,1A1,1,0,0,1,1,0H13a1,1,0,0,1,0,2H1A1,1,0,0,1,0,1Z" transform="translate(4 12)" fill="#7ac943"></path>
                                                <path id="Path-4" data-name="Path" d="M2,1A1,1,0,1,1,1,0,1,1,0,0,1,2,1Z" fill="#7ac943"></path>
                                                <path id="Path-5" data-name="Path" d="M2,1A1,1,0,1,1,1,0,1,1,0,0,1,2,1Z" transform="translate(0 6)" fill="#7ac943"></path>
                                                <path id="Path-6" data-name="Path" d="M2,1A1,1,0,1,1,1,0,1,1,0,0,1,2,1Z" transform="translate(0 12)" fill="#7ac943"></path>
                                            </svg>
                                            <span>Details</span>
                                            <svg class="active-arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10">
                                            <path id="Polygon_1" data-name="Polygon 1" d="M8,0l8,10H0Z" fill="#ffe0e0"></path>
                                            </svg>
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-profile-tab" data-bs-target="#pills-profile" data-bs-toggle="pill" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="13" viewBox="0 0 20 13">
                                            <g id="Icon_20_Grey_Shopping_Cart" data-name="Icon / 20 / Grey / Shopping Cart" transform="translate(0 -4)">
                                                <path id="Shape" d="M15.951,13a2.226,2.226,0,0,1-2.172-1.6h-7.4A2.268,2.268,0,0,1,4.209,13a2.229,2.229,0,0,1-2.173-1.6H.836A.83.83,0,0,1,0,10.578V.826A.8.8,0,0,1,.77,0H9.68a.8.8,0,0,1,.77.826v.9h3.3a1.5,1.5,0,0,1,1.2.6.2.2,0,0,1,.034.044.238.238,0,0,0,.035.044l1.741,2.579,1.017.157A1.461,1.461,0,0,1,19.254,6.6V8.708A.843.843,0,0,1,20,9.535v1.043a.83.83,0,0,1-.836.823h-1.04A2.27,2.27,0,0,1,15.951,13Zm0-3.336a1.137,1.137,0,0,0-1.131,1.112,1.123,1.123,0,0,0,1.131,1.112,1.137,1.137,0,0,0,1.131-1.112A1.123,1.123,0,0,0,15.951,9.663Zm-11.741,0a1.137,1.137,0,0,0-1.131,1.112A1.131,1.131,0,1,0,4.209,9.663ZM12,2.825a.1.1,0,0,0-.106.1V4.973A.106.106,0,0,0,12,5.078v0h3.193a.1.1,0,0,0,.09-.054.1.1,0,0,0,0-.107l-1.4-2.043a.1.1,0,0,0-.086-.044Z" transform="translate(0 4)" fill="#fecc2f"></path>
                                            </g>
                                            </svg>
                                            <span>Shipping</span>
                                            <svg class="active-arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10">
                                            <path id="Polygon_2" data-name="Polygon 1" d="M8,0l8,10H0Z" fill="#ffe0e0"></path>
                                            </svg>
                                        </button>
                                    </li>
                                    </ul>
                                    <div class="tab-content " id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                            <div class="fs-20 bottom pb-3">
                                                <div class="row">
                                                    <span class="col-lg-4 col-xs-5 maintype">Brand:</span>
                                                    <span class="col-lg-8 col-xs-7 subtype">{{ product.brand == null ? '-' : product.brand}} </span>
                                                </div>
                                                <div class="row">
                                                    <span class="col-lg-4 col-xs-5 maintype">Condition:</span>
                                                    <span class="col-lg-8 col-xs-7 subtype">{{ product.condition == null ? '-' : product.condition}} </span>
                                                </div>
                                                <div class="row">
                                                    <span class="col-lg-4 col-xs-5 maintype">Gender:</span>
                                                    <span class="col-lg-8 col-xs-7 subtype">{{ product.doll_gender == null ? '-' : product.doll_gender}} </span></div>
                                                <div class="row">
                                                    <span class="col-lg-4 col-xs-5 maintype">Size:</span>
                                                    <span class="col-lg-8 col-xs-7 subtype">{{ product.doll_size == null ? '-' : product.doll_size}} </span>
                                                </div>
                                                <div class="row">
                                                    <span class="col-lg-4 col-xs-5 maintype">Featured Refinements:</span>
                                                    <span class="col-lg-8 col-xs-7 subtype">{{ product.featured_refinements == null ? '-' : product.featured_refinements }} </span>
                                                </div>
                                                <div class="row">
                                                    <span class="col-lg-4 col-xs-5 maintype">Domestic Product:</span>
                                                    <span class="col-lg-8 col-xs-7 subtype">{{ product.domestic_product == 1 ? 'Yes' : 'No' }} </span>
                                                </div>
                                                <div class="row">
                                                    <span class="col-lg-4 col-xs-5 maintype">Modified :</span>
                                                    <span class="col-lg-8 col-xs-7 subtype">{{ product.modified_item == 1 ? 'Yes' : 'No' }} </span>
                                                </div>
                                                <div class="row">
                                                    <span class="col-lg-4 col-xs-5 maintype">UPC:</span>
                                                    <span class="col-lg-8 col-xs-7 subtype">{{ product.upc  == null ? '-' :  product.upc}} </span>
                                                </div>
                                                <div class="row">
                                                    <span class="col-lg-4 col-xs-5 maintype">Return Policy:</span>
                                                    <span class="col-lg-8 col-xs-7 subtype">{{ product.return_policy  == null ? '-' :  product.return_policy}} </span>
                                                </div>


                                            </div>
                                            <hr>
                                            <div class="des">
                                                <h2>Description</h2>
                                                    <p class="pl-2" v-html="product.description"></p>
                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" v-if="shipping != null">
                                            <hr>
                                            <h3 class="title-color pt-2 underline"> Package Details</h3>

                                            <div class="row pt-1 pb-1 m-1" v-if="shipping.package_details == 'details'">
                                                <div class="col-3"> <span class="inner-title">Weight:</span> <span class="inner-value">{{ shipping.weight }}</span> </div>
                                                <div class="col-3"> <span class="inner-title">Width:</span> <span class="inner-value">{{ shipping.width }}</span> </div>
                                                <div class="col-3"> <span class="inner-title">Height:</span> <span class="inner-value">{{ shipping.height }}</span> </div>
                                                <div class="col-3"> <span class="inner-title">Length:</span> <span class="inner-value">{{ shipping.length }}</span> </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 fs-20" v-if="shipping.usa">
                                                    <h3 class="title-color">USA</h3><hr class="title-color">
                                                    <div class="mb-2 row">
                                                        <span class="inner-title col-4 col-lg-3">Service:</span>
                                                        <span class="inner-value col-8">{{ shipping.service_usa }}</span>
                                                    </div>
                                                    <div class="row">
                                                        <span class="inner-title col-4 col-lg-3">Price:</span>
                                                        <span class="inner-value col-8">{{ shipping.price_usa }} <span v-html="currencyIcon"></span> </span>
                                                    </div>
                                                    <div class="row">
                                                        <span class="inner-title col-4 col-lg-3">Duration:</span>
                                                        <span class="inner-value col-8">{{ shipping.duration_usa == null ? '-' : shipping.duration_usa }} </span>
                                                    </div>
                                                </div>
                                                <div class="col-6" v-if="shipping.world_wide">
                                                    <h3 class="title-color">World Wide</h3><hr class="title-color">
                                                    <div class="mb-2"><span class="inner-title">Service:</span> <span class="inner-value">{{ shipping.service_world_wide }}</span></div>
                                                    <div><span class="inner-title">Price:</span><span class="inner-value">{{ shipping.price_world_wide }} <span v-html="currencyIcon"></span> </span>  </div>
                                                    <div><span class="inner-title">Duration:</span> <span class="inner-value">{{ shipping.duration_worldwide == null ? '-' : shipping.duration_worldwide }} </span></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="col-lg-4 parent-price-table" v-if="loading">

                            <div  v-if="loading">
                                <Bidding v-if="product.type == 1" :bid="product.bid" :steps="bid_step_list" :author="author" :user_details="product.user_details"></Bidding>
                            </div>

                            <div v-if="(loading && !author)">
                                <AddCartWidget :id="id" :price="product.price" :currency="product.currencyIcon" :exist="exist" :wishlistCount="product.wishlistCount" v-if="product.type == 0"></AddCartWidget>
                                <MakeOfferWidget v-if="product.best_offer" :id="product.id" :best_offer_price="product.best_offer_price" ></MakeOfferWidget>
                            </div>
                            <div v-if="author && product.best_offer">
                                <ListOffers :id="product.id"></ListOffers>
                            </div>
                            <ChatWidget
                                    :productUserID="product.user_id"
                                    :productUserName="product.user.user_name"
                                    :productUserEmail="product.user.email"
                                    :productID="product.id"
                                    :loggedUser="loggedUser"></ChatWidget>
                        </div>
                    </div>
                </div>

            </div>

        </section>

    <!-- Shop Details Section End -->

    </div>
</template>
<style  scoped>
    .cont-img{
        width: 47%;
    }
    .title-color{
        color: #ffe0e0;
    }
    .maintype{
        color:#7ac942;
    }
    .inner-title{
        color:#7ac942;
    }
    .subtype{
        color: #fecc2f;
    }
    .inner-value{
        color: #fecc2f;
    }
    .underline{
        text-decoration: underline;
    }
    .fs-20{
        font-size: 20px;
    }
    .bottom{
        border-bottom: 1px solid #ffe0e0;
    }
</style>
<script>
import AddCartWidget from "./widgets/AddCartComponent";
import MakeOfferWidget from "./widgets/MakeOfferComponent";
import ChatWidget from "./widgets/ChatComponent";
import Wishlist from "./widgets/WishlistComponent";
import ListOffers from "./widgets/ShowOffersComponent"
import Bidding from "./widgets/BiddingComponent";
import carousel from 'vue-owl-carousel'
export default ({
    data:()=>({
        id : null,
        product: {
            user : {}
        },
        loggedUser: null,
        images:{},
        loading : false,
        author: false,
        added: false,
        exist: false,
        shipping: null,
        bid_step_list: [],
        currencyIcon: null,
        iconSeller: true,

    }),
    components: {
        AddCartWidget,
        MakeOfferWidget,
        ChatWidget,
        Wishlist,
        ListOffers,
        Bidding,
        carousel,
    },
    methods:{
        str_replace: function(str){
            str = str.replace('public',window.location.origin + '/storage');
            return str;
        },
           addToVendorWishlist(vendor_id){
               
                axios.get('/api/product/AddToVendorWishlist/'+vendor_id).then((response) => {
                    if(response.data.status == 'added'){
                      this.iconSeller = !this.iconSeller;          
                    }
                });
            
        },
        


    },
    created(){
        Fire.$on('AddedToCart',()=>{
                Toast.fire({
                    icon: 'success',
                    title: 'Added To Cart'
                    });
            });
        Fire.$on('RemoveFromCart',()=>{
                Toast.fire({
                    icon: 'success',
                    title: 'Removed From Cart'
                    });
        });

    },
    mounted(){
        this.id = this.$route.params.query;
        axios.get('/api/shop/getProduct/'+this.id).then((response) => {

            this.product = response.data.product;
            console.log(this.product);
            this.images  = response.data.product.images;
            this.shipping = response.data.product.shipping;
            this.loading = true;
            this.bid_step_list = response.data.steps;
            this.currencyIcon = response.data.product.currencyIcon;
            if(this.product.user.email == JSON.parse(localStorage.getItem('currentUser'))['email']){
                this.author = true;
            }
        });
        axios.get('/api/cart/checkIfExist/'+this.id).then((response) => {
            if(response.data == true){
                this.exist = true;
            }
        });
        axios.get('/api/user/getUserId').then((response) => {
            this.loggedUser = response.data;
        });
    }
})
</script>
