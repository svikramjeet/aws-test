<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="author" content="">

    <title>Welcome to Elsie</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">


</head>
    <body>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="logo">
                        <a href="#"><img src="{{url('images/logo_a.svg')}}" alt=""/></a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="about-col col-sm-6">
                        <h1>Making everyday life easier.</h1>
                        <p>Simplify life, be in control, and protect the people and possessions you care about.</p>
                        <a class="btn btn-primary" href="#">Register for early access</a>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="service-col col-sm-6">
                        <h2>Simplify life</h2>
                        <p>Elsie provides a consolidated view of everyday life, working in the background to manage the small details as well as those bigger tasks which are all too often left to the last minute or forgotten all together. Whether it's remembering renewal dates, attending family events or finding your warranty details Elsie has you covered.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="register-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="register-col text-center">
                        <div class="register-col-text">
                            <h2>Ready to make managing your life easier?</h2>
                            <a class="btn btn-primary" href="#">Register for early access</a>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="social-network-col text-center">
                        <ul>
                            <li><a href="javascriptavoiid"><img src="{{url('images/ic_twitter.svg')}}" alt=""/></a></li>
                            <li><a href="#"><img src="{{url('images/ic_facebook.svg')}}" alt=""/></a></li>
                            <li><a href="#"><img src="{{url('images/ic_insta.svg')}}" alt=""/></a></li>
                        </ul>
                    </div>
                    <div class="copy-right-col">
                        <p>Copyright © Elsie Life Ltd. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>

    </body>
</html>
