<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Choose Your Own Adventure</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #FFF3E5;
                color: #BB4A2B;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .welcome {
                align-items: center;
                display: flex;
                justify-content: center;
                position: relative;
                height: 100vh;
            }

            .welcome__menu {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .welcome__content {
                text-align: center;
                font-size: 50px;
            }

            .links > a {
                color: #BB4A2B;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

        </style>
    </head>
    <body>
        <div class="welcome">
            @if (Route::has('login'))
                <div class="welcome__menu links">
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

            <div class="welcome__content">
                Choose Your Own Adventure
            </div>
        </div>
    </body>
</html>
