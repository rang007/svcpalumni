
<div id="content">
    <h2>Users &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="index2.php">Back &nbsp;</a></h2>
    <div class="content_item">
        <script>
            function showUser(str)
            {
                if (str == "")
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

                xmlhttp.open("GET", "showuser.php?q=" + str, true);
                xmlhttp.send();
            }
            
           function approveUser(str)
            {
                if (str == "")
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

                xmlhttp.open("GET", "approveuser.php?uid=" + str, true);
                xmlhttp.send();
            } 
             
        function deleteUser(str)
            {
                if (str == "")
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

                xmlhttp.open("GET", "deleteuser.php?uid=" + str, true);
                xmlhttp.send();
            }
        </script>       
        
        <form>

            <select name="users" onchange="showUser(this.value)" style="width: 250px;">
                <option value="1">All users</option>
                <option value="2">New users</option>
                <option value="3">Granted Users</option>
            </select>
        </form>
        <br>
        <div id="txtHint">
       <?php
            require_once 'database/db_connect.php';
        // connecting to db
        $db = new DB_CONNECT();
        $no=1;
        $result = mysql_query("SELECT *FROM user_table ORDER by user_id DESC");
        echo '<table width=50% border=1 background=transperent>
               <tr><th>Sr.No.</th><th>Name </th><th></th><th>Current Status</th></tr> 
                    ';
        while ($row = mysql_fetch_array($result)) {
             echo '<tr>
                <td>'.$no.'&nbsp;)</td>
                    <td>'.$row['user_first_name'].'&nbsp;'.$row['user_last_name'].'</td>';
            
            if($row['user_approved_status']==0){  
                echo'<td halign=middle><a href=# onclick=approveUser('.$row['user_id'].')>Approve</a></td>
                    <td halign=middle><a href=# onclick=deleteUser('.$row['user_id'].')>Delete</a></td>
                    </tr>';
            } 
            else{
                echo'<td halign=middle></td>
                    <td halign=middle><a href=# onclick=deleteUser('.$row['user_id'].')>Delete</a></td>
                    </tr>';
            }
                
            $no++;
          }
          echo '</table>';
        ?>
        </div>

    </div>
</div>
