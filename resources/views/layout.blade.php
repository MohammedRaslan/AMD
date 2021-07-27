<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ALL ABOUT MY DOLLS | Home</title>
    <link rel="shortcut icon" href="{{ asset('FrontEnd') }}/images/Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('FrontEnd') }}/css/bootstrap5.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('FrontEnd') }}/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('FrontEnd') }}/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('FrontEnd') }}/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('FrontEnd') }}/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('FrontEnd') }}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('FrontEnd') }}/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('FrontEnd') }}/css/style.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('FrontEnd') }}/css/swiper.css">
    <link rel="stylesheet" href="{{ asset('FrontEnd') }}/css/app.css" type="text/css">
    <link rel="stylesheet" href=" {{ asset('Admin/assets') }}/assets/plugins/dropify/css/dropify.min.css">


</head>
<style>
    .nice-select {
        display: none;
    }

    #preloader {
        display: block !important;
    }

</style>

<body>
    <div id="app">
        <!-- Page Preloder -->

        <div id="preloder">
            <div class="loader" style="display: block !imortant"></div>
        </div>
        <!-- Offcanvas Menu Begin -->
        <div class="offcanvas-menu-overlay"></div>
        <div class="offcanvas-menu-wrapper">
            <div class="offcanvas__option">
            </div>
            <div class="offcanvas__nav__option">
                <a href="#" class="search-switch">
                    {{-- <img src="{{ asset('FrontEnd') }}/img/icon/search.png" alt=""> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="27" viewBox="0 0 19.944 19.945">
                        <g id="Icon_20_Grey_Search" data-name="Icon / 20 / Grey / Search" transform="translate(0 0)">
                            <path id="Shape"
                                d="M18.279,19.945a1.656,1.656,0,0,1-1.179-.488l-4.334-4.334a.389.389,0,0,1-.034-.041c-.009-.011-.017-.022-.026-.033a8.2,8.2,0,1,1,2.344-2.344l.032.026a.4.4,0,0,1,.042.035L19.457,17.1a1.667,1.667,0,0,1-1.179,2.845ZM8.2,2.842A5.358,5.358,0,1,0,13.558,8.2,5.364,5.364,0,0,0,8.2,2.842Z"
                                fill="#fff"></path>
                        </g>
                    </svg>
                </a>
            </div>
            <div id="mobile-menu-wrap">
               <Mobile></Mobile>
            </div>
            {{-- <div class="offcanvas__text">
            <p>Free shipping, 30-day return or refund guarantee.</p>
        </div> --}}
        </div>
        <!-- Offcanvas Menu End -->

        <!-- Header Section Begin -->
        <header class="header">
            <div class="container h-100">
                <div class="row h-100 d-flex align-items-center">
                    <div class="col-lg-3 col-md-3 col-3 p-0">
                        <div class="header__logo">
                            <router-link to="/">
                                {{-- <img src="{{ asset('FrontEnd') }}/images/Logo.png" alt> --}}
                                <img src="{{ asset('FrontEnd') }}/images/Logo-mobile.png" alt>
                            </router-link>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-9">
                        <Navbar></Navbar>
                    </div>
                </div>
                <div class="canvas__open"><i class="fa fa-bars"></i></div>
            </div>
        </header>
        <!-- Header Section End -->

        <div class="rectangle-nav"></div>

        <router-view :key="$route.path"></router-view>
        <vue-progress-bar></vue-progress-bar>



        <!-- Footer Section Begin -->
        <footer class="footer">
            <div class="container h-100">
                <div class="row justify-content-between h-100">
                    <div class="col-lg-3 col-md-5 col-sm-12">
                        <div class="footer__about">
                            <div class="footer__logo">
                                <a href="#"><img src="{{ asset('FrontEnd') }}/images/Logo.png" alt=""></a>
                            </div>
                            <p>Copyright
                                <script type="application/javascript">
                                    document.write(new Date().getFullYear());
                                </script>
                                © All about my dolls All rights reserved</p>
                            <p class="mophx">Developed by <a href="http://mophx.com" target="_black">Mophx</a></p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-7 col-md-7 col-sm-12 links">
                        <div class="footer__widget">
                            {{-- <div>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" id="Social_Media_Small_Dark_Pinterest" data-name="Social Media / Small / Dark / Pinterest" width="19.858" height="19.858" viewBox="0 0 19.858 19.858">
                                    <circle id="Oval" cx="9.929" cy="9.929" r="9.929" fill="#0cf"/>
                                    <path id="Shape" d="M5.6,8.943a3.358,3.358,0,0,1-1.655-.788c-.324,1.7-.719,3.325-1.89,4.175C1.691,9.765,2.584,7.838,3,5.792,2.291,4.6,3.083,2.209,4.573,2.8c1.834.725-1.588,4.422.709,4.884,2.4.482,3.378-4.162,1.89-5.672C5.024-.17.917,1.961,1.422,5.083c.123.763.912.995.315,2.048C.362,6.827-.048,5.742,0,4.3A4.628,4.628,0,0,1,4.18.041C6.77-.248,9.2.993,9.537,3.429,9.914,6.179,8.367,9.157,5.6,8.943Z" transform="translate(5.133 4.352)" fill="#1b252c"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" id="Social_Media_Small_Dark_Instagram" data-name="Social Media / Small / Dark / Instagram" width="19.946" height="19.946" viewBox="0 0 19.946 19.946">
                                    <path id="Shape" d="M7.666,9.387H1.721A1.723,1.723,0,0,1,0,7.666V1.721A1.723,1.723,0,0,1,1.721,0H7.666A1.723,1.723,0,0,1,9.387,1.721V7.666A1.723,1.723,0,0,1,7.666,9.387ZM4.694,1.6a3.09,3.09,0,1,0,3.09,3.091A3.094,3.094,0,0,0,4.694,1.6ZM7.883.78a.731.731,0,1,0,.731.731A.732.732,0,0,0,7.883.78Z" transform="translate(5.28 5.307)" fill="#0cf"/>
                                    <path id="Shape-2" data-name="Shape" d="M1.784,0A1.784,1.784,0,1,0,3.569,1.784,1.787,1.787,0,0,0,1.784,0Z" transform="translate(8.189 8.216)" fill="#0cf"/>
                                    <path id="Shape-3" data-name="Shape" d="M9.973,19.946a9.973,9.973,0,1,1,9.973-9.973A9.984,9.984,0,0,1,9.973,19.946ZM7,4A3.03,3.03,0,0,0,3.974,7.027v5.945A3.03,3.03,0,0,0,7,16h5.945a3.03,3.03,0,0,0,3.027-3.027V7.027A3.03,3.03,0,0,0,12.946,4Z" fill="#0cf"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" id="Social_Media_Small_Dark_Twitter" data-name="Social Media / Small / Dark / Twitter" width="19.858" height="19.858" viewBox="0 0 19.858 19.858">
                                    <circle id="Oval" cx="9.929" cy="9.929" r="9.929" fill="#0cf"/>
                                    <path id="Shape" d="M11.568,1.113a4.735,4.735,0,0,1-1.363.373A2.38,2.38,0,0,0,11.248.173,4.751,4.751,0,0,1,9.741.749,2.375,2.375,0,0,0,5.7,2.914,6.737,6.737,0,0,1,.805.434,2.376,2.376,0,0,0,1.539,3.6a2.357,2.357,0,0,1-1.075-.3c0,.01,0,.02,0,.03a2.375,2.375,0,0,0,1.9,2.327A2.382,2.382,0,0,1,1.3,5.7,2.376,2.376,0,0,0,3.514,7.352,4.762,4.762,0,0,1,.566,8.368,4.779,4.779,0,0,1,0,8.335,6.713,6.713,0,0,0,3.638,9.4,6.707,6.707,0,0,0,10.39,2.648c0-.1,0-.205-.007-.307a4.813,4.813,0,0,0,1.184-1.228Z" transform="translate(5 6)" fill="#1b252c"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" id="Social_Media_Small_Dark_Facebook" data-name="Social Media / Small / Dark / Facebook" width="19.858" height="19.858" viewBox="0 0 19.858 19.858">
                                    <circle id="Oval" cx="9.929" cy="9.929" r="9.929" fill="#0cf"/>
                                    <path id="Shape" d="M5.733,6.466H3.961v6.491H1.277V6.466H0V4.185H1.277V2.708A2.517,2.517,0,0,1,3.985,0L5.973.008V2.222H4.53a.546.546,0,0,0-.569.622V4.187H5.967Z" transform="translate(6.692 3.852)" fill="#1b252c"/>
                                </svg>
                            </a>
                        </div> --}}
                            <ul>
                                <li class="active">
                                    <router-link to="/">Home</router-link>
                                </li>
                                <li>
                                    <router-link to="/subscriptions">Subscriptions</router-link>
                                </li>
                                {{-- <li><a href="#">Privacy</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Contact</a></li> --}}
                            </ul>
                        </div>
                        <svg class="person-footer" xmlns="http://www.w3.org/2000/svg" width="158.487" height="223.923"
                            viewBox="0 0 158.487 223.923">
                            <g id="Group_52" data-name="Group 52" transform="translate(-2197.308 -385.666)">
                                <path id="Path_80" data-name="Path 80"
                                    d="M2431.1,512.824a3.922,3.922,0,1,1-7.845,0V486.269h-2.577v26.555a6.5,6.5,0,1,0,13,0v-1.286H2431.1v1.286Z"
                                    transform="translate(-106.599 -48.01)" fill="#f1b320" fill-rule="evenodd" />
                                <path id="Path_81" data-name="Path 81"
                                    d="M2370.9,468.2v18.193a11.11,11.11,0,0,0,22.221,0v-9.724h-2.576v9.724a8.534,8.534,0,1,1-17.068,0V468.2Z"
                                    transform="translate(-82.84 -39.387)" fill="#fcd3c1" fill-rule="evenodd" />
                                <path id="Path_82" data-name="Path 82"
                                    d="M2443.246,457.528l26.611-57.64a8.107,8.107,0,0,0-3.939-10.7L2463.366,388l1.081-2.336,2.553,1.185a10.689,10.689,0,0,1,5.192,14.121l-26.609,57.638-2.336-1.081Z"
                                    transform="translate(-117.368)" fill="#ffe0e0" fill-rule="evenodd" />
                                <path id="Path_83" data-name="Path 83"
                                    d="M2382.417,461.682c-.114,0-.226,0-.342,0a24.984,24.984,0,0,1-22.542-14.2l-.555-1.164-2.323,1.114.555,1.163a27.562,27.562,0,0,0,24.865,15.668c.572,0,1.142-.02,1.712-.055l1.207-.074v-8.157a19.9,19.9,0,0,0-39.8,0v6.347a4.65,4.65,0,0,1-9.3,0v-1.287h-2.575v1.287a7.226,7.226,0,1,0,14.452,0v-6.347a17.321,17.321,0,0,1,34.643,0v5.706Z"
                                    transform="translate(-64.91 -24.059)" fill="#ffcb05" fill-rule="evenodd" />
                                <path id="Path_84" data-name="Path 84"
                                    d="M2311.615,575.148H2300.51v-8.065a31.474,31.474,0,0,1,31.4-31.4h8.894v-2.577h-8.894a34.054,34.054,0,0,0-33.97,33.975v10.639h16.252V567.083a17.8,17.8,0,0,1,16.45-17.671l1.287-.092-.186-2.569-1.285.094a20.375,20.375,0,0,0-18.838,20.239v8.065Z"
                                    transform="translate(-48.022 -70.363)" fill="#bf00ff" fill-rule="evenodd" />
                                <path id="Path_85" data-name="Path 85"
                                    d="M2375.075,560.461a7.294,7.294,0,1,1-14.589,0v-1.286l-2.573.3v.985a54.365,54.365,0,0,1,27.028,9.868,9.871,9.871,0,0,0,9.87-9.868v-1.286h-2.578v1.286a7.291,7.291,0,1,1-14.583,0v-1.286h-2.576v1.286Z"
                                    transform="translate(-76.645 -82.802)" fill="#bf00ff" fill-rule="evenodd" />
                                <path id="Path_86" data-name="Path 86"
                                    d="M2282.09,516.668a17.783,17.783,0,0,0-17.736-17.735h-59.092a5.393,5.393,0,0,1-5.375-5.373v-2.38h-2.578v2.38a7.972,7.972,0,0,0,7.954,7.95h59.092a15.2,15.2,0,0,1,15.16,15.158v1.288h2.576v-1.288Z"
                                    transform="translate(0 -50.354)" fill="#ffe0e0" fill-rule="evenodd" />
                                <path id="Path_87" data-name="Path 87"
                                    d="M2396.443,787.563c4.458,0,6.423.294,9.393,3.414a7.559,7.559,0,0,1,2.17,5.773h-27.788v-9.144h10.848c1.121,0,2.174-.013,3.1-.024.808-.01,1.564-.019,2.275-.019m0-3.137c-1.555,0-3.318.043-5.377.043h-13.984v15.417h33.458a10.722,10.722,0,0,0-2.431-11.072c-3.738-3.927-6.606-4.388-11.665-4.388Z"
                                    transform="translate(-85.792 -190.298)" fill="#0cf" />
                                <path id="Path_88" data-name="Path 88"
                                    d="M2223.932,748.47c1.131,4.312,1.346,6.287-.918,9.952a7.558,7.558,0,0,1-5.033,3.565l-7.054-26.878,8.844-2.321,2.753,10.493c.285,1.084.565,2.1.812,2.995.214.779.415,1.507.6,2.2m3.034-.8c-.395-1.5-.884-3.2-1.407-5.19l-3.55-13.526-14.912,3.914,8.492,32.362a10.722,10.722,0,0,0,10.093-5.163c2.849-4.612,2.568-7.5,1.283-12.4Z"
                                    transform="translate(-4.671 -163.827)" fill="#0cf" />
                                <path id="Path_89" data-name="Path 89"
                                    d="M2310.708,703.507h2.714L2286.708,623h-15.873l8.7,32.477a11.558,11.558,0,0,1-8.132,14.087l-30.5,7.947.667,2.488,30.492-7.95a14.129,14.129,0,0,0,9.957-17.239l-7.824-29.2h10.664Z"
                                    transform="translate(-20.808 -113.262)" fill="#f58220" fill-rule="evenodd" />
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->

        <!-- Search Begin -->
        <div class="search-model">
            <div class="h-100 d-flex align-items-center justify-content-center">
                <div class="search-close-switch">+</div>
                <form class="search-model-form">
                    <!-- <input type="text" id="search-input" placeholder="Search here....."> -->
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search here.....">
                        <button class="input-group-text icon">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Search End -->

        <!-- Js Plugins -->
        <!-- <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap5.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/main.js"></script>
    <script src="js/custom.js"></script> -->
    </div>
    <script src="{{ asset('FrontEnd') }}/js/jquery-3.3.1.min.js" defer></script>
    {{-- <script src="{{ asset('FrontEnd') }}/js/bootstrap5.js" defer></script> --}}
    <script src="{{ asset('FrontEnd') }}/js/bootstrap5.bundle.min.js" defer></script>
    <script src="{{ asset('FrontEnd') }}/js/jquery.nice-select.min.js" defer></script>
    <script src="{{ asset('FrontEnd') }}/js/swiper.js" defer></script>
    <script src="{{ asset('FrontEnd') }}/js/jquery.nicescroll.min.js" defer></script>
    <script src="{{ asset('FrontEnd') }}/js/jquery.magnific-popup.min.js" defer></script>
    <script src="{{ asset('FrontEnd') }}/js/jquery.countdown.min.js" defer></script>
    <script src="{{ asset('FrontEnd') }}/js/jquery.slicknav.js" defer></script>
    <script src="{{ asset('FrontEnd') }}/js/mixitup.min.js" defer></script>
    <script src="{{ asset('FrontEnd') }}/js/owl.carousel.min.js" defer></script>
    <script src="{{ asset('FrontEnd') }}/js/main.js" defer></script>
    <script src="{{ asset('FrontEnd') }}/js/custom.js" defer></script>
    <script src="{{ asset('FrontEnd') }}/js/test.js" defer></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js" defer></script>
</body>

</html>
