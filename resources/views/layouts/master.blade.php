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
    
      <div class="container-fluid">
      
        <div class="row">                  
            <div class="col-md-12">
            
              @yield('content')
              
            </div> 
        </div><!-- row -->
         
      </div> <!-- /container-fluid --> 
    </div><!-- /.content -->
  </div><!-- /.content-wrapper -->

<footer>
    @include('partials.footer')
</footer>




  
