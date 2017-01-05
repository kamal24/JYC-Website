
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>3D Book Showcase</title>
		<meta name="description" content="3D Book Showcase with CSS 3D Transforms" />
		<meta name="keywords" content="3d transforms, css3 3d, book, jquery, open book, css transitions" />
		<meta name="author" content="kamal" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="3DBook/css/default.css" />
		
		<script src="3DBook/js/modernizr.custom.js"></script>
		 <style type="text/css">
       .book-1 .bk-cover {
	    background-image: url(3DBook/images/8.jpg);	
	    width: 
	    background-repeat: no-repeat;
	    background-position: 10px 40px;
        }
        
        .book-2 .bk-cover {
	background-image: url(3DBook/images/8.jpg);	
	background-repeat: no-repeat;
	background-position: 98% 0%;
        }

      .book-3 .bk-cover {
	background-image: url(3DBook/images/8.jpg);	
	background-repeat: no-repeat;
	background-position: 100% 95%;
        }
    
  
.book-3 .bk-back img {
		
	width: 200px;
	display: block;
	margin: 30px auto 0;
}
   
      </style>
	</head>
	<div class="container" class="span12">
	<div class="spinner"></div>
		<div class="container1 ">	
			<!-- Codrops top bar -->
			
			<div class="page-header">
         <h2>Six Sigma Team</h2>			
			</div>
			<div class="main" style="margin-top:10%">
				<ul id="bk-list" class="bk-list clearfix">
				<?php
				$name=array('Kamal Kumar','Gaurav Singh','Priyam Shukla');
				$img=array('3DBook/images/8.jpg','3DBook/images/8.jpg','3DBook/images/8.jpg');
				$backimg=array('3DBook/images/8.jpg','3DBook/images/8.jpg','3DBook/images/8.jpg');
				$page1=array('Kamal Kumar','Gaurav Singh','Priyam Shukla');
				$page2=array('Kamal Kumar','Gaurav Singh','Priyam Shukla');
				$page3=array('Kamal Kumar','Gaurav Singh','Priyam Shukla');
				$back=array('Kamal Kumar','Gaurav Singh','Priyam Shukla');
				$below=array('Kamal Kumar','Gaurav Singh','Priyam Shukla');
					for($i=0;$i<3;$i++){
				echo '<li>
						<div class="bk-book book-3 bk-bookdefault">
							<div class="bk-front">
								<div class="bk-cover">
									<h2>
										<span>'.$name[$i].'</span>
										
									</h2>
								</div>
								<div class="bk-cover-back"></div>
							</div>
							<div class="bk-page">
								<div class="bk-content bk-content-current">
								<p>'.$page1[$i].'</p>
								</div>
								<div class="bk-content">
					          <p>'.$page2[$i].'</p>
								</div>
								<div class="bk-content">
								<p>'.$page3[$i].'</p>
								</div>
							</div>
							<div class="bk-back">
								<img src="'.$backimg[$i].'" />
								<p>'.$back[$i].'</p>
							</div>
							<div class="bk-right"></div>
							<div class="bk-left">
								<h2>
									<span>'.$name[$i].'</span>
									<span>The Catcher in the Rye</span>
								</h2>
							</div>
							<div class="bk-top"></div>
							<div class="bk-bottom"></div>
						</div>
						<div class="bk-info">
							<button class="bk-bookback">Flip</button>
							<button class="bk-bookview">View inside</button>
							<h3>
								<span></span>
								<span>'.$name[$i].'</span>
							</h3>
							<p >'.$below[$i].'</p>
						</div>
					</li>';
					}
					?>
				</ul>
			</div>
		</div><!-- /container -->
		</div>
		<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>-->
		<script src="3DBook/js/books1.js"></script>
		<script>
			$(function book() {

				

			});
		</script>
	
