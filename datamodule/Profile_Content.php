<div id="content">
    <h2>Your Profile</h2>
    <div class="content_item">

        <form  method="post" id="form1" name="drop_list" enctype="multipart/form-data"  action="EditProfile.php">
            
            
            <table width="100%"  border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="25">&nbsp;</td>
                    <td width="22" align="left" valign="top"></td>
                    <td width="129" height="30" align="left" valign="top"> </td>
                    <td width="21" valign="top" align="center"></td>

                    <td align="left" valign="top">
                         
                           
                        <?php                         $path= explode('/',$image);                        //echo '<h1>'.print_r($path).'</h1>';                                                $thumb_path=$path[0]."/".$path[1]."/thumb/".$path[2];                        $big_image=$image;                                                    if($image=="invalid" || $image=="")                            {                                echo '<img src="profileimages/blankprofile.png" width="300" height="230"/>';                            }                            else{                                  //echo '<img id="zoom_04pb" class="MagicZoom" src="'.$big_image.'" data-zoom-image="'.$big_image.'" width="300" //height="230"/>';								  echo '<img id="zoom_07" class="MagicZoom" src="'.$big_image.'" data-zoom-image="'.$big_image.'" width="400" height="300"/>';                            }                            ?>
                        <br>
                    <center><a href='upload.php'> new image</a></center><br>
                            </td>

                    <td align="left" valign="top">
                        <div id='drop_list_fname_errorloc' class="error_strings"></div></td>
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
                    <td width="25">&nbsp;</td>
                    <td width="22" align="left" valign="top"></td>
                    <td width="129" height="30" align="left" valign="top"> First Name <span class="star">*</span></td>
                    <td width="21" valign="top" align="center">:</td>

                    <td align="left" valign="top"><label><?php echo $username; ?></label></td>

                    <td align="left" valign="top">
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td align="left" valign="top"></td>
                    <td height="30" align="left" valign="top"> Last Name <span class="star">*</span></td>
                    <td valign="top" align="center">:</td>

                    <td align="left" valign="top"><label> <?php echo $lastname; ?></label></td>

                    <td align="left" valign="top"></td>
                </tr>

                <tr>
                    <td>&nbsp;</td>
                    <td align="left" valign="top"></td>
                    <td height="30" align="left" valign="top">Gender<span class="star">*</span></td>
                    <td valign="top" align="center">:</td>

                    <td align="left" valign="top"><label><?php echo $gender; ?>  </label></td>

                    <td align="left" valign="top"></td>
                </tr>

                <tr>
                    <td>&nbsp;</td>
                    <td align="left" valign="top"></td>
                    <td height="30" align="left" valign="top"> Email Address<span class="star">*</span></td>
                    <td align="center" valign="top">:</td>

                    <td align="left" valign="top"><?php echo $email; ?></td>

                    <td align="left" valign="top"><div id='drop_list_email_errorloc' class="error_strings"></div></td>
                </tr>



                <tr><td>&nbsp;</td> </tr>    
                <tr>
                    <td>&nbsp;</td>
                    <td align="left" valign="top"></td>
                    <td height="30" align="left" valign="top"> Mobile No. <span class="star">*</span></td>
                    <td align="center" valign="top">:</td>

                    <td align="left" valign="top"><label><?php echo $mobno; ?></label></td>

                    <td align="left" valign="top"><div id='drop_list_mno_errorloc' class="error_strings"></div></td>
                </tr>

                <tr>
                    <td>&nbsp;</td>
                    <td align="left" valign="top"></td>
                    <td height="30" align="left" valign="top"> Date of Birth <span class="star">*</span></td>
                    <td align="center" valign="top">:</td>
                    <td colspan="2" align="left" valign="top">
                       <?php echo $bday; ?>
                        </td>
                </tr>
                <tr><td>&nbsp;</td></tr>

                <tr>
                    <td valign="top">&nbsp;</td>
                    <td valign="top"></td>
                    <td height="80" valign="top">Address <span class="star">*</span></td>
                    <td align="center" valign="top">:</td>
                    <td colspan="2" align="left" valign="top"><label><?php echo $address; ?> </label>
                        <!--<textarea name="caddress" id="textarea2" cols="20" rows="3">Address for Correspondence Same as Above </textarea>-->  

                </tr>

                <tr>
                    <td>&nbsp;</td>
                    <td align="left" valign="top"></td>
                    <td height="30" align="left" valign="top"> Branch name<span class="star">*</span></td>
                    <td align="center" valign="top">:</td>
                    <td align="left" valign="top">
                        <label><?php echo $branch; ?> </label>
                    </td>
                    <td align="left" valign="top">
                    </td>
                </tr>

                <tr>
                    <td>&nbsp;</td>
                    <td align="left" valign="top"></td>
                    <td height="30" align="left" valign="top">Passing year<span class="star">*</span></td>
                    <td align="center" valign="top">:</td>
                    <td align="left" valign="top">
                        <label><?php echo $pass_year; ?></label>
                    </td>
                    <td align="left" valign="top"></td>
                </tr>

                <tr>
                    <td>&nbsp;</td>
                    <td align="left" valign="top"></td>
                    <td height="30" align="left" valign="top"> Current Employer<span class="star">*</span></td>
                    <td valign="top" align="center">:</td>

                    <td align="left" valign="top"><label><?php echo $current_emp;?> </label></td>

                    <td align="left" valign="top"></td>
                </tr>
                <tr><td>&nbsp;</td></tr>

                <tr>
                    <td>&nbsp;</td>
                    <td align="left" valign="top"></td>
                    <td height="30" align="left" valign="top"> Current Position<span class="star">*</span></td>
                    <td valign="top" align="center">:</td>

                    <td align="left" valign="top"><label><?php echo $current_pos; ?> </label></td>

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

                        <input type="submit" value="EDIT">    

                    </td>
                </tr>
            </table>
        </form>




    </div><!--close content_item-->
</div><!--close content-->  