<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="author" content="">

    <title>Elsie | Making everyday life easier</title>
    <link rel="icon" href="{{url('images/favicon.png',[],env('APP_SSL'))}}" type="image/x-icon"/>
    <link rel="stylesheet" href="https://use.typekit.net/wtx1oeo.css">
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css',[],env('APP_SSL'))}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css',[],env('APP_SSL'))}}">
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-112470012-1', 'auto');
            ga('send', 'pageview');
    </script>
    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '671951399860811');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=671951399860811&ev=PageView&noscript=1"
    /></noscript>
<!-- End Facebook Pixel Code -->


</head>

    <body>

    <div class="custom-container">
        <header>
            <div class="container">
                <div class="row">
                    <div class="padding-left">
                        <div class="col-xs-12">
                            <div class="logo">
                                <a href="#"><img src="{{url('images/logo_b.svg',[],env('APP_SSL'))}}" alt=""/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="about-section">
            <div class="container">
                <div class="row">
                    <div class="padding-left">
                    <div class="about-row">
                        <div class="col-xs-12">
                            <div class="about-col col-sm-6">
                                <div class="mobile-view-img text-center">
                                    <img src="{{url('images/mobile_image01.png',[],env('APP_SSL'))}}" alt=""/>
                                </div>
                                <h1>Make everyday life easier.</h1>
                                <p>Simplify life, be in control, and protect the people and possessions you care about.</p>
                                <div class="head-register-btn">
                                    <a class="btn btn-primary signup-form" href="javascript:void();" data-toggle="modal" data-target="#myModal">Register for early access</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="service-col col-sm-7 col-md-6">
                                <h2>Simplify life</h2>
                                <p>Elsie provides a consolidated view of everyday life, working in the background to manage the small details as well as those bigger tasks which are all too often left to the last minute or forgotten all together. Whether it's remembering renewal dates, attending family events or finding your warranty details Elsie has you covered.</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="dashboard-section">
            <div class="container">
                <div class="row">
                    <div class="padding-left">
                        <div class="col-xs-12 col-sm-3">
                            <div class="flex-col dashboard-left-img">
                                <div class="dashboard-left-col">
                                    <img width="360" src="{{url('images/image03.png',[],env('APP_SSL'))}}" alt=""/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-9 dashboard-custom-col">
                            <div class="dashboard-left-col">
                                <img src="{{url('images/ex_dashboard.png',[],env('APP_SSL'))}}" alt=""/>
                                <p>One dashboard for everything that matters to you and your family.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-section about-section-second">
            <div class="container">
                <div class="row">
                    <div class="padding-left">
                        <div class="about-row about-row-left">
                            <div class="col-xs-12">
                                <div class="col-sm-8 col-md-6 no-pad">
                                    <div class="flex-col control-content-col">
                                        <div class="service-col">                                
                                            <h2>Be in control</h2>
                                            <p>Gain deep insight into your current usage and spending through Elsie's amazing visuals. Elsie tells you what you need to know when you need to know it. You always end up with the best deals as Elsie acts as a marketplace for suppliers and vendors to bid for your business.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-6 about-col-left">
                                    <div class="financials-pic text-center">
                                        <img src="{{url('images/ex_financials.png',[],env('APP_SSL'))}}" alt=""/>
                                    </div>
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
                    <div class="padding-left">
                        <div class="about-row">
                            <div class="col-xs-12">
                                <div class="col-xs-12 col-sm-4">
                                    <img src="{{url('images/ex_vehicle.png',[],env('APP_SSL'))}}" alt=""/>
                                </div>
                                <div class="mobile-view-img text-center">
                                    <img src="{{url('images/mobile_image03.png',[],env('APP_SSL'))}}" alt=""/>
                                </div>
                                <div class="col-xs-12 col-sm-8">
                                    <div class="flex-col control-content-col">
                                        <div class="service-col">
                                            <h2>Stay protected</h2>
                                            <p>Elsie makes you super organised and it's as simple as that. By connecting your home, it's contents and your accounts Elsie will ensure that nothing is neglected. Elsie highlights the areas requiring your attention and provides you with all the actions you need to take to ensure that you, your family and the things you care about are always protected.</p>
                                        </div>
                                    </div>
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
                            <a class="btn btn-primary signup-form" href="javascript:void();" data-toggle="modal" data-target="#myModal">Register for early access</a>
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
                            <li><a target="_blank" href="https://twitter.com/myelsielife"><img src="{{url('images/ic_twitter.svg')}}" alt=""/></a></li>
                            <li><a target="_blank" href="https://www.facebook.com/myelsielife"><img src="{{url('images/ic_facebook.svg')}}" alt=""/></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/myelsielife"><img src="{{url('images/ic_insta.svg')}}" alt=""/></a></li>
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
                        <img src="{{url('images/ic_close_16.svg',[],env('APP_SSL'))}}" alt=""/>
                    </button>
                    @if(session('success'))
                        <span>Thank you for registering your interest. We will be in touch with updates very soon.</span>
                    @elseif(session('error'))
                        <span>Error from MailChimp</span>
                    @else
                    <h2>Ready to make managing your life easier?</h2>
                    <div class="modal-form">
                        <form method="post" action="{{url('/subscribe')}}" id="subscribe_form">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <input class="form-control" name="first_name" type="text" placeholder="First Name"/>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="last_name" type="text" placeholder="Last Name"/>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="email" type="text" placeholder="Email Address"/>
                            </div>
                            <div class="form-group text-center">
                                <input class="btn btn-primary" type="submit" value="Register Now">
                            </div>
                        </form>
                    </div>
                    @endif
                </div>                
            </div>      
        </div>
    </div>
  <!-- Modal End -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <script src="{{url('/')}}/js/custom.js"></script>
     @if(session('success'))
    <script type="text/javascript">
        $(document).ready(function(){
            $("#myModal").modal('show');
        });
    </script>
    @endif
  
    </body>
</html>
