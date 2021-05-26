<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" href="{{ asset('Admin/assets') }}/favicon.png" type="image/x-icon"/>
<title>AMD</title>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="{{ asset('Admin/assets') }}/assets/plugins/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="{{ asset('Admin/assets') }}//assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="{{ asset('Admin/assets') }}//assets/plugins/datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('Admin/assets') }}//assets/plugins/datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('Admin/assets') }}//assets/plugins/datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">
<link rel="stylesheet" href=" {{ asset('Admin/assets') }}/assets/plugins/dropify/css/dropify.min.css">
<!-- Core css -->
<link rel="stylesheet" href="{{ asset('Admin/assets') }}/assets/css/style.min.css"/>
<link rel="stylesheet" href="{{ asset('Admin/assets/style.css') }}">
<link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet"/>
</head>

<body class="null gradient theme-blush null null null close_rightbar">
<!-- Page Loader -->
<div id="app">
<div class="page-loader-wrapper">
    <div class="loader">
    </div>
</div>

<div id="main_content">
    <!-- Start Main top header -->
    <div id="header_top" class="header_top">
        <div class="container">
            <div class="hleft">
                <a class="header-brand" href="index.html"><i class="fa fa-graduation-cap brand-logo"></i></a>
                <div class="dropdown">
                    <a href="javascript:void(0)" class="nav-link icon menu_toggle"><i class="fe fe-align-center"></i></a>
                    <a href="javascript:void(0)" class="nav-link icon settingbar"><i class="fe fe-settings"></i></a>
                </div>
            </div>
            <div class="hright">
                <a href="login.html" class="nav-link icon settingbar"><i class="fe fe-power"></i></a>                
            </div>
        </div>
    </div>
    <!-- Start Rightbar setting panel -->
    <div id="rightsidebar" class="right_sidebar">
        <a href="javascript:void(0)" class="p-3 settingbar float-right"><i class="fa fa-close"></i></a>
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Settings" aria-expanded="true">Settings</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane vivify fadeIn active" id="Settings" aria-expanded="true">
                <div class="mb-4">
                    <h6 class="font-14 font-weight-bold text-muted">Theme Color</h6>
                    <ul class="choose-skin list-unstyled mb-0">
                        <li data-theme="azure"><div class="azure"></div></li>
                        <li data-theme="indigo"><div class="indigo"></div></li>
                        <li data-theme="purple"><div class="purple"></div></li>
                        <li data-theme="orange"><div class="orange"></div></li>
                        <li data-theme="green"><div class="green"></div></li>
                        <li data-theme="cyan" class="active"><div class="cyan"></div></li>
                        <li data-theme="blush"><div class="blush"></div></li>
                        <li data-theme="white"><div class="bg-white"></div></li>
                    </ul>
                </div>
                <div class="mb-4">
                    <h6 class="font-14 font-weight-bold text-muted">Font Style</h6>
                    <div class="custom-controls-stacked font_setting">
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-muli" checked="">
                            <span class="custom-control-label">Muli Google Font</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-montserrat">
                            <span class="custom-control-label">Montserrat Google Font</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-poppins">
                            <span class="custom-control-label">Poppins Google Font</span>
                        </label>
                    </div>
                </div>
                <div>
                    <h6 class="font-14 font-weight-bold mt-4 text-muted">General Settings</h6>
                    <ul class="setting-list list-unstyled mt-1 setting_switch">
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Night Mode</span>
                                <input type="checkbox" name="custom-switch-checkbox" id="dark-mode" class="custom-switch-input btn-darkmode" >
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Icon Color</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-iconcolor">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Gradient Color</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-gradient" checked>
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">RTL Support</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-rtl">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Box Layout</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-boxlayout">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                    </ul>
                </div>
                <hr>
              
            </div>
        </div>
    </div>

    <!-- Start Main leftbar navigation -->
    <div id="left-sidebar" class="sidebar">
        <h5 class="brand-name">Egy Premium<a href="javascript:void(0)" class="menu_option float-right"><i class="icon-grid font-16" data-toggle="tooltip" data-placement="left" title="Grid & List Toggle"></i></a></h5>
        <ul class="nav nav-tabs  d-flex justify-content-center w-100">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu-uni">Control Center</a></li>
            {{-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu-admin">Admin</a></li> --}}
        </ul>
        <div class="tab-content mt-3">
            <div class="tab-pane fade show active" id="menu-uni" role="tabpanel">
                <nav class="sidebar-nav">
                    <ul class="metismenu">
                        <li><a href="" class="{{ Request::path() =='admin/dashboard' ? 'active-link' : null }}"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                        <li><router-link to="/admin/users" class="{{ str_contains(Request::path() ,'user') ? 'active-link' : null }}"><i class="fa fa-users"></i><span>Users</span></router-link></li>
                        <li><a href="" class="{{  str_contains(Request::path() ,'category') ? 'active-link' : null }}"><i class="fa fa-th-list"></i><span>Categories</span></a></li>
                        <li><a href="" class="{{  str_contains(Request::path() ,'product') ? 'active-link' : null }}"><i class="fa fa-book"></i><span>Products</span></a></li>
                        <li><a href="" class="{{  str_contains(Request::path() ,'tag') ? 'active-link' : null }}"><i class="fa fa-tags"></i><span>Tags</span></a></li>
                        <li><a href="" class="{{  str_contains(Request::path() ,'coupon') ? 'active-link' : null }}"><i class="fa fa-certificate"></i><span>Coupons</span></a></li>
                        <li><a href="" class="{{  str_contains(Request::path() ,'brand') ? 'active-link' : null }}"><i class="fa fa-certificate"></i><span>Brands</span></a></li>
                        <li><a href="" class="{{  str_contains(Request::path() ,'country') ? 'active-link' : null }}"><i class="fa fa-flag"></i> <span>Countries</span></a></li>
                        <li><a href="" class="{{  str_contains(Request::path() ,'order') ? 'active-link' : null }}"><i class="fa fa-shopping-cart"></i> <span>Orders</span></a></li>
                        <li><a href="" class="{{  str_contains(Request::path() ,'variation') ? 'active-link' : null }}"><i class="fa fa-server"></i> <span>Variations</span></a></li>
 
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- Start project content area -->
    <div class="page">
        <!-- Start Page header -->
        <div class="section-body" id="page_top">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="left">                        
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="What you want to find">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button">Search</button>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="right">
                        <div class="notification d-flex">
                            <div class="dropdown d-flex">
                                <a href="javascript:void(0)" class="chip ml-3" data-toggle="dropdown">
                                    <span class="avatar" style="background-image: url({{ asset('Admin/assets') }}/assets/images/xs/avatar5.jpg)"></span> </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="page-profile.html"><i class="dropdown-icon fe fe-user"></i> Profile</a>
                                    <a class="dropdown-item" href="app-setting.html"><i class="dropdown-icon fe fe-settings"></i> Settings</a>
                               
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- Start Page title and tab -->
        <router-view></router-view>
        <vue-progress-bar></vue-progress-bar>       
   
   
    </div>    
</div>
</div>

<!-- Start Main project js, jQuery, Bootstrap -->
<script src="{{ asset('Admin/assets') }}/assets/bundles/lib.vendor.bundle.js" defer></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.js" defer></script>
<!-- Start all plugin js -->
<script src="{{ asset('Admin/assets') }}/assets/bundles/counterup.bundle.js" defer></script>
<script src="{{ asset('Admin/assets') }}/assets/bundles/apexcharts.bundle.js" defer></script>
{{-- <script src="{{ asset('Admin/assets') }}/assets/bundles/summernote.bundle.js"></script> --}}


<script src="{{ asset('Admin/assets') }}/assets/plugins/dropify/js/dropify.min.js" defer></script>
<script src="{{ asset('Admin/assets') }}/assets/bundles/summernote.bundle.js" defer></script>

<script src="{{ asset('Admin/assets') }}/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" defer></script>
<script src="{{ asset('Admin/assets') }}/assets/bundles/dataTables.bundle.js" defer></script>
{{-- <script src="{{ asset('Admin/assets') }}/js/table/datatable.js"></script> --}}
<!-- Start project main js  and page js -->
<script src="{{ asset('Admin/assets/js/custom.js') }}" defer></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10" defer></script>
<script src="https://cdn.ckeditor.com/ckeditor5/26.0.0/classic/ckeditor.js" defer></script>
<script src="{{ asset('Admin/assets') }}/assets/js/core.js" defer></script>
<script src="{{ asset('Admin') }}/assets/js/form/dropify.js" defer></script>
<script src="{{ asset('Admin/assets') }}/js/page/index.js" defer></script>

    @yield('scripts')
</body>
</html>
