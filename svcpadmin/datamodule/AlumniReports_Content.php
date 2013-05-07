<div id="content">
    <h2><b>Alumni Reports </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="Reports.php">Back &nbsp;</a></h2>
    <div class="content_item">
        <script>
            function showUser(str)
            {
                if (str == "" || str == "00")
                {
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                }
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
                        document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                    }
                }

                xmlhttp.open("GET", "branchreport.php?branch=" + str, true);
                xmlhttp.send();
            }
        </script>

        <script type="text/javascript">
            $(function() {
//-------------- Update Button-----------------
//$("#search_box").keyup(function() { 
                $(".search_button").click(function() {
                    var search_word = $("#search_box").val();
                    var dataString = 'search_word=' + search_word;

                    if (search_word == '')
                    {
                    }
                    else
                    {
                        $.ajax({
                            type: "GET",
                            url: "passingyearwise.php",
                            data: dataString,
                            cache: false,
                            beforeSend: function(html) {

                                document.getElementById("insert_search").innerHTML = '';
                                $("#flash").show();
                                $("#searchword").show();
                                $(".searchword").html(search_word);
                                $("#flash").html('<img src="images/ajax-loader.gif" align="absmiddle">&nbsp;Loading Results...');



                            },
                            success: function(html) {
                                $("#insert_search").show();

                                $("#insert_search").append(html);
                                $("#flash").hide();

                            }
                        });

                    }

                    return false;
                });
                $("#search_box").keyup(function() {
//$(".search_button").click(function() {
                    var search_word = $("#search_box").val();
                    var dataString = 'search_word=' + search_word;

                    if (search_word == '')
                    {
                    }
                    else
                    {
                        $.ajax({
                            type: "GET",
                            url: "passingyearwise.php",
                            data: dataString,
                            cache: false,
                            beforeSend: function(html) {

                                document.getElementById("insert_search").innerHTML = '';
                                $("#flash").show();
                                $("#searchword").show();
                                $(".searchword").html(search_word);
                                $("#flash").html('<img src="images/ajax-loader.gif" align="absmiddle">&nbsp;Loading Results...');
                            },
                            success: function(html) {
                                $("#insert_search").show();

                                $("#insert_search").append(html);
                                $("#flash").hide();

                            }
                        });

                    }

                    return false;
                });
//---------------- Delete Button----------------

            });
        </script>







        <?php
        if ($_GET['status'] == "branch") {
            echo '
        
        <h2>Select Branch :</h2> 
        <select name="branch" class="select_box" onchange="showUser(this.value)" >
                            <option value="00" selected="selected">Select Branch Name</option>
                            <option value="Mechanical">Mechanical</option>
                            <option value="Civil">Civil</option>
                            <option value="Electronics & telicommunication">Electronics & Telecommunication</option>
                            <option value="computer">Computer</option>
                            <option value="Information Tecnhology">Information Technology</option>
                            <option value="OTHERS">OTHERS</option>
        </select>

';
            echo'<div id="txtHint"></div>';
        }
        if ($_GET['status'] == "pass") {
            echo '<h2><b>Passing Year wise Report </b></h2>
                <div align="center">
            <div class="name_blue" style="border-bottom:#dedede dotted 1px"> Enter the alumni passing year  </div>
            <br>
            <form method="get" action="">
            <input name="search" id="search_box" class="search_box" type="text">
            <input value="Search" class="search_button" type="submit"><br>
           </form>
            <br><br>
       </div> 
         
            <div>
            <div id="searchword">Alumni having passing year <b><span class="searchword"></span></b></div>
            <div id="flash"></div>
            <!--<ol id="insert_search" class="update">
                
            </ol>-->
            <div id="insert_search" class="update"></div>
            
        </div>

        ';
        }
        ?>
    </div>
</div>
