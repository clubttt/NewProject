<!--admin 12/12/58 -->
@extends('layouts.html')
@extends('layouts.css')
@yield('stylesheet')
@extends('layouts.js-respond')
@yield('scripts')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    @include('layouts.header')
    @include('layouts.aside')

            <!-- Main content -->
    <div class="content-wrapper">
        <br>

        <div class="col-md-12 col-xs-4">

            <div class="panel panel-default">

                <div class="panel-body">


                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content-wrapper -->
@extends('layouts.footer')
@extends('layouts.js')
@yield('scripts')
@yield("javascript")


