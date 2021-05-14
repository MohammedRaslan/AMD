<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
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
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"> -->
    <!-- <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css"> -->
    <link rel="stylesheet" href="{{ asset('FrontEnd') }}/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('FrontEnd') }}/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('FrontEnd') }}/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('FrontEnd') }}/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('FrontEnd') }}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('FrontEnd') }}/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('FrontEnd') }}/css/style.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('FrontEnd') }}/css/swiper.css">
    <link rel="stylesheet" href="{{ asset('FrontEnd') }}/css/app.css" type="text/css">
  
  
</head>

<body>
    <div id="app">

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
        </div>
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch"><img src="{{ asset('FrontEnd') }}/img/icon/search.png" alt=""></a>
            <a href="#"><img src="img/icon/heart.png" alt=""></a>
            <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
            <div class="price">$0.00</div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p>Free shipping, 30-day return or refund guarantee.</p>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container h-100">
            <div class="row h-100 d-flex align-items-center">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <router-link to="/"><img src="{{ asset('FrontEnd') }}/images/Logo.png" alt></router-link>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <nav class="header__menu mobile-menu">
                        <ul class="text-start d-lg-flex d-xl-flex d-md-flex justify-content-between">
                            <li class="menu-1 cat mr-xl-5 mr-lg-5 mr-md-2 d-lg-flex d-xl-flex d-md-flex align-items-center">                                
                                <div class="dropdown drop-1">
                                    <button class="btn btn-outline-secondary dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropsdown" type="button" aria-expanded="false">
                                        <span>Marketplace</span> 
                                         <svg id="Icon_down_solid" xmlns="http://www.w3.org/2000/svg" width="20.833" height="20.833" viewBox="0 0 20.833 20.833">
                                            <path id="Shape" d="M10.417,20.833A10.417,10.417,0,1,1,20.833,10.417,10.428,10.428,0,0,1,10.417,20.833ZM5.208,7.291A1.042,1.042,0,0,0,4.472,9.07L9.68,14.278a1.042,1.042,0,0,0,1.474,0L16.361,9.07A1.042,1.042,0,1,0,14.888,7.6l-4.472,4.472L5.945,7.6A1.035,1.035,0,0,0,5.208,7.291Z" fill="#fff"></path>
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton1">
                                        <li><router-link class="dropdown-item" to="/example">Category 1</router-link></li>
                                        <li><a class="dropdown-item" href="dolls.html">Category 2</a></li>
                                        <li><a class="dropdown-item" href="dolls.html">Category 3</a></li>
                                        <li><a class="dropdown-item" href="dolls.html">Category 4</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="search-item search-switch">
                                <!-- <input type="search" name="search" placeholder="Search here" id="search"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="27" viewBox="0 0 19.944 19.945">
                                    <g id="Icon_20_Grey_Search" data-name="Icon / 20 / Grey / Search" transform="translate(0 0)">
                                        <path id="Shape" d="M18.279,19.945a1.656,1.656,0,0,1-1.179-.488l-4.334-4.334a.389.389,0,0,1-.034-.041c-.009-.011-.017-.022-.026-.033a8.2,8.2,0,1,1,2.344-2.344l.032.026a.4.4,0,0,1,.042.035L19.457,17.1a1.667,1.667,0,0,1-1.179,2.845ZM8.2,2.842A5.358,5.358,0,1,0,13.558,8.2,5.364,5.364,0,0,0,8.2,2.842Z" fill="#fff"></path>
                                    </g>
                                </svg>
                                <!-- <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a> -->
                                <!-- <i class="fas fa-search"></i> -->
                            </li>
                            <li class="d-xl-flex d-lg-flex d-md-flex icons">
                               <a href="#">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34">
                                    <g id="Group_36" data-name="Group 36" transform="translate(-742 -317)">
                                        <g id="Group_35" data-name="Group 35" transform="translate(42.573 14.174)">
                                        <path id="Path" d="M3.623,11.52A1.464,1.464,0,0,0,5.14,13.139h.744a.831.831,0,0,0,.83-.779,3.55,3.55,0,0,1,1.07-2.184l1-.983a8.468,8.468,0,0,0,1.636-2.132,4.678,4.678,0,0,0,.467-2.056,4.722,4.722,0,0,0-1.439-3.69A5.782,5.782,0,0,0,5.4,0,5.8,5.8,0,0,0,1.314,1.379,4.5,4.5,0,0,0,.057,3.407,1.478,1.478,0,0,0,1.626,5.2,3.083,3.083,0,0,0,3.69,3.865c.082-.09.163-.179.244-.265A1.918,1.918,0,0,1,5.4,3.013q1.919,0,1.919,2.158a2.731,2.731,0,0,1-.369,1.366A8.206,8.206,0,0,1,5.46,8.21a5.8,5.8,0,0,0-1.525,2.081A5.6,5.6,0,0,0,3.623,11.52Z" transform="translate(710.985 311.25)" fill="#fecc2f"></path>
                                        <path id="Path-2" data-name="Path" d="M.554.562A1.894,1.894,0,0,0,0,1.966,1.9,1.9,0,0,0,.541,3.358a1.972,1.972,0,0,0,1.452.549,1.93,1.93,0,0,0,1.439-.549,1.878,1.878,0,0,0,.554-1.392A1.872,1.872,0,0,0,3.42.562,1.916,1.916,0,0,0,1.993,0,1.957,1.957,0,0,0,.554.562Z" transform="translate(714.144 326.343)" fill="#fecc2f"></path>
                                        </g>
                                        <g id="Ellipse_49" data-name="Ellipse 49" transform="translate(742 317)" fill="none" stroke="#fecc2f" stroke-width="1">
                                        <circle cx="17" cy="17" r="17" stroke="none"></circle>
                                        <circle cx="17" cy="17" r="16.5" fill="none"></circle>
                                        </g>
                                    </g>
                                    </svg>
                               </a>   
                               <a href="#">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34">
                                    <g id="Group_37" data-name="Group 37" transform="translate(-784 -317)">
                                        <g id="Icon_love_solid" transform="translate(790.583 326.125)">
                                        <path id="Path" d="M1.6,9.7A5.729,5.729,0,0,1,5.729,0C7.667,0,9.38,2.134,10.417,3.606,11.454,2.134,13.166,0,15.1,0a5.729,5.729,0,0,1,3.985,9.845l-7.926,8.139a1.042,1.042,0,0,1-1.492,0Z" fill="#fd1266"></path>
                                        </g>
                                        <g id="Ellipse_48" data-name="Ellipse 48" transform="translate(784 317)" fill="none" stroke="#fd1266" stroke-width="1">
                                        <circle cx="17" cy="17" r="17" stroke="none"></circle>
                                        <circle cx="17" cy="17" r="16.5" fill="none"></circle>
                                        </g>
                                    </g>
                                    </svg>
                               </a>  
                               <a class="position-relative" href="#">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34">
                                    <g id="Group_38" data-name="Group 38" transform="translate(-826 -317)">
                                        <g id="Group_34" data-name="Group 34" transform="translate(-1)">
                                        <g id="Icon_20_Grey_Shopping_Cart" data-name="Icon / 20 / Grey / Shopping Cart" transform="translate(834.019 323.998)">
                                            <path id="Shape" d="M2.252,4.742H4L1.408.369A.759.759,0,0,0,.375.1.731.731,0,0,0,.1,1.118Z" transform="translate(11.776 1.009)" fill="#7ac943"></path>
                                            <path id="Shape-2" data-name="Shape" d="M3.9,1.116A.735.735,0,0,0,3.627.1.762.762,0,0,0,2.594.367L0,4.744H1.75Z" transform="translate(4.193 1.011)" fill="#7ac943"></path>
                                            <path id="Shape-3" data-name="Shape" d="M15.156,11.9H4.549A1.74,1.74,0,0,1,2.922,10.51L1.685,3.918h-.4A1.273,1.273,0,0,1,0,2.658V1.26A1.273,1.273,0,0,1,1.283,0H18.676a1.278,1.278,0,0,1,1.287,1.256v1.4a1.273,1.273,0,0,1-1.282,1.26h-.652l-1.246,6.6A1.741,1.741,0,0,1,15.156,11.9Zm-1.8-7.172a.72.72,0,0,0-.725.713V9.431a.726.726,0,0,0,1.451,0V5.444A.72.72,0,0,0,13.352,4.731Zm-2.327,0a.738.738,0,0,0-.725.713V9.431a.726.726,0,0,0,1.451,0V5.444A.72.72,0,0,0,11.025,4.731Zm-2.341,0a.72.72,0,0,0-.725.713V9.431a.726.726,0,0,0,1.451,0V5.444A.738.738,0,0,0,8.684,4.731Zm-2.327,0a.72.72,0,0,0-.725.713V9.431a.726.726,0,0,0,1.451,0V5.444A.72.72,0,0,0,6.357,4.731Z" transform="translate(0 7.092)" fill="#7ac943"></path>
                                        </g>
                                        <g id="Ellipse_46" data-name="Ellipse 46" transform="translate(827 317)" fill="none" stroke="#7ac943" stroke-width="1">
                                            <circle cx="17" cy="17" r="17" stroke="none"></circle>
                                            <circle cx="17" cy="17" r="16.5" fill="none"></circle>
                                        </g>
                                        </g>
                                    </g>
                                    </svg>
                                    <span class="quantity-cart">2</span>
                               </a>   
                               <a href="#">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34">
                                    <g id="Group_30" data-name="Group 30" transform="translate(-844 -319)">
                                        <g id="Icon_20_Grey_Notification" data-name="Icon / 20 / Grey / Notification" transform="translate(851.223 326)">
                                        <path id="Shape" d="M17.437,16.869l-1.5-2.385a6.832,6.832,0,0,1-1.06-3.645V8.75A5.886,5.886,0,0,0,10.5,3.162v-1.5a1.752,1.752,0,0,0-3.5,0v1.5A5.886,5.886,0,0,0,2.624,8.75v2.089a6.836,6.836,0,0,1-1.06,3.644l-1.5,2.385a.4.4,0,0,0-.005.42.44.44,0,0,0,.38.212H17.062a.443.443,0,0,0,.381-.211A.4.4,0,0,0,17.437,16.869Z" transform="translate(1.028)" fill="#9f72fc"></path>
                                        <path id="Shape-2" data-name="Shape" d="M0,0A3.072,3.072,0,0,0,2.755,1.667,3.072,3.072,0,0,0,5.511,0H0Z" transform="translate(7.022 18.333)" fill="#9f72fc"></path>
                                        </g>
                                        <g id="Ellipse_46" data-name="Ellipse 46" transform="translate(844 319)" fill="none" stroke="#9f72fc" stroke-width="1">
                                        <circle cx="17" cy="17" r="17" stroke="none"></circle>
                                        <circle cx="17" cy="17" r="16.5" fill="none"></circle>
                                        </g>
                                    </g>
                                    </svg>
                               </a>                      
                            </li>
                             <li class="menu-1 menu-user d-lg-flex d-md-flex d-xl-flex align-items-center">
                                 <!-- <a href="#"> -->
                                <div class="dropdown drop-user1">
                                    <button class="btn btn-outline-secondary dropdown-toggle" id="dropdownMenuButton22" data-bs-toggle="dropsdown" type="button" aria-expanded="false">
                                        <span>User Name</span> 
                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" id="Icon_down_solid" width="20.833" height="20.833" viewBox="0 0 20.833 20.833">
                                            <path id="Shape" d="M10.417,20.833A10.417,10.417,0,1,1,20.833,10.417,10.428,10.428,0,0,1,10.417,20.833ZM5.208,7.291A1.042,1.042,0,0,0,4.472,9.07L9.68,14.278a1.042,1.042,0,0,0,1.474,0L16.361,9.07A1.042,1.042,0,1,0,14.888,7.6l-4.472,4.472L5.945,7.6A1.035,1.035,0,0,0,5.208,7.291Z" fill="#fff"/>
                                        </svg> -->
                                        <svg id="Icon_down" xmlns="http://www.w3.org/2000/svg" width="10.286" height="6" viewBox="0 0 10.286 6">
                                            <path id="Path" d="M.251,1.463,4.537,5.749a.857.857,0,0,0,1.212,0l4.286-4.286A.857.857,0,0,0,8.823.251l-3.68,3.68L1.463.251A.857.857,0,1,0,.251,1.463Z" fill="#23ccfd"></path>
                                        </svg>

                                        <svg class="user-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="52" height="100">
                                            <defs>
                                                <filter id="Shape" x="0" y="0" width="100" height="100" filterUnits="userSpaceOnUse">
                                                <feOffset dy="10" input="SourceAlpha">
                                                <feGaussianBlur stdDeviation="10" result="blur">
                                                <feFlood flood-opacity="0.161">
                                                <feComposite operator="in" in2="blur">
                                                <feComposite in="SourceGraphic">
                                                </feComposite></feComposite></feFlood></feGaussianBlur></feOffset></filter>
                                            </defs>
                                            <g id="Icon_user_solid">
                                                <g id="Icon_user_solid-2" data-name="Icon_user_solid" transform="translate(3.333 3.333)">
                                                <g>
                                                    <path class="user-acc" id="Shape-2" data-name="Shape" d="M20,40A20,20,0,1,1,40,20,20.023,20.023,0,0,1,20,40Zm0-18a20.237,20.237,0,0,0-6.563,1.313C11.41,24.093,8.82,25.54,8,28c1.477,4.428,7.388,6,12,6s10.523-1.571,12-6c-.821-2.461-3.41-3.908-5.438-4.688A20.237,20.237,0,0,0,20,22ZM20,6a6,6,0,1,0,6,6A6.007,6.007,0,0,0,20,6Z" transform="translate(30 20)" fill="#23ccfd"></path>
                                                </g>
                                                </g>
                                            </g>
                                        </svg>

                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" id="m-user" aria-labelledby="dropdownMenuButton22">
                                        <li><a class="dropdown-item" href="selling.html">Selling</a></li>
                                        <li><a class="dropdown-item" href="buying.html">Buying</a></li>
                                        <li><a class="dropdown-item" href="subscriptions.html">Subscriptions</a></li>
                                        <li><a class="dropdown-item" href="account.html">My Accout</a></li>
                                    </ul>
                                </div>
                                 
                               
                               
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->

    <div class="rectangle-nav"></div>

        <router-view></router-view>
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
                        <div>
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
                        </div>
                        <ul>
                            <li class="active"><a href="index.html">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                    <svg class="person-footer" xmlns="http://www.w3.org/2000/svg" width="158.487" height="223.923" viewBox="0 0 158.487 223.923">
                        <g id="Group_52" data-name="Group 52" transform="translate(-2197.308 -385.666)">
                            <path id="Path_80" data-name="Path 80" d="M2431.1,512.824a3.922,3.922,0,1,1-7.845,0V486.269h-2.577v26.555a6.5,6.5,0,1,0,13,0v-1.286H2431.1v1.286Z" transform="translate(-106.599 -48.01)" fill="#f1b320" fill-rule="evenodd"/>
                            <path id="Path_81" data-name="Path 81" d="M2370.9,468.2v18.193a11.11,11.11,0,0,0,22.221,0v-9.724h-2.576v9.724a8.534,8.534,0,1,1-17.068,0V468.2Z" transform="translate(-82.84 -39.387)" fill="#fcd3c1" fill-rule="evenodd"/>
                            <path id="Path_82" data-name="Path 82" d="M2443.246,457.528l26.611-57.64a8.107,8.107,0,0,0-3.939-10.7L2463.366,388l1.081-2.336,2.553,1.185a10.689,10.689,0,0,1,5.192,14.121l-26.609,57.638-2.336-1.081Z" transform="translate(-117.368)" fill="#ffe0e0" fill-rule="evenodd"/>
                            <path id="Path_83" data-name="Path 83" d="M2382.417,461.682c-.114,0-.226,0-.342,0a24.984,24.984,0,0,1-22.542-14.2l-.555-1.164-2.323,1.114.555,1.163a27.562,27.562,0,0,0,24.865,15.668c.572,0,1.142-.02,1.712-.055l1.207-.074v-8.157a19.9,19.9,0,0,0-39.8,0v6.347a4.65,4.65,0,0,1-9.3,0v-1.287h-2.575v1.287a7.226,7.226,0,1,0,14.452,0v-6.347a17.321,17.321,0,0,1,34.643,0v5.706Z" transform="translate(-64.91 -24.059)" fill="#ffcb05" fill-rule="evenodd"/>
                            <path id="Path_84" data-name="Path 84" d="M2311.615,575.148H2300.51v-8.065a31.474,31.474,0,0,1,31.4-31.4h8.894v-2.577h-8.894a34.054,34.054,0,0,0-33.97,33.975v10.639h16.252V567.083a17.8,17.8,0,0,1,16.45-17.671l1.287-.092-.186-2.569-1.285.094a20.375,20.375,0,0,0-18.838,20.239v8.065Z" transform="translate(-48.022 -70.363)" fill="#bf00ff" fill-rule="evenodd"/>
                            <path id="Path_85" data-name="Path 85" d="M2375.075,560.461a7.294,7.294,0,1,1-14.589,0v-1.286l-2.573.3v.985a54.365,54.365,0,0,1,27.028,9.868,9.871,9.871,0,0,0,9.87-9.868v-1.286h-2.578v1.286a7.291,7.291,0,1,1-14.583,0v-1.286h-2.576v1.286Z" transform="translate(-76.645 -82.802)" fill="#bf00ff" fill-rule="evenodd"/>
                            <path id="Path_86" data-name="Path 86" d="M2282.09,516.668a17.783,17.783,0,0,0-17.736-17.735h-59.092a5.393,5.393,0,0,1-5.375-5.373v-2.38h-2.578v2.38a7.972,7.972,0,0,0,7.954,7.95h59.092a15.2,15.2,0,0,1,15.16,15.158v1.288h2.576v-1.288Z" transform="translate(0 -50.354)" fill="#ffe0e0" fill-rule="evenodd"/>
                            <path id="Path_87" data-name="Path 87" d="M2396.443,787.563c4.458,0,6.423.294,9.393,3.414a7.559,7.559,0,0,1,2.17,5.773h-27.788v-9.144h10.848c1.121,0,2.174-.013,3.1-.024.808-.01,1.564-.019,2.275-.019m0-3.137c-1.555,0-3.318.043-5.377.043h-13.984v15.417h33.458a10.722,10.722,0,0,0-2.431-11.072c-3.738-3.927-6.606-4.388-11.665-4.388Z" transform="translate(-85.792 -190.298)" fill="#0cf"/>
                            <path id="Path_88" data-name="Path 88" d="M2223.932,748.47c1.131,4.312,1.346,6.287-.918,9.952a7.558,7.558,0,0,1-5.033,3.565l-7.054-26.878,8.844-2.321,2.753,10.493c.285,1.084.565,2.1.812,2.995.214.779.415,1.507.6,2.2m3.034-.8c-.395-1.5-.884-3.2-1.407-5.19l-3.55-13.526-14.912,3.914,8.492,32.362a10.722,10.722,0,0,0,10.093-5.163c2.849-4.612,2.568-7.5,1.283-12.4Z" transform="translate(-4.671 -163.827)" fill="#0cf"/>
                            <path id="Path_89" data-name="Path 89" d="M2310.708,703.507h2.714L2286.708,623h-15.873l8.7,32.477a11.558,11.558,0,0,1-8.132,14.087l-30.5,7.947.667,2.488,30.492-7.95a14.129,14.129,0,0,0,9.957-17.239l-7.824-29.2h10.664Z" transform="translate(-20.808 -113.262)" fill="#f58220" fill-rule="evenodd"/>
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
    <script src="{{ asset('FrontEnd') }}/js/bootstrap5.js" defer></script>
    <script src="{{ asset('FrontEnd') }}/js/bootstrap.bundle.js" defer></script>
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

</body>

</html>