<div id="content">

    <div class="content_item">
        <h2><b>Events </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;|&nbsp;&nbsp;<a href="CreateEvents.php"> Create EVENT</a></h2>
        <br>


        <!--<div class="content_container">-->
    </div>

    <div class="content_item">
        
        <script>
            function showevent(str, divid)
            {
                if (str == "2")
                {
                    document.getElementById("eventdetail" + divid).innerHTML = "";
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
                            document.getElementById("eventdetail" + divid).innerHTML = xmlhttp.responseText;
                        }
                    }

                    xmlhttp.open("GET", "showevent.php?eid=" + divid, true);
                    xmlhttp.send();
                }
                if (str == "3")
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
                            //document.getElementById("eventdetail" + divid).innerHTML = xmlhttp.responseText;
                        }
                    }

                    xmlhttp.open("GET", "deletevent.php?eid=" + divid, true);
                    xmlhttp.send();
                }
            }

        </script>
        <form>

            <?php
            require_once 'database/db_connect.php';
// connecting to db
    $db = new DB_CONNECT();


            $result = mysql_query("SELECT *FROM event_table ORDER by event_id DESC");
            while ($row = mysql_fetch_array($result)) {

                $sday = $row['start_day'] ;
                $syear = $row['start_year'];
                $smonth = $row['start_month'];
                $stime = $row['start_time'];
                $eday = $row['end_day'];
                $eyear = $row['end_year'];
                $emonth = $row['end_month'];
                $etime = $row['end_time'];
                $detail = $row['event_detail'];
                $title= $row['event_title'];     
                $eid=$row['event_id'];
                $sdate = $sday . "-" . $smonth . "-" . $syear. "&nbsp; &nbsp; &nbsp;" .  $stime;
                $edate= $eday . "-" . $emonth . "-" . $eyear. "&nbsp; &nbsp; &nbsp;" .  $etime;
                
                echo'<table width="100%" class="blogtable">
                <tr>
                        <td align="left">
                        <table>
                        <tr><td valign="top"><h2>' .$title. '</h2></td></tr>
                        <tr><td valign="top"> start Date: </td><td> '.$sdate.'</td></tr>
                        <tr><td valign="top">End Date: </td><td>'.$edate.'</td></tr>    
                        </table>
                        </td>
                        
                        <td align="right">
                        <table>
                        <tr><td align="right"><a href="#" onclick="showevent(1,'. $eid .')"><input type="submit" value="Show" ></a></td>
                            <td align="right"> <a href="#" onclick="showevent(2,'. $eid .')"><input type="submit" value="Hide" ></a></td>
                            <td align="right"> <a href="deletevent.php?eid='.$row['event_id'].'"><input type="button" value="Delete" /></a></td></tr>
                            </table>
                        </td>


                </tr>
                </table>
           
        <div id="eventdetail' . $eid . '"> </div> <br><br>';
            }
            ?>        

        </form>   
    </div><!--close content_item--> 
</div><!--content-->
