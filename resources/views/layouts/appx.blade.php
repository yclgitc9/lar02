<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.headx')
</head>


<body class="hold-transition skin-blue sidebar-mini">

<div id="wrapper">

@include('partials.topbarx')
@include('partials.sidebarx')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            @if(isset($siteTitle))
                <h3 class="page-title">
                    {{ $siteTitle }}
                </h3>
            @endif

            <div class="row">
                <div class="col-md-12">

                    

                    @yield('content')

                </div>
            </div>
        </section>
    </div>
</div>



@include('partials.javascriptsx')
</body>
</html>