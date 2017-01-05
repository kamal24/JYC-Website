  
   
    <link href="assets/css/tm_docs.css" rel="stylesheet">



  <div class="container">
<div class="spinner"></div>

<section id="columns">
<div class="row">
			<div class="span12">
				<div class="page-header">
				    <h1>Office Bearers</h1>
				</div>
				
			</div>
		</div>
		
		
		<div class="tab-content">
<!-- Three with Caption Columns Begin -->
    
    <?php
    include_once("dbconnect.php");
    $query="select * from `$dbname`.`mainmember`";
    $result=mysql_query($query);
    ?>
      
		<div class="tab-pane active" id="tab1">
		<div class="row">
					
			<?php
			$r=array('first','third','fourth','fifth','sixth','seventh','eighth');
			
			$count=0;
			while($row=mysql_fetch_array($result))
			 {
			 $img='core/officebearerimages/'.$row['imageid'];
			 $name=$row['name'];
			 $post=$row['post'];
			 $email=$row['email_id'];
			 $aboutme=$row['aboutme'];
			 $fblink=$row['fblink'];
			 $linkdenlink=$row['linkdenlink'];
			 $gpluslink=$row['gpluslink'];
			 $mobno=$row['mob_no'];
			 //$gpluslink="http://google.com";
			 $s='tm_view_'.''.$r[$count];
			
					echo '<div class="span4"><div class="thumb-pad">
								<div class="thumbnail" style="margin-top:10%">
								<div class="tm_view '.$s.'">
									<img src="'.$img.'" alt="">
									<div class="tm_mask tile btn1" id="1" clubname="cultural club">
						<h2>'.$post.'</h2>
						<p>'.$aboutme.'</p>
						<!--<a href="#btn" class="btn btn1" id="1" clubname="cultural club">Button</a>-->
					 </div>
					 </div>
									<div class="caption">
										<h5>'.$name.'</h5>
									
										<pre>email:'.$email.'</pre>
										<pre>mobile no:'.$mobno.'</pre>
									   	<ul class="list-social pull-right" style="margin-top:-25px;">';
									   if($fblink!="") {
        echo  '<li><a class="icon-1" href="http://'.$fblink.'" target="_blank"></a></li>';
       }
   if($linkdenlink!="") {
        echo  '<li><a class="icon-3" href="http://'.$linkdenlink.'" target="_blank"></a></li>';
       }
   if($gpluslink!="") {
        echo  '<li><a class="icon-4" href="http://'.$gpluslink.'" target="_blank"></a></li>';
          }
       echo '</ul>
        
									</div>
								</div>
							</div></div>';
							$count=$count+1;
							if($count==7)
							{
								$count=0;
							}
							}
							?>
							<!--<div class="thumb-pad">
								<div class="thumbnail">
								<div class="tm_view tm_view_fourth">
									<img src="assets/img/stock_images/700x430_1.jpg" alt="">
									<div class="tm_mask tile btn1" id="1" clubname="cultural club">
						<h2>First Hover</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo.</p>
						<a href="#btn" class="btn btn1" id="1" clubname="cultural club">Button</a>
					 </div>
					 </div>
									<div class="caption">
										<h5>Thumbnail label</h5>
										<p>Quisque nulla. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque.</p>
										<a href="#" class="btn">Read More</a>
									</div>
								</div>
							</div>
							<div class="thumb-pad">
								<div class="thumbnail">
								<div class="tm_view tm_view_sixth">
									<img src="assets/img/stock_images/700x430_3.jpg" alt="">
										<div class="tm_mask tile btn1" id="1" clubname="cultural club">
						<h2>First Hover</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo.</p>
						<a href="#btn" class="btn btn1" id="1" clubname="cultural club">Button</a>
					 </div>
									</div>
									<div class="caption">
										<h5>Thumbnail label</h5>
										<p>Quisque nulla. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque.</p>
										<a href="#" class="btn">Read More</a>
									</div>
								</div>
							</div>
					</div>
					<div class="span4">
							<div class="thumb-pad">
								<div class="thumbnail">
								<div class="tm_view tm_view_seventh">
									<img src="assets/img/stock_images/700x430_4.jpg" alt="">
												<div class="tm_mask tile btn1" id="1" clubname="cultural club">
						<h2>First Hover</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo.</p>
						<a href="#btn" class="btn btn1" id="1" clubname="cultural club">Button</a>
					 </div>
									</div>
									<div class="caption">
										<h5>Thumbnail label</h5>
										<p>Quisque nulla. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque.</p>
										<a href="#" class="btn">Read More</a>
									</div>
								</div>
							</div>
							<div class="thumb-pad">
								<div class="thumbnail">
									<img src="assets/img/stock_images/700x430_5.jpg" alt="">
									<div class="caption">
										<h5>Thumbnail label</h5>
										<p>Quisque nulla. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque.</p>
										<a href="#" class="btn">Read More</a>
									</div>
								</div>
							</div>
							<div class="thumb-pad">
								<div class="thumbnail">
									<img src="assets/img/stock_images/700x430_6.jpg" alt="">
									<div class="caption">
										<h5>Thumbnail label</h5>
										<p>Quisque nulla. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque.</p>
										<a href="#" class="btn">Read More</a>
									</div>
								</div>
							</div>
					</div>
					<div class="span4">
							<div class="thumb-pad">
								<div class="thumbnail">
									<img src="assets/img/stock_images/700x430_7.jpg" alt="">
									<div class="caption">
										<h5>Thumbnail label</h5>
										<p>Quisque nulla. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque.</p>
										<a href="#" class="btn">Read More</a>
									</div>
								</div>
							</div>
							<div class="thumb-pad">
								<div class="thumbnail">
									<img src="assets/img/stock_images/700x430_8.jpg" alt="">
									<div class="caption">
										<h5>Thumbnail label</h5>
										<p>Quisque nulla. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque.</p>
										<a href="#" class="btn">Read More</a>
									</div>
								</div>
							</div>
							<div class="thumb-pad">
								<div class="thumbnail">
									<img src="assets/img/stock_images/700x430_1.jpg" alt="">
									<div class="caption">
										<h5>Thumbnail label</h5>
										<p>Quisque nulla. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque.</p>
										<a href="#" class="btn">Read More</a>
									</div>
								</div>
							</div>
					</div>
				</div>
			
<!-- Three with Caption Columns End -->
<!-- Three Columns Begin -->
		</div>
</div>
</section>
</div>

   
  <!--  <script src="js/jquery.js"></script> -->
  

