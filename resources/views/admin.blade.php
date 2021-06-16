<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="shortcut icon" href="{{ asset('FrontEnd') }}/images/Logo.png" type="image/x-icon">

<title>ALL ABOUT MY DOLLS | Home</title>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="{{ asset('Admin/assets') }}/assets/plugins/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="{{ asset('Admin/assets') }}/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="{{ asset('Admin/assets') }}/assets/plugins/datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('Admin/assets') }}/assets/plugins/datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('Admin/assets') }}/assets/plugins/datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('Admin/assets') }}/assets/plugins/dropify/css/dropify.min.css">
<!-- Core css -->
<link rel="stylesheet" href="{{ asset('Admin/assets') }}/assets/css/style.min.css"/>
<link rel="stylesheet" href="{{ asset('Admin/assets/style.css') }}">
<link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet"/>
</head>

<body class="null gradient theme-blush null null null close_rightbar">
<!-- Page Loader -->
<div id="app">

<Admin></Admin>
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
{{-- <script src="{{ asset('Admin/assets/js/custom.js') }}" defer></script> --}}
    {{-- @yield('scripts') --}}
</body>
</html>
