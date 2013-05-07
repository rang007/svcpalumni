
<div id="content">
    <h2>Registration Form</h2>
    <div class="content_item">

        <form  method="post" id="form1" name="drop_list" enctype="multipart/form-data"  target="_self">

            <table width="100%"  border="0" cellpadding="0" cellspacing="0">

                <tr>
                    <td height="40" colspan="3"  align="center" valign="middle">          </td>
                    <td height="40"  align="left"></td>
                    <td height="40"  align="left" valign="middle">


                    </td>
                    <td height="40"  align="left" valign="middle">
                        <div id='drop_list_sex_errorloc' class="error_strings"></div></td>
                </tr>


                <tr>
                    <td width="25">&nbsp;</td>
                    <td width="22" align="left" valign="top">1)</td>
                    <td width="129" height="30" align="left" valign="top"> First Name <span class="star">*</span></td>
                    <td width="21" valign="top" align="center">:</td>

                    <td align="left" valign="top"><input type="text" name="fname" size="35" /></td>

                    <td align="left" valign="top">
                        <div id='drop_list_fname_errorloc' class="error_strings"></div></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td align="left" valign="top">2)</td>
                    <td height="30" align="left" valign="top"> Middle Name <span class="star">*</span></td>
                    <td valign="top" align="center">:</td>

                    <td align="left" valign="top"><input type="text" name="mname" size="35" /></td>

                    <td align="left" valign="top"><div id='drop_list_mname_errorloc' class="error_strings"></div></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td align="left" valign="top">3)</td>
                    <td height="30" align="left" valign="top"> Last Name <span class="star">*</span></td>
                    <td valign="top" align="center">:</td>

                    <td align="left" valign="top"><input type="text" name="lname" size="35" /></td>

                    <td align="left" valign="top"><div id='drop_list_lname_errorloc' class="error_strings"></div></td>
                </tr>


                <tr>
                    <td>&nbsp;</td>
                    <td align="left" valign="top">4)</td>
                    <td height="30" align="left" valign="top"> Gender<span class="star">*</span></td>
                    <td valign="top" align="center">:</td>

                    <td align="left" valign="top"><label>
                            <input type="radio" name="sex" value="Male" id="sex_0" />
                            Male</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label>
                            <input type="radio" name="sex" value="Female" id="sex_1" />
                            Female</label>
                    </td>

                    <td align="left" valign="top"><div id='drop_list_CurrentPosition_errorloc' class="error_strings"></div></td>
                </tr>

                <tr>
                    <td>&nbsp;</td>
                    <td align="left" valign="top">5)</td>
                    <td height="30" align="left" valign="top"> Email Address<span class="star">*</span></td>
                    <td align="center" valign="top">:</td>

                    <td align="left" valign="top"><input type="text" name="email" id="textfield5" size="35" /></td>

                    <td align="left" valign="top"><div id='drop_list_email_errorloc' class="error_strings"></div></td>
                </tr>


                <tr>
                    <td>&nbsp;</td>
                    <td align="left" valign="top">6)</td>
                    <td height="30" align="left" valign="top"> Password<span class="star">*</span></td>
                    <td align="center" valign="top">:</td>

                    <td align="left" valign="top"><input type="password" name="Password" id="textfield5" size="35" /></td>

                    <td align="left" valign="top"><div id='drop_list_Password_errorloc' class="error_strings"></div></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td align="left" valign="top">7)</td>
                    <td height="30" align="left" valign="top"> Confirm Password<span class="star">*</span></td>
                    <td align="center" valign="top">:</td>

                    <td align="left" valign="top"><input type="password" name="ConfirmPassword" id="textfield5" size="35" /></td>

                    <td align="left" valign="top"><div id='drop_list_ConfirmPassword_errorloc' class="error_strings"></div></td>
                </tr>
                <tr><td>&nbsp;</td> </tr>    
                <tr>
                    <td>&nbsp;</td>
                    <td align="left" valign="top">8)</td>
                    <td height="30" align="left" valign="top"> Mobile No. <span class="star">*</span></td>
                    <td align="center" valign="top">:</td>

                    <td align="left" valign="top"><input type="text" name="mno"   maxlength="10"/></td>

                    <td align="left" valign="top"><div id='drop_list_mno_errorloc' class="error_strings"></div></td>
                </tr>

                <tr>
                    <td>&nbsp;</td>
                    <td align="left" valign="top">9)</td>
                    <td height="30" align="left" valign="top"> Date of Birth <span class="star">*</span></td>
                    <td align="center" valign="top">:</td>
                    <td colspan="2" align="left" valign="top">

                        <script language="javaScript" type="text/javascript" src="js/calendarDateInput.js"></script>

                        <script>DateInput('dob', true, 'YYYY-MON-DD')</script>

                        <span class="wait">
                            (MM&nbsp;&nbsp;-&nbsp;&nbsp;DD&nbsp;&nbsp;-&nbsp;&nbsp;YYYY)</span> 
                        <div id='drop_list_dob_errorloc' class="error_strings"></div></td>
                </tr>
                <tr><td>&nbsp;</td></tr>

                <tr>
                    <td valign="top">&nbsp;</td>
                    <td valign="top">10) </td>
                    <td height="80" valign="top">Permanent Address <span class="star">*</span></td>
                    <td align="center" valign="top">:</td>
                    <td colspan="2" align="left" valign="top"><textarea name="paddress" id="paddress" cols="40" rows="3"></textarea>      &nbsp;&nbsp;&nbsp;&nbsp;
                        <!--<textarea name="caddress" id="textarea2" cols="20" rows="3">Address for Correspondence Same as Above </textarea>-->  

                        <div id='drop_list_paddress_errorloc' class="error_strings"></div>      </td>
                </tr>

                <tr>
                    <td>&nbsp;</td>
                    <td align="left" valign="top">11)</td>
                    <td height="30" align="left" valign="top"> Course name<span class="star">*</span></td>
                    <td align="center" valign="top">:</td>
                    <td align="left" valign="top">

                        <select name="CourseName">
                            <option value="00" selected="selected">Select Course Name</option>
                            <option value="MBA">MBA</option>
                            <option value="MCA">MCA</option>
                            <option value="MMM">MMM</option>
                            <option value="MCM">MCM</option>
                            <option value="MPM">MPM</option>
                            <option value="PGDIEM">PGDIEM</option>
                            <option value="PGDIFT">PGDIFT</option>
                            <option value="SBS">SBS</option>
                            <option value="PHD">PHD</option>
                            <option value="OTHERS">OTHERS</option>
                        </select>     </td>
                    <td align="left" valign="top"><div id='drop_list_CourseName_errorloc' class="error_strings"></div></td>
                </tr>

                <tr>
                    <td>&nbsp;</td>
                    <td align="left" valign="top">12)</td>
                    <td height="30" align="left" valign="top">Passing year<span class="star">*</span></td>
                    <td align="center" valign="top">:</td>
                    <td align="left" valign="top">

                        <select name="PassingYear">
                            <option value="00" selected="selected">Select Passing Year</option>
                            <option value="1996">1996</option>
                            <option value="1997">1997</option>
                            <option value="1998">1998</option>
                            <option value="1999">1999</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                        </select>     </td>
                    <td align="left" valign="top"><div id='drop_list_PassingYear_errorloc' class="error_strings"></div></td>
                </tr>

                <tr>
                    <td>&nbsp;</td>
                    <td align="left" valign="top">13)</td>
                    <td height="30" align="left" valign="top"> Current Employer<span class="star">*</span></td>
                    <td valign="top" align="center">:</td>

                    <td align="left" valign="top"><input type="text" name="CurrentEmployer" size="35" /></td>

                    <td align="left" valign="top"><div id='drop_list_CurrentEmployer_errorloc' class="error_strings"></div></td>
                </tr>
                <tr><td>&nbsp;</td></tr>

                <tr>
                    <td>&nbsp;</td>
                    <td align="left" valign="top">14)</td>
                    <td height="30" align="left" valign="top"> Current Position<span class="star">*</span></td>
                    <td valign="top" align="center">:</td>

                    <td align="left" valign="top"><input type="text" name="CurrentPosition" size="35" /></td>

                    <td align="left" valign="top"><div id='drop_list_CurrentPosition_errorloc' class="error_strings"></div></td>
                </tr>




                <tr>
                    <td>&nbsp;</td>
                    <td align="left" valign="top">&nbsp;</td>
                    <td height="30" align="left" valign="top">&nbsp;</td>
                    <td align="center" valign="top">&nbsp;</td>
                    <td width="179" align="left" valign="top">&nbsp;</td>
                    <td width="224" align="left" valign="top">&nbsp;</td>
                </tr>



                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td height="10">&nbsp;</td>
                    <td align="left" valign="top">&nbsp;</td>
                    <td colspan="2">

                        <input type="submit" value="Submit" class='button_profile' />  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="reset" value="Reset" class='button_profile' />    

                    </td>
                </tr>
            </table>
        </form>




    </div><!--close content_item-->
</div><!--close content-->  