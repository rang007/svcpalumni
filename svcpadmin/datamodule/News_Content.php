<?php 
if(isset($_GET['createnewsmsg'])){
echo '
        <script>alert("'.$_GET['createnewsmsg'].'");</script>
';
}
if(isset($_GET['newsdeletemsg'])){
echo '
        <script>alert("'.$_GET['newsdeletemsg'].'");</script>
';
}
?>
<div id="content">
  <h2><b>News</b>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            <a href="AddNews.php">Create news</a>&nbsp;|&nbsp;<a href="index2.php">Back</a></h2>
    <div class="content_item">
        
        
        </div>
 
    <br style="clear:both;"/>
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
                {

                    //document.getElementById("comments").innerHTML = "";
                    if (window.XMLHttpRequest)
                    {// code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    }
                    else
                    {// code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function()
                    {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                            document.getElementById("newsdetail" + divid).innerHTML = xmlhttp.responseText;
                        }
                    }

                    xmlhttp.open("GET", "shownews.php?newsid=" + divid, true);
                    xmlhttp.send();
                }
            }
     </script>
     
        <?php
     
        require_once 'database/db_connect.php';
        // connecting to db
        $db = new DB_CONNECT();    
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
                            <td align="right"> <a href="#" onclick="shownews(2,' . $row['news_id'] . ')"><input type="submit" value="Hide" ></a></td>
                            <td align="right"> <a href="deletenews.php?nid='.$row['news_id'] .'"><input type="button" value="Delete" ></a></td></tr>    
                        </table>
                        </td>


                </tr>
                </table>
           
        <div id="newsdetail' . $row['news_id'] . '"> </div> <br><br>';
            }
            ?>        
          </div><!--close content_item-->
               
</div><!--content-->
