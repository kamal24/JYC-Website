<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Gaurav
 * Date: 2/5/14
 * Time: 12:57 AM
 * To change this template use File | Settings | File Templates.
 */
    ?>
    
    <link href="assets/css/tm_docs.css" rel="stylesheet">
    <div id="content"><div class="ic"></div>
    <div class="container">

<script type="text/javascript" src="assets/js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-popover.js"></script>
 <div class="row">
    <article>
          <h4 style='margin-left:5%;'>Office Bearers</h4>
    </article>
    <!--<ul class='thumbnails thumbnails-1 list-services' style='margin:2%;'>-->
    <ul class="portfolio clearfix">  
    <?php for($i = 1 ; $i < 10; $i++){
        if($i % 4 == 0) {
    ?>
    <li class='span3'>
    
    
            <div class="tm_pad-image" style="width:200%;left:20%;">
               
             
                 
            
            
                <span class="tm_image_round" rel="popover" data-placement="bottom" style="margin-top:4%;" title="" data-content="<p>
				<span class='label'>FACEBOOK:</span><br>www.facebook.com/<br>
				<span class='label'>CONTACT NUMBER:</span><br> mobile number goes here<br>
			    <span class='label'>EMAIL ID:</span> <br> email goes here</p>"
                      data-trigger="hover" style="text-decoration:underline" data-original-title="Popover Title" class="exp">
                
            </div>
        </li>
    <?php }else {?>
        <li class='span3'>
        
            <div class="tm_pad-image" style="width:200%;left:20%;">
                <span class="tm_image_morphing_glowing" rel="popover" data-placement="bottom" style="margin-top:4%;" title="kamal" data-content="<p>
				<span class='label'>FACEBOOK:</span><br>www.facebook.com/<br>
				<span class='label'>CONTACT NUMBER:</span><br> mobile number goes here<br>
			    <span class='label'>EMAIL ID:</span> <br> email goes here</p>"
                      data-trigger="hover" style="text-decoration:underline" data-original-title="Popover Title" class="exp">
                
            </div>
        </li>
        <?php }}?>
    </ul>
    
  </div>
</div>
</div>
<script>
        jQuery('.tm_image_morphing_glowing').hover(function(){ $(this).popover('toggle');});
         jQuery('.tm_image_round').hover(function(){ $(this).popover('toggle');});
</script>
