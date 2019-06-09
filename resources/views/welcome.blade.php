<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{asset('css/hacker.css')}}" rel="stylesheet">
        <link href="{{ asset('css/home.css')}}" rel="stylesheet">
        <!--<style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style> -->
        <script src="{{ asset('js/app.js') }}" ></script>
    <script src="{{asset('js/matrix.js')}}"></script>
    </head>
    <body>
            <canvas></canvas>
        <div class="flex-center position-ref full-height container">
            @if (Route::has('login'))
                <div class="top-right links">
                    <ul class="nav nav-tabs ml-auto">
                    @auth
                    <li>
                        <a href="{{ url('/home') }}">Home</a>
                    </li>
                    @else
                    <li>
                        <a href="{{ route('login') }}">Login</a>
                    </li>
                        @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}">Register</a>
                        </li>
                        @endif
                    @endauth
                    </ul>
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md jumbotron">
                   <h1>Central audit</h1>
                </div>
               
                
            </div>
        </div>
    </body>
</html>
