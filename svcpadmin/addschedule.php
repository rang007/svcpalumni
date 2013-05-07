<?php
session_start();
$number = $_GET['number'];
$eid=$_SESSION['eid'];
$cntr=1;
while ($cntr <= $number) {
    echo '<li>
            <table>
                <tr><td>&nbsp; </td><td><h2>Schedule '.$cntr.'</h2></td></tr>
                <tr><td>Date</td>
                    <td><table><tr>
                                <td colspan="2" align="left" valign="top">

                                    <select id="day'.$cntr.'"> 
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

                                    <select id="month'.$cntr.'">
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

                                    <input type="number" id="year'.$cntr.'" size="4">
                                    <br>
                                    <span>
                                        (DD&nbsp;-&nbsp;MM&nbsp;&nbsp;-&nbsp;YYYY)
                                    </span> 

                                </td>
                                <td>Time :</td>
                                <td><input type="text" id="time'.$cntr.'" size="6" class="time_box"/>(Eg.4:30PM)</td>
                            </tr>
                        </table>
                </tr>
                <tr><td>&nbsp; </td><td>&nbsp;</td></tr>

                <tr><td>Schedule Detail</td><td><textarea class="contact_textarea" rows="8" cols="50" id="detail'.$cntr.'"></textarea></td></tr>
                <tr><td align="right"></td><td><input type="button" value="ADD" onclick="addschedule('.$cntr.','.$eid.');"></input></td>
                    </tr>
            </table>
            <br>
        </li>';
    $cntr++;
}
echo '<a href="Events.php"><b>Exit</b></a>';

?>
