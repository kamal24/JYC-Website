<!--
<head>

<script type="text/javascript" src="../../js/jquery.js"></script>
<script type="text/javascript" src="../../js/jquery-2.1.0.min.js"></script>
 <script type="text/javascript" >
 $(document).ready(function linkclick(){
 	
$(".link").click(function () {
	var web="";
	   var page = $(this).attr('alt');
	if (page==1) {
	       web="../../assets/addclub.php";
	       
         }
         
         if (page==2) {
	       web="../../assets/addnotices.php";
	       
         }
         
         if (page==3) {
	       web="../addmainmem.php";
         }
         
         if (page==4) {
	       web="../addcom.php";
	       //web="slider.php";
         }
         
         if (page==5) {
	       web="../knowledge@juit/addGroup.php";
         }
         
         if (page==6) {
	       web="../UnivKhabhar/addEvent.php";
         }
     
        if(page==7){
          web="../UnivKhabhar/imageUploader.php";        
        }
    
       if(page==8){
          web="../UnivKhabhar/videoUploader.php";        
        }
    
      
       if(page==9){
         //web="book.php";     
       web="logout.php";  
       //web="3DBook/webteam.php"; 
       //web="trial/index.html";
       //web="about.php";
        }
    
    if(page==10){
         //web="book.php";     
       web="login.php";  
       //web="3DBook/webteam.php"; 
       //web="trial/index.html";
       //web="about.php";
        }
 
    $.ajax({url:web,
    success:function(result){
    	
    $("#changedata").html(result);
         }
    });
	
});

});

</script>
</head>
-->

<a class="link" alt="1" href="../../assets/addclub.php">add club</a>
<a class="link" alt="2" href="../../assets/addnotices.php" >add notices</a>
<a class="link" alt="3" href="../addmainmem.php" >add office Bearer</a>
<a class="link" alt="4" href="../addcom.php">add commutties</a>
<a class="link" alt="5" href="../knowledge@juit/addGroup.php" >add Group</a>
<a class="link" alt="6" href="../UnivKhabhar/addEvent.php" >add Event</a>
<a class="link" alt="7" href="../UnivKhabhar/imageUploader.php">Image uplaod</a>
<a class="link" alt="8" href="../UnivKhabhar/videoUploader.php">Video uplaod</a>
<a class="link" alt="9" href="logout.php">logout</a>
<a class="link" alt="10" href="login.php">login</a>

<div id="changedata">
</div>