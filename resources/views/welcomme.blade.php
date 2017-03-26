<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>HOMES.lk</title>
     <script type="text/javascript" src="welcome/jquery-2.2.3.min.js"></script>
     <script type="text/javascript" src="welcome/jtether.min.js"></script>
     <script type="text/javascript" src="welcome/jbootstrap.min.js"></script>
     <script type="text/javascript" src="welcome/jmdb.min.js"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link href="css/welcome/bootstrap.min.css" rel="stylesheet">

    <link href="css/welcome/mdb.min.css" rel="stylesheet">
    
    
    <!-- Template styles -->
    <style>
        /* TEMPLATE STYLES */
        
        html,
        body,
        .view {
            height: 100%;
        }
        /* Navigation*/
        
        .navbar {
            background-color: transparent;
        }
        
        .scrolling-navbar {
            -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
            -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
            transition: background .5s ease-in-out, padding .5s ease-in-out;
        }
        
        .top-nav-collapse {
            background-color: #3c4f74;
        }
        
        footer.page-footer {
            background-color: #3c4f74;
            margin-top: 2rem;
        }
        
        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #1C2331;
            }
        }
        /*Call to action*/
        
        .flex-center {
            color: #fff;
        }
        
        .view {
            background: url("http://mdbootstrap.com/img/Photos/Horizontal/Work/full page/img%20(2).jpg")no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        /*Contact section*/
        
        #contact .fa {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #1C2331;
        }
    </style>

</head>

<body>

    <!--Navbar-->
    <nav class="navbar navbar-toggleable-md navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
                <strong>HOMES.lk</strong>
            </a>
            <div class="collapse navbar-collapse" id="navbarNav1">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active" style="margin-left:800px" >
                        <a class="nav-link">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::route('loginView') }}">Login</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!--/.Navbar-->
    
    <!--Mask-->
    <div class="view hm-black-strong">
        <div class="full-bg-img flex-center">
            <ul>
                <li>
                    <h1 class="h1-responsive wow fadeInDown" data-wow-delay="0.2s">New York Advertising Agency</h1></li>
                <li>
                    <p class="wow fadeInDown">Digital advertising agency focused on today's consumers</p>
                </li>
                <li>
                    <a target="_blank" href="http://mdbootstrap.com/getting-started/" class="btn btn-primary btn-lg wow fadeInLeft" data-wow-delay="0.2s">Sign up!</a>
                    <a target="_blank" href="http://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-default btn-lg wow fadeInRight" data-wow-delay="0.2s">Learn more</a>
                </li>
            </ul>
        </div>
    </div>
    <!--/.Mask-->

    <!-- Main container-->
    <div class="container">

        <div class="divider-new">
            <h2 class="h2-responsive wow bounceIn">About us</h2>
        </div>

        <!--Section: About-->
        <section id="about" class="text-center wow bounceIn" data-wow-delay="0.2s">

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit explicabo assumenda eligendi ex exercitationem harum deleniti quaerat beatae ducimus dolor voluptates magnam, reiciendis pariatur culpa tempore quibusdam quidem, saepe eius.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit explicabo assumenda eligendi ex exercitationem harum deleniti quaerat beatae ducimus dolor voluptates magnam, reiciendis pariatur culpa tempore quibusdam quidem, saepe eius.</p>

        </section>
        <!--Section: About-->

        <div class="divider-new">
            <h2 class="h2-responsive wow fadeInDown">Best features</h2>
        </div>

        <!--Section: Best features-->
        <section id="best-features">

            <div class="row">

                <!--First columnn-->
                <div class="col-lg-3">
                    <!--Card-->
                    <div class="card wow fadeInUp">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="http://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20(25).jpg" class="img-fluid" alt="">
                            <a>
                                <div class="mask"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-block text-center">
                            <!--Title-->
                            <h4 class="card-title">Card title</h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident fuga animi architecto dolores dicta cum quo velit.</p>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>
                <!--First columnn-->

                <!--Second columnn-->
                <div class="col-lg-3">
                    <!--Card-->
                    <div class="card wow fadeInUp" data-wow-delay="0.2s">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="http://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20(14).jpg" class="img-fluid" alt="">
                            <a>
                                <div class="mask"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-block text-center">
                            <!--Title-->
                            <h4 class="card-title">Card title</h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident fuga animi architecto dolores dicta cum quo velit.</p>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>
                <!--Second columnn-->

                <!--Third columnn-->
                <div class="col-lg-3">
                    <!--Card-->
                    <div class="card wow fadeInUp" data-wow-delay="0.4s">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="http://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20(21).jpg" class="img-fluid" alt="">
                            <a>
                                <div class="mask"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-block text-center">
                            <!--Title-->
                            <h4 class="card-title">Card title</h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident fuga animi architecto dolores dicta cum quo velit.</p>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>
                <!--Third columnn-->

                <!--First columnn-->
                <div class="col-lg-3">
                    <!--Card-->
                    <div class="card wow fadeInUp" data-wow-delay="0.6s">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="http://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20(37).jpg" class="img-fluid" alt="">
                            <a>
                                <div class="mask"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-block text-center">
                            <!--Title-->
                            <h4 class="card-title">Card title</h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident fuga animi architecto dolores dicta cum quo velit.</p>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>
                <!--First columnn-->
            </div>

        </section>
        <!--/Section: Best features-->

        <div class="divider-new">
            <h2 class="h2-responsive wow fadeInUp">Contact us</h2>
        </div>

        <!--Section: Contact-->
        <section id="contact">
            <div class="row">
                <!--First column-->
                <div class="col-md-8">
                    <div id="map-container" class="z-depth-1 wow fadeInUp" style="height: 300px"></div>
                </div>
                <!--/First column-->

                <!--Second column-->
                <div class="col-md-4">
                    <ul class="text-center">
                        <li class="wow fadeInUp" data-wow-delay="0.2s"><i class="fa fa-map-marker teal-text"></i>
                            <p>New York, NY 10012, USA</p>
                        </li>

                        <li class="wow fadeInUp" data-wow-delay="0.3s"><i class="fa fa-phone teal-text"></i>
                            <p>+ 01 234 567 89</p>
                        </li>

                        <li class="wow fadeInUp" data-wow-delay="0.4s"><i class="fa fa-envelope teal-text"></i>
                            <p>contact@mdbootstrap.com</p>
                        </li>
                    </ul>
                </div>
                <!--/Second column-->
            </div>
        </section>
        <!--Section: Contact-->

    </div>
    <!--/ Main container-->



    <!--Footer-->
    <footer class="page-footer center-on-small-only">

        <!--Footer Links-->
        <div class="container-fluid">
            <div class="row">

                <!--First column-->
                <div class="col-md-3 offset-lg-1 hidden-lg-down">
                    <h5 class="title">ABOUT MATERIAL DESIGN</h5>
                    <p>Material Design (codenamed Quantum Paper) is a design language developed by Google. </p>

                    <p>Material Design for Bootstrap (MDB) is a powerful Material Design UI KIT for most popular HTML, CSS, and JS framework - Bootstrap.</p>
                </div>
                <!--/.First column-->

                <hr class="hidden-md-up">

                <!--Second column-->
                <div class="col-lg-2 col-md-4 offset-lg-1">
                    <h5 class="title">First column</h5>
                    <ul>
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                        <li><a href="#!">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Second column-->

                <hr class="hidden-md-up">

                <!--Third column-->
                <div class="col-lg-2 col-md-4">
                    <h5 class="title">Second column</h5>
                    <ul>
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                        <li><a href="#!">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Third column-->

                <hr class="hidden-md-up">

                <!--Fourth column-->
                <div class="col-lg-2 col-md-4">
                    <h5 class="title">Third column</h5>
                    <ul>
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                        <li><a href="#!">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <hr>

        <!--Call to action-->
        <div class="call-to-action">
            <h4>Material Design for Bootstrap</h4>
            <ul>
                <li>
                    <h5>Get our UI KIT for free</h5></li>
                <li><a target="_blank" href="http://mdbootstrap.com/getting-started/" class="btn btn-info">Sign up!</a></li>
                <li><a target="_blank" href="http://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-default">Learn more</a></li>
            </ul>
        </div>
        <!--/.Call to action-->

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2015 Copyright: <a href="http://www.MDBootstrap.com"> MDBootstrap.com </a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->


    <!-- SCRIPTS -->

    <!-- JQuery -->


    <!--Google Maps-->
    <script src="http://maps.google.com/maps/api/js"></script>

    <script>
        function init_map() {

            var var_location = new google.maps.LatLng(40.725118, -73.997699);

            var var_mapoptions = {
                center: var_location,

                zoom: 14
            };

            var var_marker = new google.maps.Marker({
                position: var_location,
                map: var_map,
                title: "New York"
            });

            var var_map = new google.maps.Map(document.getElementById("map-container"),
                var_mapoptions);

            var_marker.setMap(var_map);

        }

        google.maps.event.addDomListener(window, 'load', init_map);
    </script>

    <!-- Animations init-->
    <script>
        new WOW().init();
    </script>


</body>

</html>