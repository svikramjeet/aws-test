<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="author" content="">

    <title>Welcome to Elsie</title>
    <link rel="icon" href="{{url('images/favicon.png')}}" type="image/x-icon"/>
    <link rel="stylesheet" href="https://use.typekit.net/wtx1oeo.css">
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">


</head>
    <body>

    <div class="custom-container">
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
                <div class="about-row">
                    <div class="col-xs-12">
                        <div class="about-col col-sm-6">
                            <h1>Making everyday life easier.</h1>
                            <p>Simplify life, be in control, and protect the people and possessions you care about.</p>
                            <a class="btn btn-primary" href="javascript:void();" data-toggle="modal" data-target="#myModal">Register for early access</a>
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
        </div>
    </section>

    <section class="about-section about-section-second">
        <div class="container">
            <div class="row">
                <div class="about-row about-row-left">
                    <div class="col-xs-12">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-6 no-pad">
                            <div class="service-col">
                                <h2>Be in control</h2>
                                <p>Gain deep insight into your current usage and spending through Elsie's amazing visuals. Elsie tells you what you need to know when you need to know it. You always end up with the best deals as Elsie acts a marketplace for suppliers and vendors to bid for your business.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section about-section-third">
        <div class="container">
            <div class="row">
                <div class="about-row">
                    <div class="col-xs-12">
                        <div class="col-sm-8">
                            <div class="service-col ">
                                <h2>Stay protected</h2>
                                <p>Elsie makes you super organised and it's as simple as that. By connecting your home, it's contents and your accounts Elsie will ensure that nothing is neglected. Elsie highlights the areas requiring your attention and provides you with all the actions you need to take to ensure that you, your family and the things you care about are always protected.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>

    <section class="register-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="register-col text-center">
                        <div class="register-col-text">
                            <h2>Ready to make managing your life easier?</h2>
                            <a class="btn btn-primary" href="javascript:void();" data-toggle="modal" data-target="#myModal">Register for early access</a>
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
                            <li><a href="https://twitter.com/myelsielife"><img src="{{url('images/ic_twitter.svg')}}" alt=""/></a></li>
                            <li><a href="https://www.facebook.com/myelsielife/"><img src="{{url('images/ic_facebook.svg')}}" alt=""/></a></li>
                            <li><a href="https://www.instagram.com/myelsielife/"><img src="{{url('images/ic_insta.svg')}}" alt=""/></a></li>
                        </ul>
                    </div>
                    <div class="copy-right-col">
                        <p>Copyright © Elsie Life Ltd. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modal -->
    <div class="register-modal modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-sm inside"> 
            <div class="modal-content">                
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">
                        <img src="{{url('images/ic_close_16.svg')}}" alt=""/>
                    </button>
                    <h2>Ready to make managing your life easier?</h2>
                    <div class="modal-form">
                        <form>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Email Address">
                            </div>
                            <div class="form-group text-center">
                                <input class="btn btn-primary" type="button" value="Register Now">
                            </div>
                        </form>
                    </div>
                </div>                
            </div>      
        </div>
    </div>
  <!-- Modal End -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>

  
    </body>
</html>
