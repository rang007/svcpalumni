<div id="content">
    <script type="text/javascript">
        $(function() {
            $("#no_box").keyup(function() {
                var no = $("#no_box").val();
                
                //alert( no );
                var dataString = 'number=' + no;

                    $.ajax({
                        type: "GET",
                        url: "addschedule.php",
                        data: dataString,
                        cache: false,
                        beforeSend: function(html) {

                            document.getElementById("insert_search").innerHTML = '';
                            $("#flash").show();
                            $("#searchword").show();
                            $(".searchword").html(no);
                            $("#flash").html('<img src="ajax-loader.gif" align="absmiddle">&nbsp;Loading Results...');
                        },
                        success: function(html) {
                            $("#insert_search").show();

                            $("#insert_search").append(html);
                            $("#flash").hide();

                        }
                    });

                

                return false;
            });
    //---------------- Delete Button----------------

        });
        
        function addschedule(cntr,eid)
            {
                //Var comment = document.getElementById("insert_search").innerHTML = '';
                var day = document.getElementById("day" + cntr).value; 
                var month = document.getElementById("month" + cntr).value;
                var year = document.getElementById("year" + cntr).value;
                var time = document.getElementById("time" + cntr).value;
                var detail = document.getElementById("detail" + cntr).value;
                var dataString = 'eid='+eid+'&day='+ day+'&month='+month+'&year='+year+'&time='+time+'&detail='+detail;
                
                $.ajax({
                        type: "GET",
                        url: "createschedule.php",
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
                                                        //$("#comments"+divid).show();
                                                        //$("#comments"+divid).append(msg);

                                                alert(msg);    
                                                }
                                                });

               }
        
        
    </script>





    <?php
    if (isset($_GET['eventname'])) {
        $eid = $_GET['event_id'];
        
        echo '<h2><b>Add Schedule</b>&nbsp; &nbsp; &nbsp;<a href="Events.php">SKIP </a></h2>';
        echo '<h2>Event : ' . $_GET['eventname'] . ' </h2>';
    }

    ?>

    <div class="content_item">
      <center>
          <form method="get" action="">
        <table>  <tr><td>No. of Schedule's :</td> <td><input class="time_box" id="no_box" type="text"/></td></tr>
        </table>
         </form>
            <div>
                <!--<div id="searchword">Search results for <span class="searchword"></span></div>-->
                <div id="flash"></div>
                <ol id="insert_search" class="update">
                    
                </ol>

            </div>
        </center>

    </div>
</div>