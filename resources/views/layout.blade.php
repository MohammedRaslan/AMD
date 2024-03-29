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
    <link rel="stylesheet" href="{{ asset('FrontEnd') }}/css/new-style.css" type="text/css">
    <link rel="stylesheet" href=" {{ asset('Admin/assets') }}/assets/plugins/dropify/css/dropify.min.css">
    <link type="text/css" href="{{ asset('FrontEnd') }}/css/owlcarousel/owl.carousel.min.css" rel="stylesheet" >
    <link type="text/css" href="{{ asset('FrontEnd') }}/css/owlcarousel/owl.theme.default.min.css" rel="stylesheet">

</head>
<style>
    /* .nice-select {
        display: none;
    } */

    #preloader {
        display: block !important;
    }
    main{
        min-height: 400px;
    }
</style>

<body>
    {{-- @if(Request::is('subscriptions') ) --}}

    <div id="app">
        <!-- Page Preloder -->

        <div id="preloder">
            <div class="loader" style="display: block !imortant"></div>
        </div>
        <!-- Offcanvas Menu Begin -->
        <div class="offcanvas-menu-overlay"></div>
        <div class="offcanvas-menu-wrapper">
            <div class="offcanvas__option">
                <div class="close-menu d-inline-block">
                    <i class="fas fa-times"></i>
                </div>
            </div>
            {{-- <div class="offcanvas__nav__option">
                <a href="#" class="search-switch">
                    <img src="{{ asset('FrontEnd') }}/img/icon/search.png" alt="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="27" viewBox="0 0 19.944 19.945">
                        <g id="Icon_20_Grey_Search" data-name="Icon / 20 / Grey / Search" transform="translate(0 0)">
                            <path id="Shape"
                                d="M18.279,19.945a1.656,1.656,0,0,1-1.179-.488l-4.334-4.334a.389.389,0,0,1-.034-.041c-.009-.011-.017-.022-.026-.033a8.2,8.2,0,1,1,2.344-2.344l.032.026a.4.4,0,0,1,.042.035L19.457,17.1a1.667,1.667,0,0,1-1.179,2.845ZM8.2,2.842A5.358,5.358,0,1,0,13.558,8.2,5.364,5.364,0,0,0,8.2,2.842Z"
                                fill="#fff"></path>
                        </g>
                    </svg>
                </a>
                <Adminicon></Adminicon>
            </div> --}}
            <div id="mobile-menu-wrap">
               <Mobile></Mobile>
            </div>
        </div>
        <!-- Offcanvas Menu End -->

        <!-- Header Section Begin -->
        <Navbar></Navbar>
        <!-- Header Section End -->

        <div class="rectangle-nav"></div>

        <main>
            <router-view :key="$route.path"></router-view>
            <vue-progress-bar></vue-progress-bar>
        </main>



        <!-- Footer Section Begin -->
        <footer class="footer">
            <div class="container h-100">
                <div class="row justify-content-between h-100">
                    <div class="col-lg-3 col-md-5 col-sm-12">
                        <div class="footer__about">
                            <div class="footer__logo">
                                <svg xmlns="http://www.w3.org/2000/svg" width="183.952" height="95" viewBox="0 0 183.952 95">
                                    <g id="Group_128" data-name="Group 128" transform="translate(-2084.04 -859.696)">
                                        <g id="Group_132" data-name="Group 132" transform="translate(2084.04 859.696)">
                                            <path id="Path_284" data-name="Path 284" d="M2653.295,1163.768v3.089a3.158,3.158,0,0,0,.333,1.414,3.192,3.192,0,0,0,2.853,1.772h2.058a.374.374,0,1,1,0,.748h-2.058a3.938,3.938,0,0,1-3.575-2.291,3.857,3.857,0,0,1-.363-1.642v-3.089Z" transform="translate(-2581.007 -1125.381)" fill="#ffe0e0"></path>
                                            <g id="Group_128-2" data-name="Group 128" transform="translate(2.396)">
                                                <path id="Path_285" data-name="Path 285" d="M2426.558,999.485l1.565-3.89.689.294-1.666,4.141-1.383,3.437a2.019,2.019,0,0,0,.2,1.854,1.668,1.668,0,0,0,1.4.752h1.236a.376.376,0,0,1,.372.376v6.592a4.134,4.134,0,0,0,4.132,4.128h5.041a.376.376,0,0,1,.376.376v5.858a.376.376,0,1,1-.752,0v-5.482H2433.1a4.883,4.883,0,0,1-4.88-4.881v-6.216h-.86a2.407,2.407,0,0,1-2.023-1.085,2.768,2.768,0,0,1-.272-2.555Z" transform="translate(-2384.381 -978.495)" fill="#ffe0e0"></path>
                                                <path id="Path_286" data-name="Path 286" d="M2417.28,870.071a4.738,4.738,0,0,0,.57,2.222,9.314,9.314,0,0,0,4.007,3.6l.674.329A28,28,0,0,0,2434.2,878.5a34.427,34.427,0,0,0,4.466-.285c-.013.3-.017.609-.017.921a27,27,0,0,0,.277,3.912,16.467,16.467,0,0,0,3.207,8.17h0a40.579,40.579,0,0,0,6.017,5.566h.912c.071-.066.142-.131.211-.2.528-.51,1.033-1.046,1.509-1.6q.662-.778,1.245-1.621A21.411,21.411,0,0,0,2419.1,866.2c-.121.121-.238.242-.351.367a5.762,5.762,0,0,0-1.313,2.317,3.891,3.891,0,0,0-.109.5c-.022.143-.039.29-.047.437C2417.284,869.907,2417.28,869.989,2417.28,870.071Zm.864,0a3.4,3.4,0,0,1,.052-.592,3.316,3.316,0,0,1,.116-.5,4.928,4.928,0,0,1,1.085-1.833c.108-.121.221-.238.333-.35a20.558,20.558,0,0,1,32.447,3.964,20.528,20.528,0,0,1-.29,21.255,20.719,20.719,0,0,1-1.712,2.347c-.389.463-1.579,1.663-1.583,1.666a29.623,29.623,0,0,1-6.134-5.791c-1.4-1.69-2.287-4.44-2.71-7.577a26.435,26.435,0,0,1-.234-3.523c0-.35.009-.7.022-1.046.009-.3.025-.6.052-.891-.29.048-.579.091-.877.13a32.152,32.152,0,0,1-4.509.307,27.362,27.362,0,0,1-11.347-2.218q-.35-.162-.675-.337a7.967,7.967,0,0,1-3.691-3.445A3.833,3.833,0,0,1,2418.145,870.071Z" transform="translate(-2377.744 -859.715)" fill="#7ac943"></path>
                                                <path id="Path_287" data-name="Path 287" d="M2131.35,903.647h2.386a2.071,2.071,0,0,0,2.064-2.064V876.36a16.057,16.057,0,1,0-32.114,0v25.223a2.071,2.071,0,0,0,2.064,2.064h2.386a.3.3,0,0,1,0,.606h-2.386a2.677,2.677,0,0,1-2.67-2.67q0-12.612,0-25.223a16.663,16.663,0,1,1,33.327,0v25.223a2.677,2.677,0,0,1-2.67,2.67h-2.386a.3.3,0,1,1,0-.606Z" transform="translate(-2103.08 -859.696)" fill="#f06" fill-rule="evenodd"></path>
                                                <path id="Path_288" data-name="Path 288" d="M2141.086,951.629a13.177,13.177,0,0,1-6.409-7.89.3.3,0,0,1,.3-.388c.187,0,.373.007.559.007a28.482,28.482,0,0,0,22.213-10.623.3.3,0,0,1,.488.022,13.147,13.147,0,0,1-4.613,18.8V967.7a.3.3,0,0,1-.606,0V951.381a.3.3,0,0,1,.161-.268,12.542,12.542,0,0,0,4.777-17.674,29.084,29.084,0,0,1-22.42,10.524h-.151a12.575,12.575,0,0,0,6.147,7.214.3.3,0,0,1,.164.269V967.7a.3.3,0,0,1-.606,0V951.629Z" transform="translate(-2130.689 -923.446)" fill="#ffe0e0" fill-rule="evenodd"></path>
                                            </g>
                                            <g id="Group_131" data-name="Group 131" transform="translate(0 47.591)">
                                                <g id="Group_129" data-name="Group 129">
                                                    <path id="Path_289" data-name="Path 289" d="M2132.349,1382.321a.3.3,0,0,1-.3-.3v-6.131l3.829-2.437a3.944,3.944,0,0,0,1.795-2.8l1.96-14.446c-4.036,2.358-8.436,2.22-12.764-.412a21.956,21.956,0,0,1-5.322-4.648,10.554,10.554,0,0,1-6.172,4.317,13.286,13.286,0,0,1-3.488.463l2,14.726a3.946,3.946,0,0,0,1.794,2.8l3.83,2.437v6.131a.3.3,0,1,1-.608,0v-5.8l-3.548-2.258a4.553,4.553,0,0,1-2.071-3.235l-2.1-15.454.374.027c.065,0,6.55.4,9.7-4.844l.234-.389.271.364a21.449,21.449,0,0,0,5.437,4.845c4.369,2.651,8.627,2.675,12.656.072l.555-.359-2.136,15.739a4.552,4.552,0,0,1-2.071,3.235l-3.548,2.258v5.8A.3.3,0,0,1,2132.349,1382.321Z" transform="translate(-2107.768 -1335.667)" fill="#ffe0e0"></path>
                                                    <path id="Path_290" data-name="Path 290" d="M2087.555,1265.736a1.73,1.73,0,0,1-1.708-1.473l-1.685-11.277a11.219,11.219,0,0,1,6.969-12.09l2.9-1.147.644-1.468a4.417,4.417,0,0,1,5.411-2.435l12.9,4.151a10.482,10.482,0,0,1,7.184,11.428l-1.642,11.906a1.737,1.737,0,0,1-1.031,1.353l-.964.413a.3.3,0,0,1-.24-.559l.964-.413a1.126,1.126,0,0,0,.668-.877l1.642-11.906a9.875,9.875,0,0,0-6.768-10.766l-12.9-4.151a3.81,3.81,0,0,0-4.668,2.1l-.745,1.7-3.133,1.239a10.61,10.61,0,0,0-6.59,11.434l1.685,11.277a1.123,1.123,0,0,0,1.209.95.3.3,0,1,1,.055.606C2087.66,1265.733,2087.608,1265.736,2087.555,1265.736Z" transform="translate(-2084.04 -1235.63)" fill="#0cf"></path>
                                                    <path id="mustache:2" d="M2.28,3.222a3.439,3.439,0,0,1-1.05-.17,1.649,1.649,0,0,1-.594-.334,1.8,1.8,0,0,1-.4-.51A1.979,1.979,0,0,1,.02,1,1.265,1.265,0,0,1,.354.292,1.028,1.028,0,0,1,1.1,0H1.16a1.226,1.226,0,0,1,.686.285,2.033,2.033,0,0,1,.29.269l-.07.069A1.807,1.807,0,0,0,1.159.26c-.374,0-.608.263-.7.781A1.24,1.24,0,0,0,.7,2.094a1.494,1.494,0,0,0,.693.436,2.756,2.756,0,0,0,.847.127,2.5,2.5,0,0,0,.709-.094A13.361,13.361,0,0,0,5.536,1.192,6.7,6.7,0,0,1,6.809.487,1.722,1.722,0,0,1,7.148.449c.459,0,.561.247.567.454a.536.536,0,0,1-.257.518,2.307,2.307,0,0,1-.672.219,4.275,4.275,0,0,0-.954.3l-.506.25h0c-.6.3-1.113.552-1.6.735A4.059,4.059,0,0,1,2.28,3.222Zm11.24-.006a6.813,6.813,0,0,1-2.984-1c-.176-.088-.358-.178-.551-.272a4.281,4.281,0,0,0-.954-.3,2.31,2.31,0,0,1-.672-.219A.536.536,0,0,1,8.1.9C8.106.7,8.209.449,8.667.449a1.724,1.724,0,0,1,.34.038,6.7,6.7,0,0,1,1.274.705,13.365,13.365,0,0,0,2.587,1.371,2.5,2.5,0,0,0,.709.094,2.759,2.759,0,0,0,.848-.127,1.494,1.494,0,0,0,.693-.436,1.239,1.239,0,0,0,.238-1.052c-.088-.518-.322-.781-.7-.781a1.825,1.825,0,0,0-.908.365l-.07-.069h0a2.071,2.071,0,0,1,.289-.268A1.28,1.28,0,0,1,14.658,0h.057a1.039,1.039,0,0,1,.763.3,1.3,1.3,0,0,1,.338.733,1.951,1.951,0,0,1-.222,1.193,1.75,1.75,0,0,1-.4.5,1.653,1.653,0,0,1-.6.323A3.723,3.723,0,0,1,13.52,3.216Z" transform="translate(10.21 32.243)" fill="#0cf"></path>
                                                </g>
                                                <g id="Group_130" data-name="Group 130" transform="translate(40.401 0.19)">
                                                    <path id="Path_291" data-name="Path 291" d="M2611.715,1320.674a3.065,3.065,0,0,1-.764,6.034h-.254v.551a8.773,8.773,0,0,1-4.065,7.386V1346.7a7.941,7.941,0,0,0,15.882,0v-.515a3.8,3.8,0,0,1-6.933-2.163v-21.6a13.519,13.519,0,0,0-.5-3.666h0a.345.345,0,0,1-.015-.1.339.339,0,0,1,.663-.1h0v0a.11.11,0,0,1,0,.017,14.217,14.217,0,0,1,.53,3.851v21.6a3.127,3.127,0,0,0,6.254,0,.339.339,0,1,1,.678,0v2.678a8.62,8.62,0,0,1-17.24,0v-12.244a.33.33,0,0,1,.163-.29,8.1,8.1,0,0,0,3.9-6.908v-.891a.34.34,0,0,1,.34-.34h.594a2.386,2.386,0,0,0,.6-4.7h0a.339.339,0,0,1,.084-.668.335.335,0,0,1,.084.011Z" transform="translate(-2580.681 -1308.1)" fill="#ffe0e0" fill-rule="evenodd"></path>
                                                    <path id="Path_292" data-name="Path 292" d="M2438.833,1245.923a13.64,13.64,0,0,0-26.108,5.537v21.6a3.8,3.8,0,0,1-6.933,2.163v.516a7.941,7.941,0,0,0,15.882,0v-12.056a8.773,8.773,0,0,1-4.064-7.386v-.551h-.254a3.065,3.065,0,0,1,0-6.131h12.951a11.712,11.712,0,0,0,8.526-3.691Zm-16.48,28.037v1.777a8.62,8.62,0,1,1-17.239,0v-2.678a.34.34,0,0,1,.679,0,3.127,3.127,0,0,0,6.254,0v-21.6a14.317,14.317,0,0,1,27.1-6.454q.155.3.3.617l.09.209a.357.357,0,0,1-.049.389,12.393,12.393,0,0,1-9.176,4.072h-12.951a2.386,2.386,0,1,0,0,4.773h.594a.34.34,0,0,1,.339.34v.891a8.1,8.1,0,0,0,3.9,6.908.33.33,0,0,1,.163.29v10.467Z" transform="translate(-2405.114 -1237.138)" fill="#fc0" fill-rule="evenodd"></path>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="Group_133" data-name="Group 133" transform="translate(2180.812 904.054)">
                                            <path id="Path_293" data-name="Path 293" d="M2864.832,1222.082v.7h-2.057l-1.145-3.318H2856.3l-1.145,3.318H2853.1v-.7h1.476l3.65-10.385h-1.443v-.7h2.688l3.882,11.082Zm-3.45-3.3-2.422-6.984-2.422,6.984Z" transform="translate(-2853.103 -1211)" fill="#ffe0e0"></path>
                                            <path id="Path_294" data-name="Path 294" d="M2960.028,1222.082h1.459V1211.7h-1.459v-.7h2.256v11.082h4.379v-1.692h.747v2.389h-7.382Z" transform="translate(-2946.573 -1211)" fill="#ffe0e0"></path>
                                            <path id="Path_295" data-name="Path 295" d="M3033.2,1222.082h1.46V1211.7h-1.46v-.7h2.257v11.082h4.379v-1.692h.747v2.389H3033.2Z" transform="translate(-3010.54 -1211)" fill="#ffe0e0"></path>
                                        </g>
                                        <g id="Group_134" data-name="Group 134" transform="translate(2180.812 922.184)">
                                            <path id="Path_296" data-name="Path 296" d="M2864.832,1367.766v.7h-2.057l-1.145-3.318H2856.3l-1.145,3.318H2853.1v-.7h1.476l3.65-10.385h-1.443v-.7h2.688l3.882,11.082Zm-3.45-3.3-2.422-6.984-2.422,6.984Z" transform="translate(-2853.103 -1356.418)" fill="#ffe0e0"></path>
                                            <path id="Path_297" data-name="Path 297" d="M2960.028,1367.766h1.459V1357.38h-1.459v-.7h4.529c2.339,0,3.4,1.178,3.4,2.97a2.547,2.547,0,0,1-1.842,2.654,2.938,2.938,0,0,1,2.588,2.953c0,1.941-1.211,3.2-4.147,3.2h-4.529Zm4.512-5.69c1.659,0,2.588-.863,2.588-2.356s-.929-2.339-2.588-2.339h-2.256v4.695Zm.05,5.69c2.223,0,3.251-.912,3.251-2.538s-1.161-2.522-3.251-2.522h-2.306v5.06Z" transform="translate(-2946.573 -1356.418)" fill="#ffe0e0"></path>
                                            <path id="Path_298" data-name="Path 298" d="M3047.175,1360.729a6.188,6.188,0,1,1,6.188,6.155A5.825,5.825,0,0,1,3047.175,1360.729Zm11.513,0a5.326,5.326,0,1,0-5.325,5.425A5.077,5.077,0,0,0,3058.688,1360.729Z" transform="translate(-3022.755 -1354.574)" fill="#ffe0e0"></path>
                                            <path id="Path_299" data-name="Path 299" d="M3163.341,1364.8v-7.416h-1.459v-.7h2.256v8.063a3.457,3.457,0,0,0,6.9,0v-8.062h2.273v.7h-1.46v7.416c0,2.356-1.692,3.932-4.264,3.932C3165.033,1368.728,3163.341,1367.152,3163.341,1364.8Z" transform="translate(-3123.027 -1356.418)" fill="#ffe0e0"></path>
                                            <path id="Path_300" data-name="Path 300" d="M3270.568,1367.766h1.46V1357.38h-3.417v1.692h-.73v-2.389h9.091v2.389h-.73v-1.692h-3.417v10.385h1.46v.7h-3.716Z" transform="translate(-3215.689 -1356.418)" fill="#ffe0e0"></path>
                                        </g>
                                        <g id="Group_137" data-name="Group 137" transform="translate(2180.812 940.851)">
                                            <g id="Group_135" data-name="Group 135" transform="translate(0 0.265)">
                                                <path id="Path_301" data-name="Path 301" d="M2853.1,1515.559h1.46v-10.385h-1.46v-.7h2.7l4.379,10.783,4.38-10.783h2.7v.7h-1.46v10.385h1.46v.7H2865v-10.866l-4.4,10.866h-.863l-4.4-10.866v10.866h-2.24Z" transform="translate(-2853.103 -1504.477)" fill="#ffe0e0"></path>
                                                <path id="Path_302" data-name="Path 302" d="M2981.493,1515.559h1.459v-3.567l-3.517-6.819h-1.477v-.7h2.008l3.4,6.669,3.4-6.669h1.974v.7h-1.476l-3.517,6.819v3.567h1.46v.7h-3.716Z" transform="translate(-2962.248 -1504.477)" fill="#ffe0e0"></path>
                                            </g>
                                            <g id="Group_136" data-name="Group 136" transform="translate(33.097 0)">
                                                <path id="Path_303" data-name="Path 303" d="M3116.128,1515.559h1.46v-10.385h-1.46v-.7h5.077a5.89,5.89,0,1,1,0,11.779h-5.077Zm5.06,0a5.193,5.193,0,0,0,0-10.385h-2.8v10.385Z" transform="translate(-3116.128 -1504.212)" fill="#ffe0e0"></path>
                                                <path id="Path_304" data-name="Path 304" d="M3224.5,1508.523a6.188,6.188,0,1,1,6.188,6.155A5.826,5.826,0,0,1,3224.5,1508.523Zm11.513,0a5.326,5.326,0,1,0-5.326,5.425A5.077,5.077,0,0,0,3236.016,1508.523Z" transform="translate(-3210.865 -1502.368)" fill="#ffe0e0"></path>
                                                <path id="Path_305" data-name="Path 305" d="M3340.791,1515.559h1.46v-10.385h-1.46v-.7h2.256v11.082h4.379v-1.692h.747v2.389h-7.383Z" transform="translate(-3312.521 -1504.212)" fill="#ffe0e0"></path>
                                                <path id="Path_306" data-name="Path 306" d="M3413.962,1515.559h1.46v-10.385h-1.46v-.7h2.257v11.082h4.38v-1.692h.746v2.389h-7.383Z" transform="translate(-3376.485 -1504.212)" fill="#ffe0e0"></path>
                                                <path id="Path_307" data-name="Path 307" d="M3488.3,1512.969v1.443h-.63v-3.218h.714a2.923,2.923,0,0,0,3.019,2.77,2.563,2.563,0,0,0,2.754-2.538c0-3.5-6.221-2.09-6.221-5.939a3.367,3.367,0,0,1,6.122-1.676v-1.178h.63v2.737h-.763a2.524,2.524,0,0,0-2.588-2.289,2.363,2.363,0,0,0-2.555,2.339c0,3.218,6.221,1.841,6.221,5.956a3.321,3.321,0,0,1-3.55,3.3A3.452,3.452,0,0,1,3488.3,1512.969Z" transform="translate(-3440.914 -1502.368)" fill="#ffe0e0"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <p>Copyright
                                <script type="application/javascript">
                                    document.write(new Date().getFullYear());
                                </script>
                                © All About My Dolls All rights reserved
                            </p>
                            {{-- <p class="mophx">Developed by <a href="http://mophx.com" target="_black">Mophx</a></p> --}}
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7 col-md-7 col-sm-12 links">
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
                                <li>
                                    <router-link to="/">Home</router-link>
                                </li>
                                <li>
                                    <router-link to="/about-us">About</router-link>
                                </li>
                                <li>
                                    <router-link to="/policy">Privacy</router-link>
                                </li>
                                <li>
                                    <router-link to="/terms-conditions">Terms</router-link>
                                </li>
                                <li>
                                    <router-link to="/subscriptions">Subscriptions</router-link>
                                </li>

                                <li>
                                    <router-link to="/contact-us">Contact us</router-link>
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

    </div>

    <!-- Js Plugins -->
    <script src="{{ asset('FrontEnd') }}/js/jquery-3.3.1.min.js" defer></script>
    <script src="{{ asset('FrontEnd') }}/js/bootstrap.bundle.min.js" defer></script>
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
    <script src="{{ asset('FrontEnd') }}/js/script.js" defer></script>
    <link type="text/css" href="{{ asset('FrontEnd') }}/css/owlcarousel/owl.carousel.min.css" rel="stylesheet" >
    <link type="text/css" href="{{ asset('FrontEnd') }}/css/owlcarousel/owl.theme.default.min.css" rel="stylesheet">

    {{-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js" defer></script> --}}
    {{-- <script src="{{ asset('FrontEnd') }}/js/tooltip.js" defer></script> --}}
</body>

</html>
