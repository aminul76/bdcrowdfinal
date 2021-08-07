<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>BD Crowd Ltd.</title>

    <link href="{{url('https://use.fontawesome.com/releases/v5.8.2/css/all.css')}}" rel="stylesheet">

    <!-- General CSS Files -->
 


    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{asset('backend/assets/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/modules/fontawesome/css/all.min.css')}}">



    <!-- ----------------for data table -------------------- -->
   
    <link rel="stylesheet" href="{{asset('backend/assets/modules/datatables/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')}}">


    <!-- --------------for input area -------------- -->
    <link rel="stylesheet" href="{{asset('backend/assets/modules/bootstrap-daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/modules/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/modules/jquery-selectric/selectric.css')}}">
    <link href="{{url('https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('backend/assets/modules/summernote/summernote-bs4.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}">


    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('backend/assets/css/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/css/components.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/css/custom.css')}}">

</head>

<body class="layout-4">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <span class="loader"><span class="loader-inner"></span></span>
        </div>
       
        <div id="app">
            <div class="main-wrapper main-wrapper-1">
                <div class="navbar-bg"></div>
                @include('admin.layouts.admin_navber')
                
                @include('admin.layouts.admin_sidebar')
               
                @yield('AdminDashbordContent')
               
            </div>
        </div>
      
     @yield('script')
   


    <!-- General JS Scripts -->
    <script src="{{asset('backend/assets/bundles/lib.vendor.bundle.js')}}"></script>


       <!-- JS Libraies -->
       <!-- -----------------for data table ----------------- -->
       <script src="{{asset('backend/assets/modules/datatables/datatables.min.js')}}"></script>
        <script src="{{asset('backend/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('backend/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js')}}"></script>
        <script src="{{asset('backend/assets/modules/jquery-ui/jquery-ui.min.js')}}"></script>

  
   <!-- ----------------for input area-------------------- -->
        <script src="{{asset('backend/assets/modules/select2/dist/js/select2.full.min.js')}}"></script>
        <script src="{{asset('backend/assets/modules/jquery-selectric/jquery.selectric.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
        <script src="{{asset('backend/assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

        <script src="{{asset('backend/assets/modules/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- Page Specific JS File -->
    <script src="{{asset('backend/js/page/modules-datatables.js')}}"></script>
    <!-- <script src="{{asset('backend/js/page/index.js')}}"></script> -->

    

    <!-- Template JS File -->
   
    <script src="{{asset('backend/js/axios.min.js')}}"></script>
    <script src="{{asset('backend/js/scripts.js')}}"></script>
    <script src="{{asset('backend/js/custom.js')}}"></script>
    
</body>
</html>