<?php
/*
Template Name: PF
*/

function myScripts() {  
        wp_register_script( 'google', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.js' );  
        wp_register_script( 'default', get_template_directory_uri() . '/jquery.js' );
        wp_register_script( 'jQuery', get_template_directory_uri() . 'js/jquery.1.11.1.js' );
        wp_register_script( 'bootstrap', get_template_directory_uri() . 'js/bootstrap.js' );
        wp_register_script( 'SmoothScroll', get_template_directory_uri() . 'js/SmoothScroll.js' );
        wp_register_script( 'prettyPhoto', get_template_directory_uri() . 'js/jquery.prettyPhoto.js' );
        wp_register_script( 'isotope', get_template_directory_uri() . 'js/jquery.isotope.js' );
        wp_register_script( 'counterup', get_template_directory_uri() . 'js/jquery.counterup.js' );
        wp_register_script( 'waypoints', get_template_directory_uri() . 'js/waypoints.js' );
        wp_register_script( 'jqBootstrapValidation', get_template_directory_uri() . 'js/jqBootstrapValidation.js' );
        wp_register_script( 'contact_me', get_template_directory_uri() . 'js/contact_me.js' );
        wp_register_script( 'owl', get_template_directory_uri() . 'js/owl.carousel.js' );
        wp_register_script( 'main', get_template_directory_uri() . 'js/main.js' );

        wp_register_style( 'default', get_template_directory_uri() . 'css/style.css' );
        wp_register_style( 'pp', get_template_directory_uri() . 'css/prettyPhoto.css' );
        wp_register_style( 'owl', get_template_directory_uri() . 'css/owl.carousel.css' );
        wp_register_style( 'owl1', get_template_directory_uri() . 'css/owl.theme.css' );
        wp_register_style( 'bootstrap', get_template_directory_uri() . 'css/bootstrap.css' );
        wp_register_style( 'fonts', get_template_directory_uri() . 'fonts/font-awesome/css/font-awesome.css' );
        wp_register_style( 'icon', get_template_directory_uri() . 'fonts/sns_fonts/iconfont.css' );



    if ( !is_admin() ) { /** Load Scripts and Style on Website Only */  
        wp_deregister_script( 'jquery' );  
        wp_enqueue_script( 'jQuery' );  
        wp_enqueue_script( 'bootstrap' );
        wp_enqueue_script( 'SmoothScroll' );
        wp_enqueue_script( 'prettyPhoto' );
        wp_enqueue_script( 'isotope' );
        wp_enqueue_script( 'counterup' );
        wp_enqueue_script( 'waypoints' );
        wp_enqueue_script( 'jqBootstrapValidation' );
        wp_enqueue_script( 'contact_me' );
        wp_enqueue_script( 'owl' );
        wp_enqueue_script( 'main' );


        wp_enqueue_style( 'default' );
        wp_enqueue_style( 'pp' ); 
        wp_enqueue_style( 'owl' ); 
        wp_enqueue_style( 'owl1' ); 
        wp_enqueue_style( 'bootstrap' ); 
        wp_enqueue_style( 'fonts' );
        wp_enqueue_style( 'icon' );    
    }  
}  
add_action( 'init', 'myScripts' );

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Resume of Quinn</title>
<meta name="description" content="My name is Quinn, a self-motivated passionate web developer">
<meta name="keywords" content="Quinn, Chengkun, Zhang, Resume" />
<meta name="author" content="Quinn">

<!-- Favicons
    ================================================== -->

<link rel="shortcut icon" href="img/favicon_jianli.ico" type="image/x-icon">


<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Slider
    ================================================== -->
<link href="css/owl.carousel.css" rel="stylesheet" media="screen">
<link href="css/owl.theme.css" rel="stylesheet" media="screen">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">

<link rel="stylesheet" type="text/css" href="fonts/sns_fonts/iconfont.css">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jquery.counterup.js"></script> 
<script type="text/javascript" src="js/waypoints.js"></script>
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script>
<script src="js/owl.carousel.js"></script>

<!-- Javascripts
    ================================================== --> 
<script type="text/javascript" src="js/main.js"></script>

<script>
 $(function()
 {
 var u = navigator.userAgent;
if (u.indexOf('Android') > -1 || u.indexOf('Linux') > -1||u.indexOf('iPhone') > -1||u.indexOf('Windows Phone') > -1||navigator.userAgent.indexOf("iPad")>-1) {
   $(".hover-bg .hover-text").css({'opacity':'1'});
   
   $(".hover-bg .hover-text>h4").css({'opacity':'1','-webkit-transform':'translateY(0)','transform':'translateY(0)'});
   
   $(".hover-bg .hover-text>i").css({'opacity':'1'});
} 
    
 });
  
</script>


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><i class="fa fa-terminal"></i>Web Developer</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">profile</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#works">project experience</a>
                    </li>                    
                    <li>
                        <a class="page-scroll" href="#about">Skills</a>
                    </li>                    
                    <li>
                        <a class="page-scroll" href="#team">work experience</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#testimonials">self description</a>
                    </li>                    
                    <li>
                        <a class="page-scroll" href="#contact">contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<!-- Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1>Resume<span class="brand-heading">-Web Developer</span></h1>
                        <p class="intro-text">Keep Going</p>
                        <a href="#services" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
<div class="copyrights">Quinn Resume <a href="http://www.zckpp2015.wordpress.com" >Web Developer</a></div>
<!-- Services Section -->
<div id="services" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Basic <strong>Info</strong></h2>
      <hr>
      </div>
    <div class="space"></div>
    <div class="row">
      <div class="col-md-3 col-sm-6 service"> <i class="fa fa-laptop"></i>
        <h4><strong>Me</strong></h4>
        <p>
    Quinn Zhang</br>
    Male
    </p>
      </div>
      <div class="col-md-3 col-sm-6 service"> <i class="fa fa-code"></i>
        <h4><strong>Education</strong></h4>
        <p>
    Master in Information Systems</br>
    Bachelor in Computer Science</br>
    
    </p>
      </div>
      <div class="col-md-3 col-sm-6 service"> <i class="fa fa-rocket"></i>
        <h4><strong>Graduate School</strong></h4>
        <p>
      University of Maryland College Park</br>
    </p>
      </div>
      <div class="col-md-3 col-sm-6 service"> <i class="fa fa-bullseye"></i>
        <h4><strong>Contact</strong></h4>
        <p>(301)272-0699</br>
      Mail: chengkun.zhang@rhsmith.umd.edu</p>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Section -->
<div id="works">
  <div class="container"> <!-- Container -->
    <div class="section-title text-center center">
      <h2>Project <strong>Experience</strong></h2>
      <hr>
      <div class="clearfix"></div>
      <p>HTML, CSS, Sass, Less, JavaScript, PHP, JQuery, Angular, Node, Drupal, WordPress</p>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a href="#" data-filter="*" class="active">All</a></li>
            <li><a href="#" data-filter=".web">Web</a></li>
            <li><a href="#" data-filter=".app">Mobile</a></li>
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="portfolio-items">

        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg">
              <div class="hover-text">
                <h4><a href='http://www.hhmi.org' target='_blank' title="hhmi">HHMI</a></h4>
                <small>html+css+js+PHP+Drupal</small>
                <div class="clearfix"></div>
                <i class="fa fa-search"></i> </div>
              <img src="img/portfolio/00.jpg" class="img-responsive" alt="HHMI"></div>
          </div>
        </div>
        
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg">
              <div class="hover-text">
                <h4><a href='http://www.hhmi.org/biointeractive/events#/mainView' target='_blank' title="Bio">HHMI-Biointeractive</a></h4>
                <small>html+css+Angular+PHP+Drupal</small>
                <div class="clearfix"></div>
                <i class="fa fa-search"></i> </div>
              <img src="img/portfolio/10.jpg" class="img-responsive" alt="Bio"></div>
          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg">
              <div class="hover-text">
                <h4><a href='http://www.govclear.com' target='_blank' title="govclear">govclear</a></h4>
                <small>html+css+js+wordpress</small>
                <div class="clearfix"></div>
                <i class="fa fa-search"></i> </div>
              <img src="img/portfolio/01.jpg" class="img-responsive" alt="govclear"></div>
          </div>
        </div>
    
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg">
              <div class="hover-text">
                <h4><a href="http://www.usaivyedu.com/" target='_blank' title="usaivy">usaivy</a></h4>
                <small>HTML+CSS+JS+PHP</small>
                <div class="clearfix"></div>
                <i class="fa fa-search"></i> </div>
              <img src="img/portfolio/02.jpg" class="img-responsive" alt="usaivy"></div>
          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-3 branding app web">
          <div class="portfolio-item">
            <div class="hover-bg">
              <div class="hover-text">
                <h4><a href="#" target='_blank' title="Android">Android application</a></h4>
                <small>Java Android SDK</small>
                <div class="clearfix"></div>
                <i class="fa fa-search"></i> </div>
              <img src="img/portfolio/07.jpg" class="img-responsive" alt="Android"></div>
          </div>
        </div>
<!--
        <div class="col-sm-6 col-md-3 col-lg-3 web app">
          <div class="portfolio-item">
      
            <div class="hover-bg"> 
              <div class="hover-text">
                <h4><a href='http://new.rzds.net/' target='_blank' title="软装大师">软装大师 </a></h4>
                <small>技术：Bootstrap+JQuery</small>
                <div class="clearfix"></div>
                <i class="fa fa-search"></i> 
        </div>
              <img src="img/portfolio/08.jpg" class="img-responsive" alt="软装大师">

        </div>

          </div>
        </div>
-->
      </div>
    </div>
  </div>
</div>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="section-title text-center center">
      <h2><strong>IT</strong> Skills</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-6"> <img src="img/about.png" class="img-responsive"> </div>
      <div class="col-md-6">
        <div class="about-text"> <i class="fa fa-users"></i>
          <div class="padding-left"><h4>Web</h4>
          <p>Proficient in HTML, CSS, Sass, Less, JavaScript, PHP, JQuery, Angular, Node, Drupal, WordPress</p></div>
          <i class="fa fa-magic"></i>
          <div class="padding-left"><h4>Data</h4>
          <p>Complex SQL queries, Excel Solver</p></div>
          <i class="fa fa-check-square-o"></i>
          <div class="padding-left"><h4>Back-end</h4>
          <p>Lamp, Wamp, Docker environment, MySQL management</p></div>
        </div>
      </div>
    </div>
  </div>
</div>
  <div id="achivements" class="section dark-bg">
      <div class="container"> 
        <div class="row">
          <div class="col-md-3 col-sm-3">
            <div class="achivement-box">
              <i class="fa fa-smile-o"></i>
              <span class="count">24</span>
              <h4>Age Years</h4>                            
            </div>
          </div> 
          <div class="col-md-3 col-sm-3">
            <div class="achivement-box">
              <i class="fa fa-code"></i>
              <span class="count">10000</span>
              <h4>Code Amount</h4>                            
            </div>
          </div> 
          <div class="col-md-3 col-sm-3">
            <div class="achivement-box">
              <i class="fa fa-check-square-o"></i>
              <span class="count">4800</span>
                            <h4>Work Hour</h4>
            </div>
          </div> 
          <div class="col-md-3 col-sm-3">
            <div class="achivement-box">
              <i class="fa fa-trophy"></i>
              <span class="count">5</span>
              <h4>Projects Amount</h4>                            
            </div>
          </div> 
        </div>
      </div>
    </div>
<!-- Team Section -->
<div id="team" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2><strong>Experience</strong></h2>
      <hr>
      <p>Passionate about web development, pay attention to detail</p>
    </div>
    <div id="row">

        <div class="col-md-3 col-sm-6">
        <div class="thumbnail"> <img src="img/team/00.png" alt="HHMI" class="img-circle team-img">
          <div class="caption">
            <h3>HHMI</h3>
            <p>Web developer intern</p>
            <p>Redesigned and maintained hhmi.org Developed font-end, back-end and responsive design</p>
          </div>
        </div>
      </div>
  
      <div class="col-md-3 col-sm-6">
        <div class="thumbnail"> <img src="img/team/02.jpg" alt="govclear" class="img-circle team-img">
          <div class="caption">
            <h3>GovCLEAR</h3>
            <p>Web developer intern</p>
            <p>Built and managed govclear.com Developed font-end, back-end and responsive design</p>
          </div>
        </div>
      </div>
  
      <div class="col-md-3 col-sm-6">
        <div class="thumbnail"> <img src="img/team/01.jpg" alt="Inovalon" class="img-circle team-img">
          <div class="caption">
            <h3>Inovalon</h3>
            <p>Data analyst intern</p>
            <p>Data cleaning and mining using complex SQL queries based on Hadoop Hive</p>
          </div>
        </div>
      </div>
    
  
      <div class="col-md-3 col-sm-6">
        <div class="thumbnail"> <img src="img/team/03.jpg" alt="UMD" class="img-circle team-img">
          <div class="caption">
            <h3>University of Maryland</h3>
            <p>Information Systems</p>
            <p>Database Management, Data Mining, Big Data, Project Management</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="thumbnail"> <img src="img/team/04.jpg" alt="UESTC" class="img-circle team-img">
          <div class="caption">
            <h3>UESTC</h3>
            <p>Computer Science</p>
            <p>C, Java, SQL, Data Structure</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- Testimonials Section -->
<div id="testimonials" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2><strong>Self-evaluation</strong></h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div id="testimonial" class="owl-carousel owl-theme">
          <div class="item">       
            <p>
      Great passion in Web development</br>Life long learner
      </p>
          </div>
          <div class="item">
            <p>
      Reliable Team-player</br>Positive attitude under stress
      </p>
          </div>
          <div class="item">
            <p>
      Strong can-do attitude</br>Serious at work, easy-going in life
      </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2><strong>Contact</strong></h2>
      <hr>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <div class="col-md-4"> <i class="fa fa-map-marker fa-2x"></i>
        <p>5325 Westbard Ave, Bethesda, MD, 20816</p>
      </div>
      <div class="col-md-4"> <i class="fa fa-envelope-o fa-2x"></i>
        <p>chengkun.zhang@rhsmith.umd.edu</p>
      </div>
      <div class="col-md-4"> <i class="fa fa-phone fa-2x"></i>
        <p>(301)272-0699</p>
      </div>
      <hr>
      <div class="clearfix"></div>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <hr>
      <h3>Email</h3>
      <form name="sentMessage" id="contactForm" novalidate>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" class="form-control" placeholder="Name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" class="form-control" placeholder="Mail" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder="content" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-default">submit</button>
      </form>
    </div>
  </div>
</div>
</div>
<nav id="footer">
  <div class="container">
    <div class="pull-left fnav">
    </div>
<!--
    <div class="pull-right fnav">
      <ul class="footer-social">
      <li><a href="http://v.t.sina.com.cn/share/share.php?url=http://blog.youzewang.com/jianli&title=Baron简历"><i class="icon iconfont">&#xe66e;</i></a></li>
        <li><a href="http://connect.qq.com/widget/shareqq/index.html?url=http://blog.youzewang.com/jianli=&title=Baron简历"> <i class="icon iconfont">&#xe629;</i></a></li>
        <li><a href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=http://blog.youzewang.com/jianli&title=Baron简历"> <i class="icon iconfont">&#xe616;</i></a></li>

        <li><a href="http://share.renren.com/share/buttonshare.do?link=http://blog.youzewang.com/jianli&title=Baron简历"><i class="icon iconfont">&#xe66b;</i></a></li>
      </ul>
    </div>
-->
  </div>
</nav>


</body>
</html>