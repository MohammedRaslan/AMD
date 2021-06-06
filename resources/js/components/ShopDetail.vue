<template>
    <div>
        <section class="breadcrumb-option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb__text">
                            <div class="breadcrumb__links">
                                <a href="index.html">Home</a>
                                <svg xmlns="http://www.w3.org/2000/svg" width="4" height="6" viewBox="0 0 4 6">
                                    <g id="Icon_20_Grey_Dropdown" data-name="Icon / 20 / Grey / Dropdown" transform="translate(-8 13) rotate(-90)">
                                        <path id="Triangle" d="M3,4,6,0H0Z" transform="translate(7 8)" fill="#ffe0e0"></path>
                                    </g>
                                </svg>
                                <a href="dolls.html">Category</a>
                                <svg xmlns="http://www.w3.org/2000/svg" width="4" height="6" viewBox="0 0 4 6">
                                    <g id="Icon_20_Grey_Dropdown" data-name="Icon / 20 / Grey / Dropdown" transform="translate(-8 13) rotate(-90)">
                                        <path id="Triangle" d="M3,4,6,0H0Z" transform="translate(7 8)" fill="#ffe0e0"></path>
                                    </g>
                                </svg>
                                <span>Luxurious Dolls</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

            <!-- Shop Details Section Begin -->
    <section class="shop-details">
        <div class="product__details__pic">
            <div class="container">
                <div class="row">                    
                    <div class="col-lg-8" v-if="loading">
                        <h2 > {{ product.title }}  </h2>
                        <div class="detail-top">
                            <p><span>Seller:</span> <span v-if="loading">{{ product.user.first_name }}  {{ product.user.last_name }}</span></p>
                            <p><span>Shipping time:</span> <span>2-9 days</span></p>
                            <p>
                                <!-- <svg xmlns="http://www.w3.org/2000/svg" id="Icon_love_outline" width="20.833" height="18.75" viewBox="0 0 20.833 18.75">
                                    <g id="Icon_love_outline-2" data-name="Icon_love_outline">
                                        <path id="Shape" d="M10.417,18.75a1.048,1.048,0,0,1-.742-.31L1.731,10.387A6.069,6.069,0,0,1,0,6.134,6.173,6.173,0,0,1,6.2,0,4.733,4.733,0,0,1,9.3,1.373a10.989,10.989,0,0,1,1.115,1.162,11,11,0,0,1,1.115-1.162A4.733,4.733,0,0,1,14.635,0a6.173,6.173,0,0,1,6.2,6.134,6.055,6.055,0,0,1-1.88,4.4l-7.8,7.905A1.034,1.034,0,0,1,10.417,18.75ZM6.2,2.083A4.088,4.088,0,0,0,2.083,6.134a4,4,0,0,0,1.139,2.8l7.194,7.293,7.064-7.163L17.5,9.04A3.989,3.989,0,0,0,18.75,6.134a4.088,4.088,0,0,0-4.115-4.051,2.778,2.778,0,0,0-1.722.85,11.223,11.223,0,0,0-1.648,1.918,1.042,1.042,0,0,1-1.7,0A11.257,11.257,0,0,0,7.921,2.933,2.779,2.779,0,0,0,6.2,2.083Z" fill="#fd1266"/>
                                    </g>
                                </svg> -->
                                <i class="far fa-heart heart"></i>
                                <span>314</span>
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 tabs-img">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" v-for="(image,index) in images" :key="index">
                                        <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                            <img class="product__thumb__pic set-bg" :src="str_replace(image.url)">
                                            
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-lg-9 col-md-9 cont-img">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                        <div class="product__details__pic__item">
                                            <img  :src="str_replace(product.image)" alt>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="des">
                            <p >
                                {{ product.description }}
                            </p>
                        </div>

                         <div class="product__details__content">
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
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                         <p>
                                             {{ product.details }}
                                         </p>
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                         <p>
                                           2- Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleife
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 parent-price-table">
                   
                        <AddCartWidget :id="id" :price="product.price" :exist="exist" v-if="(loading && !author)"></AddCartWidget>

                    </div>


                </div>
            </div>
            <img class="person" :src="'/FrontEnd/images/Details/detali-bot.png'" alt>
        </div>
    </section>
    <!-- Shop Details Section End -->

    </div>
</template>

<script>
import AddCartWidget from "./widgets/AddCartComponent";

export default ({
    data:()=>({
        id : null,
        product: null,
        images:{},
        loading : false,
        author: false,
        added: false,
        exist: false,
    }),
    components: {
        AddCartWidget,
    },
    methods:{
        str_replace(str){
            str = str.replace('public',window.location.origin + '/storage');
            return str;
        }
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
            this.images  = response.data.images;
            this.loading = true;
            if(this.product.user.email == JSON.parse(localStorage.getItem('currentUser'))['email']){
                this.author = true;
            }
        });
        axios.get('/api/cart/checkIfExist/'+this.id).then((response) => {
            if(response.data == true){
                this.exist = true;
            }
        });
    }
})
</script>
