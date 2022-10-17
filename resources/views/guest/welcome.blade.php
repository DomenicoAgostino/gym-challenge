<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gym Future</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: rgb(0, 94, 255);
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
                background-color: white;
                color: rgb(0, 94, 255);
                font-size: 84px;
                text-transform: uppercase;

            }
            .text-cs {
                background-color: #f43340;
                color: black;
                font-size: 30px;
                text-transform: uppercase;
            }

            .links > a {
                color: white;
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
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ route('index') }}">Il mio profilo</a>
                    @else
                        <a href="{{ route('login') }}">Accedi</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrati</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div>
                    <h2 class="title m-b-md">Gym Future</h2>
                    <p class="text-cs"><span>&#x1F3CB;&#xFE0F;</span> Cooming Soon <span>&#x23F3;</span></p>
                </div>

                <div class="links">
                    <a href="#">Chi Siamo</a>
                    <a href="#">News</a>
                    <a href="#">Contatti</a>

                </div>
            </div>
        </div>
    </body>
</html>
