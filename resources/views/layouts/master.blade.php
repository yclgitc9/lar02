<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">


<head>
    @include('partials.head')
</head>

<header>
    @include('partials.header')
</header>


<body class="hold-transition sidebar-mini">
<div class="wrapper">


  
<head>
    @include('partials.sidebar')
</head>
    

  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    Content goes here
    @yield('content')  
    </div><!-- /.content -->
  </div><!-- /.content-wrapper -->

<footer>
    @include('partials.footer')
</footer>
  
