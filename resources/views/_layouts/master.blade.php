<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8"/>
    <title> @yield('title') | İlkin Yazılım</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Admin Panel" name="description"/>
    <meta content="İlkin Yazılım" name="author"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="#">
    @include('_layouts.head-css')
    @livewireStyles
</head>
<body data-sidebar="dark">

<!-- Begin page -->
<div id="layout-wrapper">
    @include('_layouts.topbar')
    @include('_layouts.sidebar')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid position-relative">

                @if(session()->has('error'))
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-danger" role="alert">
                                    {!! session()->get('error') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if(count($errors)>0)

                    @if($errors->has('warning'))
                        <div class="alert alert-warning" role="alert">
                            <strong>Warning:</strong>
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{!! $error !!}</li>
                                @endforeach
                            </ul>
                        </div>
                    @else
                        <div class="alert alert-danger" role="alert">
                            <strong>Error:</strong>
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{!! $error !!}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                @endif

                @yield('content')
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        @include('_layouts.footer')
    </div>
    <!-- end main content-->
</div>
<!-- END layout-wrapper -->

<!-- /Right-bar -->

<!-- JAVASCRIPT -->
@include('_layouts.vendor-scripts')
@livewireScripts
</body>

</html>