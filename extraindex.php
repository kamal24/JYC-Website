<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
	<head>
	<title>JYC PORTAL</title>
	<meta charset="utf-8">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <meta name="description" content="jyc is organisation clubs of juit">
    <meta name="keywords" content="this is used for some events">
    <meta name="author" content="kamal" >  
      <link href="assets/css/camera.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="3DBook/css/default.css" />
		<link rel="stylesheet" type="text/css" href="3DBook/css/component.css" />
		 
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style1.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/kwicks-slider.css" type="text/css" media="screen">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery.js"></script>
	
    <script type="text/javascript" src="js/superfish.js"></script>
<!--	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script> -->
	<script type="text/javascript" src="js/jquery.kwicks-1.5.1.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.cookie.js"></script> 
	<!--<script type="text/javascript" src="js/touchTouch.jquery.js"></script>-->
	<script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>
	<script type="text/javascript" src="js/jquery.webticker.js"></script>
	<link rel="stylesheet" href="assets/webticker.css" type="text/css" media="screen"> 
	<!--
	<script src="js/jquery.ticker.js" type="text/javascript"></script>
<script src="js/site.js" type="text/javascript"></script>
<link href="css/ticker-style.css" rel="stylesheet" type="text/css" />-->
	<script type="text/javascript">if($(window).width()>1024){document.write("<"+"script src='js/jquery.preloader.js'></"+"script>");}	</script>

	<script>		
/*
		 jQuery(window).load(function() {	
		 $x = $(window).width();		
	if($x > 1024)
	{			
	jQuery("#content .row").preloader();    }	
		 
    // jQuery('.magnifier').touchTouch();		
    jQuery('.spinner').animate({'opacity':0},1500,'easeOutCubic',function (){jQuery(this).css('display','none')});	
  		  }); 
		*/		
	</script>
	

	<!--[if lt IE 8]>
  		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
 	<![endif]-->
	<!--[if (gt IE 9)|!(IE)]><!-->
	<!--<![endif]-->
	<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/docs.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
  <![endif]-->
  
  <!--Google analytics code-->	  
	  <script type="text/javascript">
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-29231762-1']);
          _gaq.push(['_setDomainName', 'dzyngiri.com']);
          _gaq.push(['_trackPageview']);
        
          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();
      </script>
      
     <style type="text/css">
       #loadcont{display:none; position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  background: url(loading.gif) 50% 50% no-repeat #fff;
  z-index:9999999999999;
   opacity: 0.5;  
  }
      </style>
      
      	<link href="css/style2.css?v=2011-04-25" rel="stylesheet" type="text/css" />
	<link href="css/ticker-style.css" rel="stylesheet" type="text/css" />
	 
	<script src="js/jquery.ticker.js" type="text/javascript"></script>
	<script src="js/site.js" type="text/javascript"></script>
         
      <script type="text/javascript">
    /*
        setTimeout(linkclick
            
        , 100);*/
  
   
 
      $(document).ready(function linkclick(){
      	
         web="home.php";
       $.ajax({url:web,success:function(result){
    
       
      $("#header1").html(result);
      
    	
    },complete:function(){ $x = $(window).width();		
	if($x > 1024)
	{			
	jQuery("#content .row").preloader();    
    }	
		 
    /* jQuery('.magnifier').touchTouch();	*/		
    jQuery('.spinner').animate({'opacity':0.5},1000,'easeOutCubic',function (){jQuery(this).css('display','none')});	

			/*window.responsiveFlag = jQuery('#responsiveFlag').css('display');*/
			Main.gallery = new Gallery();
			Main.gallery.update();
			
    }
});

      $('head').prepend('<link rel="stylesheet" href="css/docs.css" type="text/css" media="screen">');
$('body').prepend('<div id="panel"><div class="navbar navbar-inverse navbar-fixed-top" id="advanced"><span class="trigger"><strong></strong><em></em></span><div class="navbar-inner"><div class="container"><button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-top-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="brand link" class="" href="#" alt="1" style="color:green">JYC</a><div class="nav-collapse collapse nav-top-collapse"><ul class="nav"><li class="home"><a class="link" alt="1" href="#"><img src="img/tm/tm_home.png"></li><li class="divider-vertical"></li><li class=""><a class="link" alt="3" href="#">Clubs</a></li><li class=""><a class="link" alt="9" href="#">Images</a></li><li><a class="link" alt="8" href="#">Videoes</a></li><li class=""><a class="link" alt="5" href="#">Contact Us</a></li><li class="divider-vertical"></li><li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Others<b class="caret"></b></a><ul class="dropdown-menu"><li><a href="404.html">Pages</a><ul><li><a href="assets/under_construction.html">Under Construction</a></li><li><a href="assets/intro.html">Intro Page</a></li><li><a href="404.html">404 page</a></li></ul></li><li><a class="link" alt="6" href="#">Office Bearers</a></li><li><a class="link" alt="10" href="#">Web Team</a></li><li><a class="link" alt="7" href="#">Knowledge Sharing</a></li><li><a class="link" alt="4" href="#">Committies</a></li></ul></li></ul></div></div></div></div></div>');
    
   
    
  $(".link").click(function(){
  //	var hash = window.location.hash;
  	 
    //hash = window.location.href.split('/')[1];
    var url = window.location.href,
    hash = url.split(':')[1];
    hash1= hash.split('/')[3];
    index=hash1.indexOf("#");
    
    if (index!=-1) {
	hash1=hash1.substring(0,index);
}
  	//var hash1=$('ul'+hash+':first').show();
  	//	var url = "http://site.com/file.htm#foo";
//var hash = url.substring(url.indexOf('/'));
   alert(hash1);
  
  	  $('#loadcont').fadeIn(500);
     var page = $(this).attr('alt');
         $("a").parent().removeClass('active');
       $(this).parent().addClass('active');
       	
     
       
       var web="";
       if (page==1) {
	       web="home.php";
	       
         }
         
         if (page==2) {
	       web="about.php";
	       
         }
         
         if (page==3) {
	       web="assets/css3.php";
         }
         
         if (page==4) {
         	
	       web="CaptionHover/newcss3.php";
	       //web="slider.php";
         }
         
         if (page==5) {
	       web="contact.php";
         }
         
         if (page==6) {
	       web="assets/portfolio.php";
         }
     
        if(page==7){
          web="core/knowledge@juit/default.php";        
        }
    
       if(page==8){
          web="videowork.php";        
        }
    
      
       if(page==9){
         //web="book.php";   
         web="work.php";  
       //  
       //web="3DBook/webteam.php"; 
       //web="trial/index.html";
       //web="about.php";
        }
      
       if(page==10){
         //web="book.php";   
        // web="work.php";  
       //  
       web="3DBook/webteam.php"; 
       //web="trial/index.html";
       //web="about.php";
        }
       /* $(".bg-content").load(web);*/
       //  setTimeout('linkclick()',2000); 
 
    $.ajax({url:web,success:function(result){
    
       
    $("#header1").html(result);
     $('#loadcont').fadeOut(500);
	
    
    },
    
   
     

complete:function() {

            	 $x = $(window).width();		
	if($x > 1024)
	{			
	jQuery("#content .row").preloader();    
    }	
		 
    /* jQuery('.magnifier').touchTouch();	*/		
    jQuery('.spinner').animate({'opacity':0.5},1000,'easeOutCubic',function (){jQuery(this).css('display','none')});	

			/*window.responsiveFlag = jQuery('#responsiveFlag').css('display');*/
			Main.gallery = new Gallery();
			Main.gallery.update();
			
			 /*  jQuery('#camera_wrap_1').camera({
        thumbnails: true
      });*/
         if (page==4 || page==3 || page==1) {
	  jQuery('#camera_wrap_2').camera({
        height: '400px',
        loader: 'bar',
        pagination: false,
        thumbnails: true
      });
      }
       
     
     
      if(page==5){
			 $('#contact-form').forms({
 	     ownerEmail:'#'
 	     })
			}
            
	   if(page==10){
		Books.init();
		
		}
	
	
     }
     
    });
    
    
    

  });
 
});

</script>
</head>

	<body>
  <div class="spinner"></div> 
    <img style="" src="" id="loadcont" height="100" width="100"/>
<!-- header start -->

    <header style="z-index: 50;">
      <div class="container clearfix">
    <div class="row">
          <div class="span12">
        <div class="navbar navbar_">
              <div class="container">
           <h1 class="brand brand_"><a  class="link" href="#" alt="1"><img alt="" src="img/logo.png"> </a></h1>
            <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_" style="color:black">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
                  <ul class="nav sf-menu">
                <li class="active"><a class="link" href="#home#kaml" alt="1">Home</a></li>
                <li ><a  href="#"  class="link" alt="2">About</a></li>
                <li><a href="#" class="link" alt="3">Clubs</a></li>
                <li><a href="#" class="link" alt="4">Committies</a></li>
                 
                <li class="sub-menu"><a >Events</a>
                      <ul>
                    <li><a href="#" alt="8" class="link">Videoes</a></li>
                    <li><a href="#"  alt="9" class="link">Images</a></li>
                    
                  </ul>
                    </li>
                    
                 <li><a href="#" class="link" alt="6">Office Bearers</a></li>
                 <li><a href="#ks" class="link" alt="7">KNOWLEDGE SHARING</a></li>
                 
              </ul>
                </div>
          </div>
          
            </div>
           
      </div>
      
      
      
        </div>
  </div>
 
    </header>
<!--
     <div class="newsticker">
     <ul id="js-news" class="js-hidden">
       <?php
       include_once("core/dbconnect.php");
       $query="select * from `$dbname`.`notices`";
        $result=mysql_query($query);
        while($row=mysql_fetch_array($result)) 
         {
		   echo '<li class="news-item"><a href="http://'.$row['link'].'" target="_blank">'.$row['name'].'</a></li>';
		  }
	   ?>
	</ul>

    </div>
    -->
<div class="bg-content" id="header1">

	
  
	
	
  <!-- <script>
   /*
  function() {	
		 $x = $(window).width();		
	if($x > 1024)
	{			
	jQuery("#content .row").preloader();    }	
		 
     jQuery('.magnifier').touchTouch();			
    jQuery('.spinner').animate({'opacity':0},1000,'easeOutCubic',function (){jQuery(this).css('display','none')});	
  		  }
     
  */
  </script>    
       content -->
       
       
      
      
</div>


<div class="bg-content trans" style="">
<div id="content" class="content-extra">
<div class="container" style="margin-top:1px;">
          <div class="row">
        <article class="span6">
              <h3>Shortly about us</h3>
              <div class="wrapper">
            <figure class="img-indent"><img src="img/logo.png" alt="" /></figure>
            <div class="inner-1 overflow extra">
                  <div class="txt-1">Mauris scelerisque odio quis leo viverra ac porttitor sem blandit. Sed tincidunt mattis varius. Nunc sodales ipsum nisl, eget lacinia nibh.</div>
                  Cras lacus tortor, tempus vitae porta nec, hendrerit id dolor. Nam volutpat gravida porta. Suspendisse turpis nibh, volutpat. 
                </div>
          </div>
            </article>
        <article class="span6">
              <h3>Some quick links</h3>
                <div class="wrapper">
                    <ul class="list list-pad">
                          <li><a href="#">Campaigns</a></li>
                          <li><a href="#">Portraits</a></li>
                          <li><a href="#">Fashion</a></li>
                          <li><a href="#">Fine Art</a></li>
                        </ul>
                    <ul class="list list-pad">
                          <li><a href="#">Campaigns</a></li>
                          <li><a href="#">Portraits</a></li>
                          <li><a href="#">Fashion</a></li>
                          <li><a href="#">Fine Art</a></li>
                        </ul>
                    <ul class="list list-pad">
                          <li><a href="#">Campaigns</a></li>
                          <li><a href="#">Portraits</a></li>
                          <li><a href="#">Fashion</a></li>
                          <li><a href="#">Fine Art</a></li>
                        </ul>
                    <ul class="list">
                          <li><a href="#">Advertising</a></li>
                          <li><a href="#">Lifestyle</a></li>
                          <li><a href="#">Love story</a></li>
                          <li><a href="#">Landscapes</a></li>
                    </ul>
                </div>
            </article>
      </div>
        </div>
</div>

</div>
<!-- footer -->
 
 
     <footer>
      <div class="container clearfix trans" style="">
    <ul class="list-social pull-right">
          <li><a class="icon-1" href="#"></a></li>
          <li><a class="icon-2" href="#"></a></li>
          <li><a class="icon-3" href="#"></a></li>
          <li><a class="icon-4" href="#"></a></li>
        </ul>
    <div class="privacy pull-left">&copy; 2014 | <a href="http://www.dzyngiri.com">Created By Six Sigma Team</a> | <a href="http://twitter.github.com/bootstrap/" target="_blank">JYC</a> | IDEA Given By<a href="http://justinmezzell.com" target="_blank">ASHISH</a></div>
  </div>
    </footer>
    
      <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>