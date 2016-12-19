<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" type="text/css" media="all" />

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
            .link-container {
              display: flex;
              width: 470px;
              margin-top: -67px;
              margin-left: 0px;
              background-color: rgba(1,1,1,0.40);
              height: 73px;
              border-bottom-left-radius: 33px;
              box-shadow: 0px 2px 1px 0px rgba(255,255, 255, 1.0);
              border-bottom-right-radius: 33px;
            }
            .title-container {
              width: 470px;
              margin-top: 30px;
              margin-left: 0px;
              background-color:rgba(1,1,1,1.0);
              height: 73px;
              border-bottom-left-radius: 33px;
              border-bottom-right-radius: 33px;
              box-shadow: 0px 16px 10px 0px rgba(255,255, 255, 0.8);
            }

            .title {
                font-size: 54px;
                color: rgba(165,165,165,1.0);
								box-shadow: 0px 23px 13px 8px rgba(255,255, 255, 0.1);
								border-bottom-left-radius: 33px;
								border-bottom-right-radius: 33px;
						}
            p > span {
              font-size: 42px;
              
            }

            .links > a {
                color: black;
                padding: 0 25px;
                text-shadow: 0px 90px 80px white;
                font-size: 12px;
                font-weight: 800;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
                  <script type="text/javascript" charset="utf-8">
                    function bounce4me() {
                      var title = document.getElementById('title');
                      title.className += "animated bounce";
                    }
                  </script>
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
                <div class="title-container animated fadeInDown">
                  <div class="title m-b-md">
                    <p id="title" class="title-name">ajala.<span>IO</span> </p><!--  font ändern: I/O kleiner--> 
                  </div>
                </div>

                <div class="link-container animated fadeInDown">
                </div>
                  <div class="links animated fadeInDown">
                      <a href="https://soundcloud.com/m1cl">Music</a>
                      <a href="https://ajala.io/blog">Blog</a>
                      <a href="https://ajala.io/events>Events</a>
                      <a href="https://www.linkedin.com/in/michael-ajala-305057114">LinkedIN</a>
                      <a href="https://github.com/m1cl">GitHub</a>
                  </div>
              </div>
            </div>
        </div>
    </body>
</html>
