<!-- by gaurav                -->
<script type="text/javascript" src="js/touchTouch.jquery.js"></script>
<script>
    jQuery('.magnifier').touchTouch();
</script>
<!-- gaurav code ends here -->
<div id="content"><div class="ic"></div>
    <div class="container">
    <div class="spinner"></div>
        <article class="span6">
            <h4>Videos</h4>
        </article>
        <article class="span5">
            <form id="search" action="core/UnivKhabhar/viewImages.php" method="post" accept-charset="utf-8">
                <div class="clearfix">
                    <select name="events" class="events">
                        echo '<option>select event here</option><option>show all videos</option>';
                        <?php
                            include_once('core/UnivKhabhar/dbconnect.php');
                            $eventsquery = "SELECT * FROM `$dbname`.`events`";
                            $eventsresult = mysql_query($eventsquery);
                            while($eventsrow = mysql_fetch_array($eventsresult)){
                                echo '<option>'.$eventsrow['event'].'</option>';
                            }
                        ?>
                    </select>
                    <!-- <input type="submit" name="eventSearchSubmit" value="Submit"/> -->
                </div>
            </form>
        </article>

        <div class="row" style="margin-top:10%;">


            <!--<div class="clear"></div>-->

            <ul class="portfolio clearfix">
                <?php
                    include_once('core/UnivKhabhar/viewVideos.php');
                ?>
            </ul>

        </div>
    </div>

    <script type="text/javascript" >
        $(".events").change(
            function change1(){
                var id=$(this).val();
                //alert("kamal");
                var web="core/UnivKhabhar/viewVideos.php?event="+id;

                $.ajax({url:web,success:function(result){
                    $(".portfolio").html(result);
                },complete:function () {
                        //jQuery('.magnifier').touchTouch();
                    }
                });
        });
    </script>

  
