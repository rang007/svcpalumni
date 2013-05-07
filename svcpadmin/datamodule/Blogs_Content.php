<?php
if (isset($_GET['blogdeletemsg'])) {
    echo'<script type="text/javascript">
                            alert("'.$_GET['blogdeletemsg'].'");
                    </script>';
}
?>
<div id="content">

    <div class="content_item">
        <h2><b>Blogs </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            |&nbsp;&nbsp;<a href="index2.php"> Home</a></h2>
        <br>


        <!--<div class="content_container">-->
    </div>

    <div class="content_item">

        <script>
            function showblog(str, divid)
            {
                //showblog(){
                if (str == "2")
                {
                    document.getElementById("blogdetail" + divid).innerHTML = "";
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
                            document.getElementById("blogdetail" + divid).innerHTML = xmlhttp.responseText;
                        }
                    }

                    xmlhttp.open("GET", "showblog.php?blogid=" + divid, true);
                    xmlhttp.send();
                }
            }

        </script>

        <script type="text/javascript">

            function postcomment(str, divid)
            {
                //Var comment = document.getElementById("insert_search").innerHTML = '';
                var comment = document.getElementById("comid" + divid).value;
                var dataString = 'blogid=' + divid + '&comment=' + comment;

                $.ajax({
                    type: "GET",
                    url: "showblog.php",
                    data: dataString,
                    cache: false,
                    beforeSend: function(html) {
                        //document.getElementById("comments"+divid).innerHTML = '';
                        //$("#flash").show();
                        //$("#searchword").show();
                        //$(".searchword").html(search_word);
                        //$("#flash").html('<img src="ajax-loader.gif" align="absmiddle">&nbsp;Loading Results...');
                    },
                    success: function(msg) {
                        //$("#insert_search").show();

                        //$("#insert_search").append(html);
                        //$("#flash").hide();
                        $("#comments" + divid).show();
                        $("#comments" + divid).append(msg);
                        document.getElementById("comid" + divid).value = "";

                    }
                });

            }
        </script>




        <div id="allblog">
        </div>  
        <!--            <div id="blogdetail">
        
        
                    </div>-->
        <form>

            <?php
            //$blogid = $_GET['blogid'];
            require_once 'database/db_connect.php';
            $db = new DB_CONNECT();
            $result = mysql_query("SELECT *FROM blog_table ORDER by blog_created_at DESC");
            while ($row = mysql_fetch_array($result)) {


                $date = substr($row['blog_created_at'], 0, -3);
                $year = substr($row['blog_created_at'], 0, -15);
                $month = substr($row['blog_created_at'], 5, -12);
                $day = substr($row['blog_created_at'], 8, -9);
                $hour = substr($row['blog_created_at'], 11, -6);
                $min = substr($row['blog_created_at'], 14, -3);
                if ($hour == "00") {
                    $hour = "12";
                }
                $date = $hour . ":" . $min . "&nbsp; &nbsp; &nbsp; " . $day . "-" . $month . "-" . $year;
                echo'<table><tr><td>&nbsp;</td><td>&nbsp;</td><td><h5><b> New Blog Posted at :-  ' . $date . '</b></h5></td></tr>
                </table>';
                echo'<table width="100%" class="blogtable">
                <tr>
                        <td align="left">
                        <table>
                        <tr><td valign="top"><h2>' . $row['blog_title'] . '</h2></td></tr>
                        <tr><td valign="top"><h3><b>Author :- ' . $row['author_name'] . 's </b>blog</h3></td></tr>
                        </table>
                        </td>
    
                        <td align="right">
                        <table>
                        <tr><td>' . $date . '</td><td align="right"></td></tr>
                        <tr><td align="right"><a href="#" onclick="showblog(1,' . $row['blog_id'] . ')"><input type="submit" value="Show" ></a></td>
                            <td align="right"> <a href="#" onclick="showblog(2,' . $row['blog_id'] . ')"><input type="submit" value="Hide" ></a></td>
                             <td align="right"> <a href="deleteblog.php?blogid=' . $row['blog_id'] . '"><input type="button" value="Delete" ></a></td></tr>    
                        </table>
                        </td>


                </tr>
                </table>
           
        <div id="blogdetail' . $row['blog_id'] . '"> </div> <br><br>';
            }
            ?>        

        </form>   
    </div><!--close content_item--> 
</div><!--content-->
