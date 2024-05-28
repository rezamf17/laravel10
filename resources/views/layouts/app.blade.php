<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset("plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset("plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset("plugins/jqvmap/jqvmap.min.css")}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset("dist/css/adminlte.min.css")}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset("plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset("plugins/daterangepicker/daterangepicker.css")}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset("plugins/summernote/summernote-bs4.min.css")}}">
</head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
