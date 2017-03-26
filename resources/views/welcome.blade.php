<!doctype html>
<html class="no-js" lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="M_Adnan" />
<!-- Document Title -->
<title>HOMES.lk</title>

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

<!-- FontsOnline -->
<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,900,300,100' rel='stylesheet' type='text/css'>

<!-- StyleSheets -->
<link rel="stylesheet" href="css/welcome/ionicons.min.css">
<link rel="stylesheet" href="css/welcome/materialize.min.css">
<link rel="stylesheet" href="css/welcome/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="css/welcome/font-awesome.min.css">
<link rel="stylesheet" href="css/welcome/main.css">
<link rel="stylesheet" href="css/welcome/style.css">
<link rel="stylesheet" href="css/welcome/responsive.css">
<!--link rel="stylesheet" href="css/fmf_core.css"-->

<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" href="css/welcome/settings.css" media="screen" />

<!-- JavaScripts -->
<script src="js/vendors/modernizr.js"></script>

<style>

  .agileits_search {
    width: 50%;

  margin-left:20%;

}
.agileits_search form {
    border: 30px solid rgba(0, 0, 0, 0.55);
}
.agileits_search input[type="text"] {
    outline: none;
    border:none;
    background: #fff;
    color: #999;
    padding: 1.1em 1em;
    font-size: 1em;
    float: left;
}
.agileits_search input[type="text"]{
	width: 80%;
	height:51px;
}

.agileits_search input[type="submit"] {
    outline: none;
    border: none;
    background: #fd463e;
    color: #fff;
    padding: 1.1em 1em;
    font-size: 1em;
    width: 20%;
	-webkit-transition:.5s all;
	-moz-transition:.5s all;
	-o-transition:.5s all;
	-ms-transition:.5s all;
	transition:.5s all;
}
.agileits_search input[type="submit"]:hover{
	background:#f71d16;
}
.back{
	 background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.4)), url('images/slides/slides-1.jpg');
	
	}
.banner-text {
    padding-top:25%;

}
.banner-text h2 {
    font-size: 2em;
    color: #fff;
    line-height: 1.3em;
    letter-spacing: 1px;
	margin-left:20%;
	
}


</style>
</head>
<body>

<!-- LOADER -->
<div id="loader">
  <div class="loader">
    <div class="position-center-center"> <img src="images/logo.png" alt="" >
      <div class="progress">
        <div class="indeterminate"></div>
      </div>
    </div>
  </div>
</div>

<!-- Page Wrapper -->
<div id="wrap">
  <!-- Header -->
  <header class="header coporate-header">
    <div class="sticky">
      <div class="container">
        <div class="logo"> <a href="index.html"></a> </div>
        
        <!-- Nav -->
        <nav>
          <ul id="ownmenu" class="ownmenu">
            <li class="active"><a href="index.html">HOME</a>
            </li>
            <li><a href="index.html">Advice</a></li>
            <li><a href="index.html">Auction</a></li>
            <li><a href="index.html">Financial Plans</a></li>
            <li><a href="{{ URL::route('loginSeller') }}">Sell Property</a> </li>
            <li><a href="{{ URL::route('loginView') }}">Login</a></li>
          </ul>
        </nav>
        
        </div>
    </div>
  </header>
  <!-- End Header --> 
  
  <!--======= HOME MAIN SLIDER =========-->
  <section class="home-slider">
    <div class="tp-banner-container back">

      <div class="tp-banner-fix  ">
      
             <div class="banner-text">  
                <h2>Find your Dream Home</h2> 
              </div>
				<div class="agileits_search back">
					<form action="#" method="post">
						<input name="Search" type="text" placeholder="Enter City" required="">
	
						<input type="submit" value="Search">
					</form>
				</div> 
			
      </div>
      </div>
  </section>
  <!-- Content -->
  <div id="content"> 
    
    <!-- Services -->
    <section class="welcome padding-top-100 padding-bottom-100 ">
      <div class="container"> 
        <!-- HEADING BLOCK -->
        <div class="heading-block text-center margin-bottom-80">
          <h3>Welcome To Fugiat</h3>
          <hr>
          <span class=" margin-top-20">The weather started getting rough - the tiny ship was tossed. If not for the courage of the fearless crew the Minnow would be lost. the Minnow always wanted to have a neighbor just like you. I've always wanted to live in a neighborhood with you. </span> </div>
        
        <!-- Icon Row -->
        <div class="text-center margin-bottom-50"> <img class="img-responsive" src="images/intro-tabs-1.png" alt="" > </div>
        <div class="services-welcome text-center">
          <ul class="row">
            
            <!-- Services -->
            <li class="col-md-4">
              <div class="icon"> <i class="ion-ios-speedometer-outline"></i> </div>
              <h5 class="margin-top-40 margin-bottom-20" >who we are</h5>
              <p>Takin' a break from all your worries sure would help a lot. Sunny Days sweepin' the clouds away. On 
                my way to where the air is sweet. </p>
            </li>
            
            <!-- Services -->
            <li class="col-md-4">
              <div class="icon"> <i class="ion-ios-color-wand-outline"></i> </div>
              <h5 class="margin-top-40 margin-bottom-20">what we do</h5>
              <p>Takin' a break from all your worries sure would help a lot. Sunny Days sweepin' the clouds away. On 
                my way to where the air is sweet. </p>
            </li>
            
            <!-- Services -->
            <li class="col-md-4">
              <div class="icon"> <i class="ion-ios-infinite-outline"></i> </div>
              <h5 class="margin-top-40 margin-bottom-20">our great team</h5>
              <p>Takin' a break from all your worries sure would help a lot. Sunny Days sweepin' the clouds away. On 
                my way to where the air is sweet. </p>
            </li>
          </ul>
        </div>
      </div>
    </section>
    
    <!-- PROMO -->
    <section class="video-sec text-center padding-bottom-100 padding-top-100" style="background:url(images/bg/video-bg.jpg) no-repeat;">
      <div class="container">
        <h3 class="text-white text-uppercase letter-space-2">Video section</h3>
        <a href="#." class="waves-effect waves-light video-btn"><i class="fa fa-play"></i></a>
        <h6 class="text-white font-bold text-uppercase letter-space-4 margin-top-40">How we work for our success</h6>
      </div>
    </section>
    
    <!-- SERVICES -->
    <section class="services padding-top-100 padding-bottom-80">
      <div class="container"> 
        
        <!-- HEADING BLOCK -->
        <div class="heading-block text-center margin-bottom-80">
          <h3>Services What We Provide</h3>
          <hr>
          <span class=" margin-top-20">The weather started getting rough - the tiny ship was tossed. If not for the courage of the fearless crew the Minnow would be lost. the Minnow always wanted to have a neighbor just like you. I've always wanted to live in a neighborhood with you. </span> </div>
        <div class="services-welcome text-center">
          <ul class="row">
            
            <!-- Services -->
            <li class="col-md-4">
              <article class="z-depth-1">
                <div class="icon"> <i class="icon-pencil"></i> </div>
                <h5 class="margin-top-30 margin-bottom-10" >Web design</h5>
                <p>Takin' a break from all your worries sure would help a lot. Sunny Days sweepin' the clouds away. On 
                  my way to where the air is sweet. </p>
                <a href="#." class="waves-effect waves-ripple btn">read more</a> </article>
            </li>
            
            <!-- Services -->
            <li class="col-md-4">
              <article class="z-depth-1">
                <div class="icon"> <i class="ion-code"></i> </div>
                <h5 class="margin-top-30 margin-bottom-10">Web development</h5>
                <p>Takin' a break from all your worries sure would help a lot. Sunny Days sweepin' the clouds away. On 
                  my way to where the air is sweet. </p>
                <a href="#." class="waves-effect waves-ripple btn">read more</a> </article>
            </li>
            
            <!-- Services -->
            <li class="col-md-4">
              <article class="z-depth-1">
                <div class="icon"> <i class="icon-graph"></i> </div>
                <h5 class="margin-top-30 margin-bottom-10">Web analytics</h5>
                <p>Takin' a break from all your worries sure would help a lot. Sunny Days sweepin' the clouds away. On 
                  my way to where the air is sweet. </p>
                <a href="#." class="waves-effect waves-ripple btn">read more</a> </article>
            </li>
          </ul>
        </div>
      </div>
    </section>
    
    <!-- TEAM MEMBER -->
    <section class="explore-tabs purple-bg padding-top-100">
      <div class="container"> 
        
        <!-- Nav tabs -->
        <ul class="nav nav-pills padding-bottom-50" role="tablist">
          <li role="presentation" class="active"><a href="#branch" role="tab" data-toggle="tab"><i class="icon-puzzle"></i> Elegant Design
            <hr>
            </a></li>
          <li role="presentation"><a href="#project" role="tab" data-toggle="tab"><i class="icon-layers"></i> different layout
            <hr>
            </a></li>
          <li role="presentation"><a href="#news" role="tab" data-toggle="tab"><i class="icon-diamond"></i> unique elements
            <hr>
            </a></li>
          <li role="presentation"><a href="#contact" role="tab" data-toggle="tab"><i class="icon-emoticon-smile"></i> user friendly
            <hr>
            </a></li>
        </ul>
      </div>
      <div class="light-gray-bg padding-top-100">
        <div class="container"> 
          <!-- Tab panes -->
          <div class="tab-content"> 
            
            <!-- Branch -->
            <div role="tabpanel" class="tab-pane fade in active" id="branch">
              <div class="row">
                <div class="col-md-5">
                  <h4 class="text-uppercase margin-bottom-30 letter-space-1 margin-top-20">Elegant Design</h4>
                  <p>That's just a little bit more than the law will allow. In 1972 a crack commando unit was sent to prison by a military court for a crime they didn't commit.</p>
                  <p>These Happy Days are yours and mine Happy Days. Just sit right back and you'll hear a tale a tale of a fateful trip that started from this tropic port aboard this tiny ship. Goodbye gray sky hello blue. There's nothing can hold me when I hold you. </p>
                  <a href="#." class="waves-effect waves-light btn btn-white margin-top-30 margin-right-20">contact us</a> <a href="#." class="waves-effect waves-ripple btn margin-top-30 margin-left-20">purchase now</a> </div>
                <div class="col-md-7"> <img src="images/ipad-large.png" alt="" > </div>
              </div>
            </div>
            
            <!-- project -->
            <div role="tabpanel" class="tab-pane fade" id="project">
              <div class="row">
                <div class="col-md-5">
                  <h4 class="text-uppercase margin-bottom-30 letter-space-1 margin-top-20">Different layout</h4>
                  <p>That's just a little bit more than the law will allow. In 1972 a crack commando unit was sent to prison by a military court for a crime they didn't commit.</p>
                  <p>These Happy Days are yours and mine Happy Days. Just sit right back and you'll hear a tale a tale of a fateful trip that started from this tropic port aboard this tiny ship. Goodbye gray sky hello blue. There's nothing can hold me when I hold you. </p>
                  <a href="#." class="waves-effect waves-light btn btn-white margin-top-30 margin-right-20">contact us</a> <a href="#." class="waves-effect waves-ripple btn margin-top-30 margin-left-20">purchase now</a> </div>
                <div class="col-md-7"> <img src="images/ipad-large.png" alt="" > </div>
              </div>
            </div>
            
            <!-- news -->
            <div role="tabpanel" class="tab-pane fade" id="news">
              <div class="row">
                <div class="col-md-5">
                  <h4 class="text-uppercase margin-bottom-30 letter-space-1 margin-top-20">unique elements</h4>
                  <p>That's just a little bit more than the law will allow. In 1972 a crack commando unit was sent to prison by a military court for a crime they didn't commit.</p>
                  <p>These Happy Days are yours and mine Happy Days. Just sit right back and you'll hear a tale a tale of a fateful trip that started from this tropic port aboard this tiny ship. Goodbye gray sky hello blue. There's nothing can hold me when I hold you. </p>
                  <a href="#." class="waves-effect waves-light btn btn-white margin-top-30 margin-right-20">contact us</a> <a href="#." class="waves-effect waves-ripple btn margin-top-30 margin-left-20">purchase now</a> </div>
                <div class="col-md-7"> <img src="images/ipad-large.png" alt="" > </div>
              </div>
            </div>
            
            <!-- contact -->
            <div role="tabpanel" class="tab-pane fade" id="contact">
              <div class="row">
                <div class="col-md-5">
                  <h4 class="text-uppercase margin-bottom-30 letter-space-1 margin-top-20">user friendly</h4>
                  <p>That's just a little bit more than the law will allow. In 1972 a crack commando unit was sent to prison by a military court for a crime they didn't commit.</p>
                  <p>These Happy Days are yours and mine Happy Days. Just sit right back and you'll hear a tale a tale of a fateful trip that started from this tropic port aboard this tiny ship. Goodbye gray sky hello blue. There's nothing can hold me when I hold you. </p>
                  <a href="#." class="waves-effect waves-light btn btn-white margin-top-30 margin-right-20">contact us</a> <a href="#." class="waves-effect waves-ripple btn margin-top-30 margin-left-20">purchase now</a> </div>
                <div class="col-md-7"> <img src="images/ipad-large.png" alt="" > </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- PROMO -->
    <section class="promo text-center padding-bottom-100 padding-top-100" style="background:url(images/bg/promo-bg.jpg) no-repeat;">
      <div class="container">
        <h6>We have used latest Technology</h6>
        <h3>True Material Design For Your Business</h3>
        <a href="#." class="waves-effect waves-light btn btn-white margin-right-20">purchase now</a> <a href="#." class="waves-effect waves-ripple btn margin-left-20">purchase now</a> </div>
    </section>
    
    <!-- PORTFOLIO -->
    <section class="portfolio port-wrap padding-bottom-100 padding-top-100">
      <div class="container"> 
        <!-- HEADING BLOCK -->
        <div class="heading-block text-center margin-bottom-80">
          <h3 class=" no-margin">Our Latest Works</h3>
          <hr>
          <span class=" margin-top-20">The weather started getting rough - the tiny ship was tossed. If not for the courage of the fearless crew the Minnow would be lost. the Minnow always wanted to have a neighbor just like you. I've always wanted to live in a neighborhood with you. </span> </div>
        
        <!-- PORTFOLIO ITEMS -->
        <div class="items row col-3 with-space"> 
          
          <!-- ITEM -->
          <article class="portfolio-item pf-web-design">
            <div class="portfolio-image"> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/img-2-1.jpg"> <a href="images/portfolio/img-2-1.jpg" data-rel="prettyPhoto" class="prettyPhoto lightzoom zoom"><i class="ion-ios-search"></i></a>
              <div class="portfolio-overlay style-2">
                <div class="detail-info">
                  <h3><a href="portfolio-single.html">Boulangerie product design</a></h3>
                  <span><a href="portfolio-single.html">Branding & Wed Design</a></span> </div>
              </div>
            </div>
          </article>
          
          <!-- ITEM -->
          <article class="portfolio-item pf-photography pf-branding-design">
            <div class="portfolio-image"> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/img-2-2.jpg"> <a href="images/portfolio/img-2-2.jpg" data-rel="prettyPhoto" class="prettyPhoto lightzoom zoom"><i class="ion-ios-search"></i></a>
              <div class="portfolio-overlay style-2">
                <div class="detail-info">
                  <h3><a href="portfolio-single.html">Boulangerie product design</a></h3>
                  <span><a href="portfolio-single.html">Branding & Wed Design</a></span> </div>
              </div>
            </div>
          </article>
          
          <!-- ITEM -->
          <article class="portfolio-item pf-web-design pf-branding-design">
            <div class="portfolio-image"> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/img-2-3.jpg"> <a href="images/portfolio/img-2-3.jpg" data-rel="prettyPhoto" class="prettyPhoto lightzoom zoom"><i class="ion-ios-search"></i></a>
              <div class="portfolio-overlay style-2">
                <div class="detail-info">
                  <h3><a href="portfolio-single.html">Boulangerie product design</a></h3>
                  <span><a href="portfolio-single.html">Branding & Wed Design</a></span> </div>
              </div>
            </div>
          </article>
          
          <!-- ITEM -->
          <article class="portfolio-item pf-web-design pf-digital-art ">
            <div class="portfolio-image"> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/img-2-4.jpg"> <a href="images/portfolio/img-2-4.jpg" data-rel="prettyPhoto" class="prettyPhoto lightzoom zoom"><i class="ion-ios-search"></i></a>
              <div class="portfolio-overlay style-2">
                <div class="detail-info">
                  <h3><a href="portfolio-single.html">Boulangerie product design</a></h3>
                  <span><a href="portfolio-single.html">Branding & Wed Design</a></span> </div>
              </div>
            </div>
          </article>
          
          <!-- ITEM -->
          <article class="portfolio-item pf-web-design pf-digital-art ">
            <div class="portfolio-image"> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/img-2-5.jpg"> <a href="images/portfolio/img-2-5.jpg" data-rel="prettyPhoto" class="prettyPhoto lightzoom zoom"><i class="ion-ios-search"></i></a>
              <div class="portfolio-overlay style-2">
                <div class="detail-info">
                  <h3><a href="portfolio-single.html">Boulangerie product design</a></h3>
                  <span><a href="portfolio-single.html">Branding & Wed Design</a></span> </div>
              </div>
            </div>
          </article>
          
          <!-- ITEM -->
          <article class="portfolio-item pf-web-design pf-digital-art ">
            <div class="portfolio-image"> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/img-2-6.jpg"> <a href="images/portfolio/img-2-6.jpg" data-rel="prettyPhoto" class="prettyPhoto lightzoom zoom"><i class="ion-ios-search"></i></a>
              <div class="portfolio-overlay style-2">
                <div class="detail-info">
                  <h3><a href="portfolio-single.html">Boulangerie product design</a></h3>
                  <span><a href="portfolio-single.html">Branding & Wed Design</a></span> </div>
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>
    
    <!-- PROMO -->
    <section class="promo pink-bg padding-bottom-60 padding-top-60">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h3 class="text-white text-uppercase no-margin">Do you want to   discuss wth us?</h3>
          </div>
          <div class="col-md-5 text-right"> <a href="#." class="waves-effect waves-light btn  btn-white margin-right-20">contact us</a> <a href="#." class="waves-effect btn btn-blue margin-left-20">purchase now</a> </div>
        </div>
      </div>
    </section>
    
    <!-- TESTIMONIALS -->
    <section class="padding-bottom-100 padding-top-100">
      <div class="container"> 
        <!-- HEADING BLOCK -->
        <div class="heading-block text-center margin-bottom-80">
          <h3>Our Work Process</h3>
          <hr>
          <span class=" margin-top-20">The weather started getting rough - the tiny ship was tossed. If not for the courage of the fearless crew the Minnow would be lost. the Minnow always wanted to have a neighbor just like you. I've always wanted to live in a neighborhood with you. </span> </div>
        <div class="work-process">
          <ul class="icon-follow">
            <li>
              <div class="icon"> <i class="icon-bulb"></i> </div>
              <h6 class="text-uppercase">Ideas</h6>
            </li>
            <li>
              <div class="icon"> <i class="icon-puzzle"></i> </div>
              <h6 class="text-uppercase">plans</h6>
            </li>
            <li>
              <div class="icon"> <i class="icon-pencil"></i> </div>
              <h6 class="text-uppercase">Design</h6>
            </li>
            <li>
              <div class="icon"> <i class="icon-layers"></i> </div>
              <h6 class="text-uppercase">development</h6>
            </li>
            <li>
              <div class="icon"> <i class="icon-rocket"></i> </div>
              <h6 class="text-uppercase">launch</h6>
            </li>
          </ul>
          <p class="into-type"> And they're always glad you came. And you know where you were then. Girls were girls and men were men. Mister we could use a man like Herbert Hoover again. They call him Flipper Flipper faster than lightning.</p>
          <div class="text-center margin-top-30"> <img class="img-responsive" src="images/iphone-landscape.png" alt=""> </div>
        </div>
      </div>
    </section>
    
    <!-- TESTIMONIALS -->
    <section class="testimonial style-2 light-gray-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="pink-bg padding-left-40 padding-right-40 padding-top-80 padding-bottom-80">
              <h6 class="text-uppercase text-white letter-space-2 margin-bottom-40 font-16px font-normal">We love our clients</h6>
              <p class="text-white line-height-28">The Brady Bunch the Brady Bunch that's the way we all became the Brady Bunch. Come and listen to a story about a man named Jed mountaineer barely kept his family fed. Just sit right back and you'll.</p>
              <a href="#." class="waves-effect waves-light btn  btn-white margin-right-20 margin-top-50"> get a quote</a> </div>
          </div>
          
          <!-- Slider -->
          <div class="col-md-8">
            <div class="single-slides"> 
              
              <!-- Slider item -->
              <div class="item">
                <div class="avatar"> <img src="images/avatar.jpg" alt="" > </div>
                <div class="stars"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> </div>
                <p>Friendly neighbors there that's where we meet. Can you tell me how to get how to get to Sesame Street! Here's the story of a lovely lady who was bringing up three very lovely girls. Said Californ'y is the place you ought to be 
                  So they loaded up the truck and moved to Beverly. Hills that is stars.</p>
                <h6>Micheal Anderson</h6>
              </div>
              
              <!-- Slider item -->
              <div class="item">
                <div class="avatar"> <img src="images/avatar.jpg" alt="" > </div>
                <div class="stars"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> </div>
                <p>Friendly neighbors there that's where we meet. Can you tell me how to get how to get to Sesame Street! Here's the story of a lovely lady who was bringing up three very lovely girls. Said Californ'y is the place you ought to be 
                  So they loaded up the truck and moved to Beverly. Hills that is stars.</p>
                <h6>Micheal Anderson</h6>
              </div>
              
              <!-- Slider item -->
              <div class="item">
                <div class="avatar"> <img src="images/avatar.jpg" alt="" > </div>
                <div class="stars"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> </div>
                <p>Friendly neighbors there that's where we meet. Can you tell me how to get how to get to Sesame Street! Here's the story of a lovely lady who was bringing up three very lovely girls. Said Californ'y is the place you ought to be 
                  So they loaded up the truck and moved to Beverly. Hills that is stars.</p>
                <h6>Micheal Anderson</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="padding-top-100 padding-bottom-100">
      <div class="container"> 
        <!-- HEADING BLOCK -->
        <div class="heading-block text-center margin-bottom-80">
          <h3>Our Expert Team Members</h3>
          <hr>
          <span class=" margin-top-20">The weather started getting rough - the tiny ship was tossed. If not for the courage of the fearless crew the Minnow would be lost. the Minnow always wanted to have a neighbor just like you. I've always wanted to live in a neighborhood with you. </span> </div>
      </div>
      
      <!-- Team -->
      <div class="expert-team">
        <div class="container">
          <ul class="row">
            <!-- TEAM MEMBER -->
            <li class="col-md-3">
              <article class="z-depth-1 padding-30">
                <div class="img-circle"> <img src="images/team-img-1.jpg" alt="">
                  <h5>James Hopper</h5>
                  <span>Lead Developer</span>
                  <p>We finally got a piece of the pie. Makin' your way in the world today week long.</p>
                  <ul class="social-icons">
                    <li><a href="#."><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#."><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#."><i class="fa fa-google"></i></a></li>
                  </ul>
                </div>
              </article>
            </li>
            
            <!-- TEAM MEMBER -->
            <li class="col-md-3">
              <article class="z-depth-1 padding-30">
                <div class="img-circle"> <img src="images/team-img-1.jpg" alt="">
                  <h5>martin guptil</h5>
                  <span>web Developer</span>
                  <p>We finally got a piece of the pie. Makin' your way in the world today week long.</p>
                  <ul class="social-icons">
                    <li><a href="#."><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#."><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#."><i class="fa fa-google"></i></a></li>
                  </ul>
                </div>
              </article>
            </li>
            
            <!-- TEAM MEMBER -->
            <li class="col-md-3">
              <article class="z-depth-1 padding-30">
                <div class="img-circle"> <img src="images/team-img-1.jpg" alt="">
                  <h5>andrew hilson</h5>
                  <span>Designer</span>
                  <p>We finally got a piece of the pie. Makin' your way in the world today week long.</p>
                  <ul class="social-icons">
                    <li><a href="#."><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#."><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#."><i class="fa fa-google"></i></a></li>
                  </ul>
                </div>
              </article>
            </li>
            
            <!-- TEAM MEMBER -->
            <li class="col-md-3">
              <article class="z-depth-1 padding-30">
                <div class="img-circle"> <img src="images/team-img-1.jpg" alt="">
                  <h5>robert jakis</h5>
                  <span>Marketing</span>
                  <p>We finally got a piece of the pie. Makin' your way in the world today week long.</p>
                  <ul class="social-icons">
                    <li><a href="#."><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#."><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#."><i class="fa fa-google"></i></a></li>
                  </ul>
                </div>
              </article>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="welcome padding-top-100 padding-bottom-100" style="background:url(images/bg/bg-1.jpg) no-repeat; background-size:cover;">
      <div class="container"> 
        
        <!-- Icon Row -->
        <div class="row">
          <div class="col-md-7">
            <ul class="row margin-top-50">
              
              <!-- Services -->
              <li class="col-md-6 margin-bottom-50">
                <div class="media">
                  <div class="media-left">
                    <div class="icon"> <i class="icon-rocket"></i> </div>
                  </div>
                  <div class="media-body">
                    <h5>multipurpose</h5>
                    <p>Takin' a break from all your wo ries sure would help a lot. </p>
                  </div>
                </div>
              </li>
              
              <!-- Services -->
              <li class="col-md-6 margin-bottom-50">
                <div class="media">
                  <div class="media-left">
                    <div class="icon"> <i class="icon-screen-smartphone"></i> </div>
                  </div>
                  <div class="media-body">
                    <h5>responsive</h5>
                    <p>Takin' a break from all your wo ries sure would help a lot. </p>
                  </div>
                </div>
              </li>
              
              <!-- Services -->
              <li class="col-md-6">
                <div class="media">
                  <div class="media-left">
                    <div class="icon"> <i class="icon-layers"></i> </div>
                  </div>
                  <div class="media-body">
                    <h5>business layout</h5>
                    <p>Takin' a break from all your wo ries sure would help a lot. </p>
                  </div>
                </div>
              </li>
              <li class="col-md-6">
                <div class="media">
                  <div class="media-left">
                    <div class="icon"> <i class="icon-support"></i> </div>
                  </div>
                  <div class="media-body">
                    <h5>full support</h5>
                    <p>Takin' a break from all your wo ries sure would help a lot. </p>
                  </div>
                </div>
              </li>
            </ul>
            <a href="#." class="waves-effect waves-light btn btn-white margin-top-50 margin-right-20">CONTACT US</a> <a href="#." class="waves-effect waves-ripple margin-top-50  btn margin-left-20">purchase now</a> </div>
        </div>
      </div>
    </section>
    <section class="padding-top-100 padding-bottom-100">
      <div class="container"> 
        
        <!-- HEADING BLOCK -->
        <div class="heading-block text-center margin-bottom-80">
          <h3>Choose Your Pricing</h3>
          <hr>
          <span class=" margin-top-20">The weather started getting rough - the tiny ship was tossed. If not for the courage of the fearless crew the Minnow would be lost. the Minnow always wanted to have a neighbor just like you. I've always wanted to live in a neighborhood with you. </span> </div>
        
        <!-- PLAN -->
        <div class="price-plan">
          <ul class="row">
            
            <!-- PLAN 1 -->
            <li class="col-md-3">
              <article class="z-depth-1 padding-bottom-40">
                <div class="head-price">
                  <h4>basic</h4>
                  <div class="price z-depth-1"> $50 </div>
                </div>
                <ul>
                  <li>3 Web Design</li>
                  <li> 5 Web Development</li>
                  <li> Free Hosting</li>
                  <li> SEO Optimization</li>
                  <li> 24/7 Support</li>
                  <li> WP Customization</li>
                  <li> Free Membership</li>
                </ul>
                <a href="#." class="waves-effect waves-light btn btn-white">read more</a> </article>
            </li>
            
            <!-- PLAN 2 -->
            <li class="col-md-3">
              <article class="z-depth-1 padding-bottom-40">
                <div class="head-price">
                  <h4>standard</h4>
                  <div class="price z-depth-1"> $100 </div>
                </div>
                <ul>
                  <li>3 Web Design</li>
                  <li> 5 Web Development</li>
                  <li> Free Hosting</li>
                  <li> SEO Optimization</li>
                  <li> 24/7 Support</li>
                  <li> WP Customization</li>
                  <li> Free Membership</li>
                </ul>
                <a href="#." class="waves-effect waves-light btn btn-white">read more</a> </article>
            </li>
            
            <!-- PLAN 3 -->
            <li class="col-md-3">
              <article class="z-depth-1 padding-bottom-40">
                <div class="head-price">
                  <h4>business</h4>
                  <div class="price z-depth-1"> $150 </div>
                </div>
                <ul>
                  <li>3 Web Design</li>
                  <li> 5 Web Development</li>
                  <li> Free Hosting</li>
                  <li> SEO Optimization</li>
                  <li> 24/7 Support</li>
                  <li> WP Customization</li>
                  <li> Free Membership</li>
                </ul>
                <a href="#." class="waves-effect waves-light btn btn-white">read more</a> </article>
            </li>
            
            <!-- PLAN 3 -->
            <li class="col-md-3">
              <article class="z-depth-1 padding-bottom-40">
                <div class="head-price">
                  <h4>unlimited</h4>
                  <div class="price z-depth-1"> $250 </div>
                </div>
                <ul>
                  <li>3 Web Design</li>
                  <li> 5 Web Development</li>
                  <li> Free Hosting</li>
                  <li> SEO Optimization</li>
                  <li> 24/7 Support</li>
                  <li> WP Customization</li>
                  <li> Free Membership</li>
                </ul>
                <a href="#." class="waves-effect waves-light btn btn-white">read more</a> </article>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!-- News Letter -->
    <div class="container">
      <section class="news-letter">
        <div class="row">
          <div class="col-md-6">
            <h5>Subscribe to our newsletter</h5>
            <p>You can unsubscribe anytime you want</p>
          </div>
          <div class="col-md-6">
            <form>
              <input type="email" class="z-depth-1" placeholder="Email address" required>
              <button type="submit" class="btn waves-effect waves-light">subscribe</button>
            </form>
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- End Content --> 
   
  

  
  <!-- Footer -->
  
  <footer>
    <div class="container">
      <div class="row"> 
        
        <!-- About -->
        <div class="col-md-3"> <img class="margin-bottom-20" src="images/logo-footer.png" alt="" >
          <p>Said Californ'y is the place you ought to be So they loaded up the truck and moved to Beverly. Hills that is.</p>
          
          <!-- Social Icon -->
          <ul class="social-icons">
            <li><a href="#."><i class="fa fa-facebook"></i></a></li>
            <li><a href="#."><i class="fa fa-twitter"></i></a></li>
            <li><a href="#."><i class="fa fa-google"></i></a></li>
            <li><a href="#."><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#."><i class="fa fa-dribbble"></i></a></li>
          </ul>
        </div>
        
        <!-- Our Services -->
        <div class="col-md-3">
          <h5>Our Services</h5>
          <ul class="links">
            <li><a href="#.">Wed Design</a></li>
          </ul>
        </div>
        
        <!-- useful links -->
        <div class="col-md-3">
          <h5>useful links</h5>
          <ul class="links">
            <li><a href="#.">About us</a></li>
          </ul>
        </div>
      </div>
      
      <!-- Links -->
      <ul class="bottom-links">
        <li><a href="#.">Home </a></li>
        <li><a href="#."> about us </a></li>
        <li><a href="#."> services </a></li>
        <li><a href="#."> Portfolio</a></li>
        <li><a href="#."> blog </a></li>
        <li><a href="#."> contact us</a></li>
      </ul>
      
      <!-- Rights -->
      <div class="rights">
        <p>© 2015 All Rights Reserved</p>
      </div>
    </div>
  </footer>
  <!-- End Footer --> 
</div>
<!-- End Page Wrapper --> 

<!-- JavaScripts --> 
<script src="js/vendors/jquery/jquery.min.js"></script> 
<script src="js/vendors/wow.min.js"></script> 
<script src="js/vendors/bootstrap.min.js"></script> 
<script src="js/vendors/materialize.min.js"></script> 
<script src="js/vendors/own-menu.js"></script> 
<script src="js/vendors/jquery.prettyPhoto.js"></script> 
<script src="js/vendors/flexslider/jquery.flexslider-min.js"></script> 
<script src="js/vendors/jquery.isotope.min.js"></script> 
<script src="js/vendors/owl.carousel.min.js"></script> 

<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script src="js/rsplugin/js/jquery.themepunch.tools.min.js"></script> 
<script src="js/rsplugin/js/jquery.themepunch.revolution.min.js"></script> 
<script src="js/main.js"></script>
</body>
</html>