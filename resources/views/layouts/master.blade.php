<!DOCTYPE html>
<html lang="en">


<head>
    @include('partials.head')
</head>

<header>
    @include('partials.header')
</header>


<body class="hold-transition sidebar-mini">
<div id="wrapper">


  
<head>
    @include('partials.sidebar')
</head>
    

  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="col-md-12">
        Content goes here
        @yield('content') 
      </div>  
    </div><!-- /.content -->
  </div><!-- /.content-wrapper -->

<footer>
    @include('partials.footer')
</footer>
  
