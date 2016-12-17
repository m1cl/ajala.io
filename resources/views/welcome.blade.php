<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: black;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
								box-shadow: 0px 40px 60px 0px rgba(240, 245, 90, 0.8);
                text-shadow: 0px 2px 80px rgba(0,0,10,0.8);
								border-bottom-left-radius: 33px;
								border-bottom-right-radius: 33px;
						}

            .links > a {
                color: black;
                padding: 0 25px;
                text-shadow: 0px 90px 80px black;
                font-size: 12px;
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
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    ajala.IO <!--  font ändern: I/O kleiner--> 
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Music</a>
                    <a href="https://ajala.io/blog">Blog</a>
                    <a href="https://ajala.io/events>Events</a>
                    <a href="https://linkedin.com/">LinkedIN</a>
                    <a href="https://github.com/m1cl">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
