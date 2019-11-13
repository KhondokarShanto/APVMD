<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #0f0f0f;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 60;
                height: 50vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 50px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 15px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                  <a href="{{ url('/product') }}">Product</a>
                  <a href="{{ url('/distributor') }}">Distributor</a>
                  <a href="{{ url('/merchandiser') }}">Merchandiser</a>
                  <a href="{{ url('/supplier') }}">Supplier</a>
                  <a href="{{ url('/requisition') }}">Requisition</a>
                  <a href="{{ url('/order') }}">Order</a>
                  <a href="{{ url('/area') }}">Areas</a>
                  <a href="{{ route('taskcreate') }}">Task</a>
                  <a href="{{ url('/contact') }}">Contact Us</a>
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Area Based Product Distribution and Vendor Management with Distributor Scheduling
                </div>

                <div class="links">


<!--
                      @if (Route::has('login'))
                      @auth
                      <a href="{{ url('/home') }}">Home</a>
                      @else
                      <a href="{{ route('login') }}">Login</a>

                      @if (Route::has('register'))
                          <a href="{{ route('register') }}">Register</a>
                      @endif
                      @endauth

                      @endif -->

                </div>
            </div>
        </div>
    </body>
</html>
