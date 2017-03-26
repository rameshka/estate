<!DOCTYPE html>
<html lang="en">
<head>
    <title>Homes.lk</title>

    <meta name = "_token" content= "{{csrf_token()}}">
    <!-- Favicons-->
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- CORE CSS-->

    <link rel="stylesheet" href="css/view/materialize.css">
    <link rel="stylesheet" href="css/view/style.css">
</head>

<body>
<!-- Start Page Loading -->

<!-- End Page Loading -->

<!-- START HEADER -->
<header id="header" class="page-topbar">
    <!-- start header nav-->
    <div class="navbar-fixed">
        <nav class="cyan">
            <div class="nav-wrapper">
                <h1 class="logo-wrapper"> <span class="logo-text">Materialize</span></h1>
                <ul class="right hide-on-med-and-down">
                </ul>
            </div>
        </nav>
    </div>
    <!-- end header nav-->
</header>
<!-- END HEADER -->

<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START MAIN -->
<div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">
        <aside id="left-sidebar-nav">
            <ul id="slide-out" class="side-nav fixed leftside-navigation">
                <li class="user-details cyan darken-2">
                    <div class="row">
                        <div class="col col s4 m4 l4"> <img src="../images/avatar.jpg" alt="" class="circle responsive-img valign profile-image"> </div>
                        <div class="col col s8 m8 l8">
                            <ul id="profile-dropdown" class="dropdown-content">
                                <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a> </li>
                                <li><a href="#"><i class="mdi-action-settings"></i> Settings</a> </li>
                                <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a> </li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a> </li>
                                <li><a href="#"><i class="mdi-hardware-keyboard-tab"></i> Logout</a> </li>
                            </ul>
                            <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">John Doe<i class="mdi-navigation-arrow-drop-down right"></i></a>
                            <p class="user-roal">Administrator</p>
                        </div>
                    </div>
                </li>
                <li class="bold"><a href="{{ URL::route('admin/admindashboard') }}" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Legal Party </a> </li>
                <li class="bold"><a href="{{ URL::route('admin/lenderAdd') }}" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i>Money Lender </a> </li>
                <li class="bold"><a href="{{ URL::route('admin/addAuction') }}" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i>Auction</a> </li>
                <li class="bold"><a href="{{ URL::route('admin/addCity') }}" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> City </a> </li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                    </ul>

                <li class="li-hover">
                    <div class="divider"></div>
                </li>
                <li class="li-hover">
                    <p class="ultra-small margin more-text">Edit Details</p>
                </li>
                <li><a href="{{ URL::route('getAdvisor') }}"><i class="mdi-communication-live-help"></i>Advisors</a> </li>
                </li>

                <li><a href="{{ URL::route('pay') }}"><i class="mdi-communication-live-help"></i>Money Lender</a> </li>
                </li>

                <li><a href="css-helpers.html"><i class="mdi-communication-live-help"></i>Auction</a> </li>
                </li>

                <li class="li-hover">
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <div class="sample-chart-wrapper"> </div>
                        </div>
                    </div>
                </li>
            </ul>
            <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"><i class="mdi-navigation-menu" ></i></a> </aside>
        <!-- END LEFT SIDEBAR NAV-->

        <!-- //////////////////////////////////////////////////////////////////////////// -->

        <!-- START CONTENT -->
        <section id="content">

            <!--start container-->
            <div class="container">
                <div id="invoice">
                    <div class="invoice-header">
                        <div class="row section">
                            <div class="col s12 m6 l6">
                                <img src="images/generic-logo.png" alt="company logo">
                                <p>To,
                                    <br/>
                                    <span class="strong">Jonathan Doe</span>
                                    <br/>
                                    <span>125, ABC Street,</span>
                                    <br/>
                                    <span>New Yourk, USA</span>
                                    <br/>
                                    <span>+91-(444)-(333)-(221)</span>
                                </p>
                            </div>

                            <div class="col s12 m6 l6">
                                <div class="invoce-company-address right-align">
                                    <span class="invoice-icon"><i class="mdi-social-location-city cyan-text"></i></span>

                                    <p><span class="strong">Company Name LLC</span>
                                        <br/>
                                        <span>125, ABC Street,</span>
                                        <br/>
                                        <span>New Yourk, USA</span>
                                        <br/>
                                        <span>+91-(444)-(333)-(221)</span>
                                    </p>
                                </div>

                                <div class="invoce-company-contact right-align">
                                    <span class="invoice-icon"><i class="mdi-communication-quick-contacts-mail cyan-text"></i></span>
                                    <p><span class="strong">www.exampledomain.com</span>
                                        <br/>
                                        <span>info@exampledomain.com</span>
                                        <br/>
                                        <span>admin@exampledomain.com</span>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            @if ($message = Session::get('success'))
                                <div class="custom-alerts alert alert-success fade in">
                                    <p style="font-size: 1.6em; color:green; margin-top: -5%;">
                                        {!! $message !!}
                                    </p>
                                </div>

                            @endif
                            @if ($message = Session::get('error'))
                                <div class="custom-alerts alert alert-danger fade in">
                                    <p style="font-size: 1.6em; color: red; margin-top: -5%;">
                                        {!! $message !!}
                                    </p>
                                </div>
                                <?php Session::forget('error');?>
                            @endif

                        </div>
                    </div>
                    <div class="invoice-lable">
                        <div class="row">
                            <div class="col s12 m3 l3 cyan">
                                <h4 class="white-text invoice-text">INVOICE</h4>
                            </div>
                            <div class="col s12 m9 l9 invoice-brief cyan white-text">
                                <div class="row">
                                    <div class="col s12 m3 l3">
                                        <p class="strong">Total Due</p>
                                        <h4 class="header">$ 3,600.00</h4>
                                    </div>
                                    <div class="col s12 m3 l3">
                                        <p class="strong">Invoice No</p>
                                        <h4 class="header">MT_A_124563</h4>
                                    </div>
                                    <div class="col s12 m3 l3">
                                        <p class="strong">Due Date</p>
                                        <h4 class="header">22.05.2015</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="invoice-table">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <table class="striped">
                                    <thead>
                                    <tr>

                                        <th data-field="nameoftheuser" >Name of the user : Variable </th>

                                    </tr>
                                    </thead>

                                </table>
                                <br>
                                <table class="striped">
                                    <thead>
                                    <tr>

                                        <th data-field="Description">Description : Description </th>

                                    </tr>
                                    </thead>

                                </table>
                            </div>

                        </div>
                    </div>
                    <br>
                    <div class ="divider" style="color:blue; height: 20px;"></div>
                    <br>
                    <div class="invoice-footer">
                        <div class="row">
                            <div class="col s12 m6 l6">
                                <p class="strong">Payment Method</p>
                                <form class="form-horizontal" method="POST" id="payment-form" role="form" action="{!! URL::route('addmoney.paypal') !!}" >
                                    {{ csrf_field() }}
                                    <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                                        <div class="col-md-6">
                                            <input id="amount" type="text" class="form-control" name="amount" value="12" autofocus hidden="">
                                            @if ($errors->has('amount'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <input type="text" name = "paypalname"value = "pasindu senanayake" hidden="">
                                            <input type = "text" name = "paypalAmount" value = "12USD" hidden="">
                                            <input type = "text" name = "paypalDescription" value  = "Registration for auction ID : weweweewew" hidden="">
                                            @if (!Session::has('success'))
                                                <button type="submit" class="btn btn-primary">
                                                    Paywith Paypal
                                                </button>
                                            @endif
                                            @if ( Session::has('success'))

                                                <?php Session::forget('success');?>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                                <p class="strong">Terms & Condition</p>
                                <ul>
                                    <li>You know, being a test pilot isn't always the healthiest business in the world.</li>
                                    <li>We predict too much for the next year and yet far too little for the next 10.</li>
                                </ul>
                            </div>
                            <div class="col s12 m6 l6 center-align">
                                <p>Approved By</p>
                                <img src="images/signature-scan.png" alt="signature">
                                <p class="header">AMANDA ORTON</p>
                                <p>Managing Director</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <!--end container-->

        </section>
        <!-- END CONTENT -->

    </div>
    <!-- END WRAPPER -->

</div>

<!-- START FOOTER -->
<footer class="page-footer">
    <div class="footer-copyright">
        <div class="container"> <span>Copyright © 2015 <a class="grey-text text-lighten-4" href="http://themeforest.net/user/geekslabs/portfolio?ref=geekslabs" target="_blank"></a> All rights reserved.</span>
            <!--span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="http://geekslabs.com/">GeeksLabs</a></span--->
        </div>
    </div>
</footer>
<!-- END FOOTER -->

<!-- jQuery Library -->

<script src="js/view/jquery-1.11.2.min.js"></script>
<script src="js/view/materialize.min.js"></script>
<script src="js/view/plugins.js"></script>
<script type="text/javascript" src="js/view/perfect-scrollbar.min.js"></script>
</body>
</html>