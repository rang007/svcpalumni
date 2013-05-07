<div id="content">

    <div class="content_item">
        <h2>Events &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="Events.php">Back</a></h2>
        <h2>Create Event</h2>
    </div>

    <div class="content_item">
        <form action="addevent.php" method="post">
        <table>
            <tr><td>Title</td><td><input class="text_box" type="text" name="title" size="40" /></td> </tr> 
            <tr><td>&nbsp;</td><td>&nbsp;</td> </tr> 

            <tr><td>Description</td>
                <td><textarea class="contact_textarea" rows="15" cols="90" name="detail"></textarea></td></tr>

            <tr><td>&nbsp;</td><td>&nbsp;</td> </tr> 

            <tr><td>Start date</td>
                <td>
                    <table><tr>
                            <td colspan="2" align="left" valign="top">

                                <select name="start_day">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>

                                </select>

                                <select name="start_month">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>

                                <input type="number" name="start_year" size="4">
                                <br>
                                <span>
                                    (DD&nbsp;-&nbsp;MM&nbsp;&nbsp;-&nbsp;YYYY)
                                </span> 

                            </td>
                            <td>Time :</td>
                            <td><input class="time_box" type="text" name="start_time" size="6"/>(Eg.4:30PM)</td>
                        </tr>
                    </table>




                </td></tr>

            <tr><td>&nbsp;</td><td>&nbsp;</td> </tr> 

            <tr><td>End date</td>
                <td><table><tr>
                            <td colspan="2" align="left" valign="top">

                                <select name="end_day">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>

                                </select>

                                <select name="end_month">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>

                                <input type="number" name="end_year" size="4">
                                <br>
                                <span>
                                    (DD&nbsp;-&nbsp;MM&nbsp;&nbsp;-&nbsp;YYYY)
                                </span> 

                            </td>
                            <td>Time :</td>
                            <td><input type="text" name="end_time" size="6" class="time_box"/>(Eg.4:30PM)</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr><td>&nbsp;</td><td>&nbsp;</td> </tr> 

            <tr><td>Address/Place :</td>
                <td><textarea class="contact_textarea" rows="4" cols="45" name="place"></textarea></td></tr>
          

            <tr><td>&nbsp;</td>
                <td>&nbsp;</td></tr>
        

        </table>
        <center> <input type="submit" value="Create" />&nbsp;<a href="Events.php">Back</a></center>

    </form>
         
    </div><!--close content_item-->

</div><!--content-->

