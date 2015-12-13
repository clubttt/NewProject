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

        <div class="col-md-12 col-sm-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#status" data-toggle="tab">Status</a>
                        </li>
                        <li class=""><a href="#sug" data-toggle="tab">Suggesion</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="status">
                            <br>
                            <br>
                            <center></center>
                        </div>
                        <div class="tab-pane fade" id="sug">
                            <h3>Suggesion</h3>

                            <p></p>
                        </div>

                    </div>
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


