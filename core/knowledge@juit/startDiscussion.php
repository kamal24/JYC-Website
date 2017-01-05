<?php
    function createFile($path, $title, $relatedto, $desc, $date){
        $str = '<!DOCTYPE html>
<html lang="en">
	<head>
	<title>JYC PORTAL</title>
	<meta charset="utf-8">
	<link rel="icon" href="http://dzyngiri.com/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="http://dzyngiri.com/favicon.png" type="image/x-icon" />
    <meta name="description" content="Add new Discussion to Group discussion">
    <meta name="keywords" content="Add new discussion, Jaypee University discussion forum">
    <meta name="author" content="kamal" >
	<link rel="stylesheet" href="../../../../../css/bootstrap.css" type="text/css" media="screen">
	<link rel="stylesheet" href="../../../../../css/responsive.css" type="text/css" media="screen">
	<link rel="stylesheet" href="../../../../../css/style1.css" type="text/css" media="screen">
	<link rel="stylesheet" href="../../../../../css/touchTouch.css" type="text/css" media="screen">
	<link rel="stylesheet" href="../../../../../css/kwicks-slider.css" type="text/css" media="screen">

	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="../../../../../js/jquery.js"></script>

    <script type="text/javascript" src="../../../../../js/superfish.js"></script>
<!--	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script> -->
	<script type="text/javascript" src="../../../../../js/jquery.kwicks-1.5.1.js"></script>
	<script type="text/javascript" src="../../../../../js/jquery.easing.1.3.js"></script>
	<!--<script type="text/javascript" src="../../../../../js/jquery.cookie.js"></script>   -->

	<script type="text/javascript" src="../../../../../js/jquery-2.1.0.min.js"></script>

<body class="container">
<div>
<div class="span10">
<ul>
    <div class="row-3">
        <div class="span9">
         <h4>'.$title.'</h4>
         <span style="display:inline;">Related To : </span><span style="display:inline; badge">'.$relatedto.'</span>
         <h5 style="display:inline;float:right;">'.$date.'</h5>
         <p></p>
          <pre class="prettyprint linenums">'.$desc.'</pre>

      </div>
        </div></ul>
<div class="result">
</div>';
        $str .= "<div id='disqus_thread' class='span10'></div>
<script type='text/javascript'>
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'devnetwork'; // required: replace example with your forum shortname

    /*** DON'T EDIT BELOW THIS LINE ***/
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href='http://disqus.com/?ref_noscript'>comments powered by Disqus</a></noscript>
<a href='http://disqus.com' class='dsq-brlink'>comments powered by <span class='logo-disqus'>Disqus</span></a>
</div>
</div>
</body>
</html>";


        $file=fopen($path."//default.php","w+") or exit("Unable to open file");
        fwrite($file, $str);
    }


    $errors = "";
    $message = "";
    //connect to database
    include_once('dbconnect.php');
    if($dbc){
        if(isset($_POST['discussion_submit'])){
            $isDiscussionTitleSet = (!empty($_POST['discussion_title']) && isset($_POST['discussion_title'])) ? true : false;
            $isDiscussionRelatedToSet =(!empty($_POST['relatedto']) && isset($_POST['relatedto'])) ? true : false;
            $isDiscussionDescriptionSet = (!empty($_POST['discussion_description']) && isset($_POST['discussion_description'])) ? true : false;

            if(($isDiscussionDescriptionSet == true && $isDiscussionTitleSet == true) && $isDiscussionRelatedToSet == true){
                $discussionDescription = $_POST['discussion_description'];
                $discussionTitle = $_POST['discussion_title'];
                $relatedto = $_POST['relatedto'];
                $groupName = $_GET['group'];

                //update to be made
                mkdir("group//".$groupName."//".$discussionTitle);
                date_default_timezone_set('Asia/Calcutta');

                // Then call the date functions
                $date = date('d/m/Y H:i');

                createFile("group//".$groupName."//".$discussionTitle, $discussionTitle, $relatedto, $discussionDescription, $date);
                $discussionQuery = "INSERT INTO `$dbname`.`$groupName` (`discussionID`,`discussion_title`,`discussion_content`,`relatedto`,`discussion_date`,`isactive`)
                                    VALUES (NULL,'$discussionTitle','$discussionDescription','$relatedto','$date',0)";
                if(mysql_query($discussionQuery)){
                    $message .= "discussion Added successfully";
                }else{
                    $errors .= "failed to add discussion ";
                }
            }else{
                $errors .= "Enter All required Fields";
            }
        }
    }else{
        $errors .= "connection error";
    }
?>
<!DOCTYPE html>
    <html>
    <head>
        <title> Add Group</title>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="kamal" >
        <link rel="shortcut icon" href="../../assets/ico/favicon.png">

        <title>Signin Template for Bootstrap</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="../../css/bootstrap.css" type="text/css" media="screen">
        <link rel="stylesheet" href="../../css/responsive.css" type="text/css" media="screen">
        <link rel="stylesheet" href="../../css/style1.css" type="text/css" media="screen">

        <!-- Custom styles for this template -->
        <link href="signin.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="../../assets/js/html5shiv.js"></script>
        <script src="../../assets/js/respond.min.js"></script>
        <script type="text/javascript" src="../../js/jquery.js"></script>
        <![endif]-->
        <style>
            .ga-errors{
                color: red;
            }

            .ga-success{
                color: green;
            }

            .width{
                width:80%;
            }
        </style>
    </head>
    <body>
    <div class="container">
    <form action="startDiscussion.php?group=<?php echo $_GET['group']?>" enctype="multipart/form-data" method="post">
        <article class="span10">
            <h3>New Discussion</h3>
            <div class="inner-1">
                   <!-- <div class="success"> Your message has been sent succesfuly!<strong> We will be in touch soon.</strong> </div>
                    --><fieldset>
                   <!-- <input type="hidden" name="group" value=""/> -->
                        <div>
                            <label class="name">
                                <input type="text" name="discussion_title" class="width" placeholder="enter discussion Name / Title here">
                                <br>
                                <span class="empty">*This field is required.</span> </label>
                        </div>
                        <div>
                            <label class="phone">
                                <input type="text"  name="relatedto" class="width" placeholder="Keyword related to Your discussion">
                                <br>
                                <span class="empty">*This field is required.</span> </label>
                        </div>
                        <div>
                            <label class="message">
                                <textarea placeholder="enter discussion description here" class="width" name="discussion_description" rows="10"></textarea>
                                <br>
                                <span class="empty">*This field is required.</span> </label>
                        </div>
                        <div class="buttons-wrapper">
                            <input type="submit" name="discussion_submit" class="btn btn-1" value=" Add New Discussion " />
                        </div>
                    </fieldset>
            </div>
            <?php
                if($errors != ""){
                    echo "<div class='ga-errors'> </br>".$errors."</div>";
                }

                if($message != ""){
                    echo "<div class='ga-success'> </br>".$message."</div>";
                }
            ?>
        </article>

    </form>

    </div>
    <script type="text/javascript" src="../../js/bootstrap.js"></script>
    </body>
    </html>