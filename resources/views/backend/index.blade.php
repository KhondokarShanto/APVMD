<!DOCTYPE html>
<html lang="en">
    <head>
        @include('backend.layout.header')
    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                @include('backend.layout.navbar')
                @include('backend.layout.sidebar')
            </nav>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div style="padding-top: 10px;">
                        <div class="row">
                            <div class="col-lg-12">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            @include('backend.layout.footer')
    </body>
</html>





