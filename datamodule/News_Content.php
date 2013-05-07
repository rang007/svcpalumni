<div id="content">
    <h2><b>Latest News</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href=index.php>Home </a><br><br></h2>
    <div class="content_item">
        <?php 
        if(isset($_GET['nid']))
        {
        $newsid = $_GET['nid'];
        $no = 1;
        $result = mysql_query("SELECT *FROM news_table where news_id = '$newsid'");
        $row = mysql_fetch_array($result);
        echo'<table border="1" width="100%" class="showblogtable">';

        echo '<tr>   
                <td>                                     
                    <h2>' . $row['news_title'] . '</h2><br>    
                    
                    <div style ="float:left; padding-right:10px;">
                    <p>&ldquo; ' . $row['news_detail'] . ' &rdquo;</p>
                </td>   
            </tr>
            </table><br><br>
                    <h2> Other Latest news...</h2>';
        }
        $result=0;
        $row=0;
        ?>
    </div>    
    
    
    <div class="content_item">
    <script>
            function shownews(str, divid)
            {
                //showblog(){
                if (str == "2")
                {
                    document.getElementById("newsdetail" + divid).innerHTML = "";
                    return;

                }


                if (str == "1")
                {					var dataString = 'newsid='+ divid;                            $.ajax({                            type: "GET",                            url: "shownews.php",                            data: dataString,                            cache: false,                            beforeSend: function(html) {                                $("#flash").show();                                $("#flash").html('<center><img src="images/ajax_loader.gif" align="absmiddle" width=100 height=100>&nbsp;Loading Results...</center>');                             },                                                               success: function(html){                           $("#flash").hide();                           $("#newsdetail" + divid).html(html);                          }                        });                    

                    //$("#flash").hide();
                }
            }

//            function postcomment(str, divid)
//            {
//                if (str == "1")
//                {
//                    alert("Your comment is posted !");
//                    //document.getElementById("blogdetail"+divid).innerHTML = "";
//                    //return;
//                    var comment = document.getElementById("comid" + divid);
//                    if (window.XMLHttpRequest)
//                    {// code for IE7+, Firefox, Chrome, Opera, Safari
//                        xmlhttp = new XMLHttpRequest();
//                    }
//                    else
//                    {// code for IE6, IE5
//                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//                    }
//                    xmlhttp.onreadystatechange = function()
//                    {
//                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
//                        {
//                            document.getElementById("comments" + divid).innerHTML = xmlhttp.responseText;
//                        }
//                    }
//
//                    xmlhttp.open("GET", "showcomments.php?blogid=" + divid + "&comment=" + comment.value, true);
//                    xmlhttp.send();
//
//
//
//                }
            //}
        </script>
        <?php
            
            $result = mysql_query("SELECT *FROM news_table ORDER by created_at DESC");
            while ($row = mysql_fetch_array($result)) {

                $date = substr($row['created_at'], 0, -3);
                $year = substr($row['created_at'], 0, -15);
                $month = substr($row['created_at'], 5, -12);
                $day = substr($row['created_at'], 8, -9);
                $hour = substr($row['created_at'], 11, -6);
                $min = substr($row['created_at'], 14, -3);
                if ($hour == "00") {
                    $hour = "12";
                }
                
                $date = $hour . ":" . $min . "&nbsp; &nbsp; &nbsp; " . $day . "-" . $month . "-" . $year;

                echo'<table width="100%" class="blogtable">
                <tr><b> News created at :-  ' . $date . '</b></tr>
                <tr>
                        <td align="left">
                        <table>
                        <tr><td valign="top"><h2>' . $row['news_title'] . '</h2></td></tr>
                        <tr><td valign="top">'.substr($row['news_detail'],0,40).'....</td></tr>
                        </table>
                        </td>
    
                        <td align="right">
                        <table>
                        <tr><td align="right"><a href="#" onclick="shownews(1,' . $row['news_id'] . ')"><input type="submit" value="Show" ></a></td>
                            <td align="right"> <a href="#" onclick="shownews(2,' . $row['news_id'] . ')"><input type="submit" value="Hide" ></a></td></tr>
                        </table>
                        </td>


                </tr>
                </table>
           
        <div id="newsdetail' . $row['news_id'] . '"><div id="flash"></div> </div> <br><br>';
            }
            ?>        
        
        
        
        
<!--        <table>
            <tr>
                <td>News 1:&nbsp; </td> <td><a href="NewsDetails.php?nid=1">Alumni Meet 2013</a></td>
            </tr>
            <tr>
                <td>News 2:&nbsp; </td> <td><a href="NewsDetails.php?nid=2">Alumni Meet 2012</a></td>
            </tr>
            <tr>&nbsp;</tr>
            <tr>&nbsp;</tr>
            <tr>&nbsp;</tr>
            <tr>&nbsp;</tr>
            <tr>&nbsp;</tr>
            <tr>&nbsp;</tr>
        </table>   -->




    </div><!--close content_item-->
</div><!--close content-->  
