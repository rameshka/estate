<!DOCTYPE html>
<html lang="en">
<head>
<title>Homes.lk</title>

<meta name = "_token" content= "{{csrf_token()}}">
<!-- Favicons-->
<link rel="icon" href="../images/favicon/favicon-32x32.png" sizes="32x32">
<!-- CORE CSS-->

<link rel="stylesheet" href=".../../css/view/materialize.css">
<link rel="stylesheet" href=".../../css/view/style.css">
</head>

<body>
<!-- Start Page Loading -->
<div id="loader-wrapper">
  <div id="loader"></div>
  <div class="loader-section section-left"></div>
  <div class="loader-section section-right"></div>
</div>
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
        <li class="bold"><a href="" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Legal Party </a> </li>
        <li class="bold"><a href="{{ URL::route('lenderAdd') }}" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i>Money Lender </a> </li>
        <li class="bold"><a href="../index.html" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i>Auction</a> </li>
        <li class="bold"><a href="../index.html" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> City </a> </li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
          </ul>
        <li class="li-hover">
          <div class="divider"></div>
        </li>
        <li class="li-hover">
          <p class="ultra-small margin more-text">MORE</p>
        </li>
        <li><a href="../css-helpers.html"><i class="mdi-communication-live-help"></i> Helpers</a> </li>
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
        <div class="section">
          <h3 class="header" style="font-size:28px;font-weight:bold">Legal Party Details</h3>
          <div class="divider"></div>
          
          <!--Input fields-->
          <form action='../{{route('savelegal')}}' method="post">
            <div id="input-fields">
              <h4 class="header">Name</h4>
              <div class="row">
                <div class="input-field col s6">
                  <input id="name" name="name" type="text" class="validate">
                  <label for="name">Name</label>
                </div>
              </div>
            </div>
            <div class="divider"></div>
            <div id="input-fields">
              <h4 class="header">Registraion ID</h4>
              <div class="row">
                <div class="input-field col s6">
                  <input id="ID" type="text" class="validate" name="ID" required>
                  <label for="first_name">ID</label>
                </div>
              </div>
            </div>
            <div class="divider"></div>
            
            <!--Icon Prefixes-->
            <div id="icon-prefixes" class="section">
              <h4 class="header">Telephone</h4>
              <div class="row">
                <div class="input-field col s6"> <i class="mdi-communication-phone prefix"></i>
                  <input id="telephone" type="tel" name="telephone" class="validate">
                  <label for="telephone">Telephone</label>
                </div>
              </div>
            </div>
            <div class="divider"></div>
            <div id="icon-prefixes" class="section">
              <h4 class="header">Email</h4>
              <div class="row">
                <div class="input-field col s6">
                  <input id="email" type="email" name="email" class="validate">
                  <label for="telephone">email</label>
                </div>
              </div>
            </div>
            <div class="divider"></div>
            
            <!--Input Textarea-->
            <div id="input-textarea" class="section">
              <h4 class="header">Description</h4>
              <div class="row">
                <div class="input-field col s12"> <i class="mdi-editor-mode-edit prefix"></i>
                  <textarea id="des" name="des" class="materialize-textarea"></textarea>
                  <label for="des" class="">Brief Description</label>
                </div>
              </div>
            </div>
            <div class="divider"></div>
            
            <!--Input File Input-->
            <div id="input-file-input" class="section">
              <h4 class="header">Profile Picture</h4>
              <div class="row">
                <div class="file-field input-field">
                  <input class="file-path validate" type="text" name="image"/>
                  <div class="btn"> <span>File</span>
                    <input type="file" />
                  </div>
                </div>
              </div>
            </div>
            <input type="hidden" name="_token" value = "{{ csrf_token() }}" />
            <div class="divider"></div>
            <div class="row">
              <div class="input-field col s12">
                <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit <i class="mdi-content-send right"></i> </button>
              </div>
            </div>
          </form>
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
<script src="../js/view/jquery-1.11.2.min.js"></script> 
<script src="../js/view/materialize.min.js"></script> 
<script src="../js/view/plugins.js"></script>
</body>
</html>