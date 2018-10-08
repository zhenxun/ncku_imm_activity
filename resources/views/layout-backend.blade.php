
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>IMM後端管理</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ asset('/css/bootstrap3/bootstrap-theme.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/bootstrap3/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/fontawesome/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/ionicons/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/adminLTE/AdminLTE.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/adminLTE/_all-skins.min.css') }}">
  <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
  

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">

  @include('components.backend.top-header')

  @include('components.backend.aside-nav')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

      @yield('content')

  </div>
  <!-- /.content-wrapper -->

  @include('components.backend.footer')

  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<script src="{{ asset('/js/backend/app.js') }}"></script>

@stack('scripts')
</body>
</html>