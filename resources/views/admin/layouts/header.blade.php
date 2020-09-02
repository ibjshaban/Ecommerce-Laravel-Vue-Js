<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ /*!empty($title)?$title:*/trans('admin.adminPanel') }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('Design/admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
          href="{{ asset('Design/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('Design/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('Design/admin/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    @if(direction()=='ltr')
        <link rel="stylesheet" href="{{ asset('Design/admin/dist/css/adminlte.min.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('Design/admin/dist/css/rtl/AdminLTE.min.css') }}">
        <link rel="stylesheet" href="{{ asset('Design/admin/dist/css/rtl/skins/_all-skins.min.css') }}">
        <link rel="stylesheet" href="{{ asset('Design/admin/dist/css/rtl/bootstrap-rtl.min.css') }}">
        <link rel="stylesheet" href="{{ asset('Design/admin/dist/css/rtl/rtl.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
        <style type="text/css">
            html,body,.alert{
                font-family: 'Cairo', sans-serif;
            }
        </style>
    @endif
<!-- overlayScrollbars -->
    <link rel="stylesheet" href=" {{ asset('Design/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('Design/admin/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('Design/admin/plugins/summernote/summernote-bs4.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('Design/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
          href="{{ asset('Design/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <!-- jQuery -->
    <script src="{{ asset('Design/admin/plugins/jquery/jquery.min.js') }}"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
