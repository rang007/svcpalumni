<div id="content">
<script defer="defer" type="text/javascript">
  /*Start of form validation:*/
 function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
    }
    
    
    function validateForm(formElement) {
        
        var numericExpression = /^[0-9]+$/;
        var alphaExp = /^[a-zA-Z]+$/;
        
	if(!formElement.first_name.value.match(alphaExp)){
            return focusElement(formElement.first_name,
                'Enter correct first name !');
	}
        
        if(!formElement.last_name.value.match(alphaExp)){
            return focusElement(formElement.last_name,
                'Enter correct last name !');
	}
        
        if(!formElement.mob_no.value.match(numericExpression)){
            return focusElement(formElement.mob_no,
                'Enter only digits in mobile no.!');
	}
        
        if (formElement.mob_no.value.length < 10)
             return focusElement(formElement.mob_no,
                'Please enter atleast 10 digit mobile no.');
       
        if (formElement.birth_year.value.length <4)
            return focusElement(formElement.birth_year,
            'Please enter year value in 4 digit format (Eg. 2004)');
       if (formElement.birth_year.value < 1965)
            return focusElement(formElement.birth_year,
            'Please enter valid birth year');
       
        if(!formElement.birth_year.value.match(numericExpression)){
            return focusElement(formElement.birth_year,
                'Enter only digits in birth year.!');
	}
        
        if (formElement.address.value.length < 2)
      return focusElement(formElement.address,
       'Please enter your address.');
    
        
    //Check user name is at least 2 characters long
    if (formElement.first_name.value.length < 2)
      return focusElement(formElement.first_name,
       'Please enter first name that is at least 2 characters long.');
    if (formElement.last_name.value.length < 2)
      return focusElement(formElement.last_name,
       'Please enter a last name that is at least 2 characters long.');
   
        //Check password is at least 5 characters long
    if (formElement.password.value.length < 6)
      return focusElement(formElement.password,
       'Please enter a password that is at least 6 characters long.');
    //Check for valid e-mail address
    if (validEmail(formElement.email.value) == false)
      return focusElement(formElement.email,
       'Please enter a valid e-mail address.');
    //Make sure a selected options are correct
    if (formElement.branch.selectedIndex == "00")
      return focusElement(formElement.branch,
       'Please select branch.');
    if (formElement.passing_year.selectedIndex == "00")
      return focusElement(formElement.branch,
       'Please select passing year.');
        
       
     if (countSelected(formElement, 'radio', 'gender') == 0) {
      alert('Please choose your gender.');
      return false;
    }
    
    //If all is OK, return true and let the form submit
    return true;
  }
  /*End of form validation.*/

  /*Below are various functions that can be
   re-used in your own validation scripts:*/
  function focusElement(element, errorMessage) {
    //Tell the user an error has been made
    alert((errorMessage.length > 0) ? errorMessage :
      'You did not enter valid data; Please try again');
    //Select the text in the input box, and focus it (if possible)
    if (element.select) element.select();
    if (element.focus) element.focus();
  
    return false;
  }
  function countSelected(formElement, inputType, inputName) {
    //If there is no input type, make it checkbox
    if (inputType == null) inputType = 'checkbox';
    var returnValue = 0;
    //Loop for all elements in this form
    for (var loopCounter = 0; loopCounter < formElement.length; loopCounter++) {
      //If this element is the wanted type
      var element = formElement.elements[loopCounter];
      if (element.type == inputType && element.checked == true) {
        //If we have the correct control name, increment the count
        if (inputName.length > 0)
          if (element.name == inputName)
            returnValue++;
        else
          returnValue++
      }
    }
    //Return the count
    return returnValue;
  }
  function countSelectedOptions(selectElement) {
    var returnValue = 0;
    //Loop for all options
    for (var loopCounter = 0; loopCounter < selectElement.options.length; loopCounter++)
      if (selectElement.options[loopCounter].selected == true)
        returnValue++;
    return returnValue;
  }
  function validEmail(email) {
    var emailRE = new RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/);
    return emailRE.test(email);
  }
  /*End of functions.*/
//-->
//$(".search_button").click(function() {

$(function() {
//-------------- fname-----------------
$("#firstname").keyup(function() { 
//$(".search_button").click(function() {
    var fname = $("#firstname").val();
    var dataString = 'fname='+ fname;
	        
        if(fname==''){
            $("#fname").html('First Name is Compulsory');    
        }
	else
	{
	$.ajax({
                    type: "GET",
                    url: "validate/name.php",
                    data: dataString,
                    cache: false,
                            beforeSend: function(html) {
                                //$("#firstname").hide();
                                //document.getElementById("insert_search").innerHTML = '';
                                //$("#flash").show();
                                //$("#searchword").show();
                                //$(".searchword").html(search_word);
                                //$("#flash").html('<img src="images/ajax_loader.gif" align="absmiddle" height=100 width=100>&nbsp;Loading Results...');
                            },
                            success: function(html) {
                                //$("#insert_search").show();
                                
                                //$("#lastname").focus();
                                $("#fname").html(html);
                                //$("#flash").hide();

                            }
                        });

                    }

return false;
	});

//----------------Last name----------------
$("#lastname").keyup(function() { 
    var fname = $("#lastname").val();
    var dataString = 'fname='+ fname;
	        
        if(fname==''){
            $("#lname").html('Last Name is Compulsory');    
        }
	else
	{
	$.ajax({
                    type: "GET",
                    url: "validate/name.php",
                    data: dataString,
                    cache: false,
                            beforeSend: function(html) {
                                //$("#firstname").hide();
                                //document.getElementById("insert_search").innerHTML = '';
                                //$("#flash").show();
                                //$("#searchword").show();
                                //$(".searchword").html(search_word);
                                //$("#flash").html('<img src="images/ajax_loader.gif" align="absmiddle" height=100 width=100>&nbsp;Loading Results...');
                            },
                            success: function(html) {
                                //$("#insert_search").show();
                                //$("#lastname").focus();
                                $("#lname").html(html);
                                //$("#flash").hide();

                            }
                        });

                    }

return false;
	});
        
 //----------------Last name----------------
$("#eml").change(function() { 
    var email = $("#eml").val();
    var dataString = 'email='+ email;
	        
        if(email==''){
            $("#mail").html('e-mail is Compulsory');    
        }
	else
	{
	$.ajax({
                    type: "GET",
                    url: "validate/email.php",
                    data: dataString,
                    cache: false,
                            beforeSend: function(html) {
                                //$("#mail").hide();
                                //document.getElementById("insert_search").innerHTML = '';
                                //$("#flash").show();
                                //$("#searchword").show();
                                //$(".searchword").html(search_word);
                                //$("#flash").html('<img src="images/ajax_loader.gif" align="absmiddle" height=100 width=100>&nbsp;Loading Results...');
                            },
                            success: function(html) {
                                //$("#insert_search").show();
                                //$("#mail").show();
                                if(html=="error"){
                                $("#eml").focus();
                                html="Invalid email";
                                $("#mail").html(html);
                                alert(html);
                                }else{
                                    $("#mail").hide();
                                }
                            }
                        });

                    }

return false;
	});       
        
        
 //----------------password----------------
$("#pas").change(function() { 
    var pass = $("#pas").val();
    var dataString = 'password='+ pass;
	    
        if(pass==''){
            $("#pass").html('Password is Compulsory');    
        }
	else
	{
	$.ajax({
                    type: "GET",
                    url: "validate/password.php",
                    data: dataString,
                    cache: false,
                            beforeSend: function(html) {
                                //$("#mail").hide();
                                //document.getElementById("insert_search").innerHTML = '';
                                //$("#flash").show();
                                //$("#searchword").show();
                                //$(".searchword").html(search_word);
                                //$("#flash").html('<img src="images/ajax_loader.gif" align="absmiddle" height=100 width=100>&nbsp;Loading Results...');
                            },
                            success: function(html) {
                                //$("#insert_search").show();
                                //$("#mail").show();
                                if(html=="error"){
                                $("#pas").focus();
                                html="Password should be alphanumeric! Eg: abcd OR abc123";
                                $("#pass").html(html);
                                }
                                 $("#pass").html(html);
                                
                            }
                        });

                    }

return false;
	});        
        
         //----------------password2----------------
$("#pas2").change(function() { 
    var pass2 = $("#pas2").val();
    var pass1 = $("#pas").val();
            if (pass2 == pass1) {
            $("#pass2").html("Password match");    
            return false;
            } else {
                $("#pass2").html("Password does not match");
            }
            return false;

        });
         //----------------mobile no---------------
$("#mobno").keyup(function() { 
    var mobno = $("#mobno").val();
    var dataString = 'mobno='+ mobno;

        if(mobno==''){
            $("#mob").html('Mobile number is Compulsory');    
        }
	else
	{
	$.ajax({
                    type: "GET",
                    url: "validate/mobileno.php",
                    data: dataString,
                    cache: false,
                            beforeSend: function(html) {
                                //$("#mail").hide();
                                //document.getElementById("insert_search").innerHTML = '';
                                //$("#flash").show();
                                //$("#searchword").show();
                                //$(".searchword").html(search_word);
                                //$("#flash").html('<img src="images/ajax_loader.gif" align="absmiddle" height=100 width=100>&nbsp;Loading Results...');
                            },
                            success: function(html) {
                                //$("#insert_search").show();
                                //$("#mail").show();
                                if(html=="error"){
                                $("#mobno").focus();
                                html="Enter digits only! (eg. 9096736678)";
                                $("#mob").html(html);
                                //alert(html);
                                }
                                 $("#mob").html(html);
                                
                            }
                        });

                    }
return false;

    });
    //------ birth year-----//
    $("#birthyear").keyup(function() { 
    var byear = $("#birthyear").val();
    var dataString = 'byear='+ byear;

        if(byear==''){
            $("#byear").html('Enter year !!!');    
        }
	else
	{
	$.ajax({
                    type: "GET",
                    url: "validate/year.php",
                    data: dataString,
                    cache: false,
                            beforeSend: function(html) {
                                //$("#mail").hide();
                                //document.getElementById("insert_search").innerHTML = '';
                                //$("#flash").show();
                                //$("#searchword").show();
                                //$(".searchword").html(search_word);
                                //$("#flash").html('<img src="images/ajax_loader.gif" align="absmiddle" height=100 width=100>&nbsp;Loading Results...');
                            },
                            success: function(html) {
                                //$("#insert_search").show();
                                //$("#mail").show();
                                if(html=="Invalid"){
                                $("#birthyear").focus();
                                html="Invalid date of birth!";
                                //$("#birthyear").val("");
                                $("#byear").html(html);
                                }
                                if(html=="error"){
                                $("#birthyear").focus();
                                html="Enter digits only! (eg. 1990)";
                                $("#byear").html(html);
                                }
                                 $("#byear").html(html);
                                
                            }
                        });

                    }
   return false;
 });
    
});


</script>    







       <h2><?php
        if (isset($_GET['msg'])) {
            echo'<script type="text/javascript"> alert("' . $_GET['msg'] . '");</script>';
        }
        ?><br> 
    </h2>
    
    <div class="content_item">
        <!--enctype="multipart/form-data"-->
     
        <form name="f1" action="registeruser.php" onsubmit="return validateForm(this);" onreset="return confirm('Are you sure that you want to reset this form?');" enctype="multipart/form-data" method="post">
            <table width="100%"  border="0" cellpadding="0" cellspacing="0">

                <tr>
                    <td width="25">&nbsp;</td>
                    <td width="22" align="left" valign="top"></td>
                    <td width="129" height="30" align="left" valign="top"> Select Image </td>
                    <td width="21" valign="top" align="center">:</td>

                    <td align="left" valign="top"><input type="file" name="file" id="file"></td>

                    <td align="left" valign="top">
                    </td>
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
                    <td width="129" height="30" align="left" valign="top"> First Name <span>*</span></td>
                    <td width="21" valign="top" align="center">:</td>

                    <td align="left" valign="top">

                        <input type="text" name="first_name" size="35" id="firstname" /></td>

                    <td align="left" valign="top">
                    </td>
                </tr>

                <tr>
                    <td>&nbsp;</td>
                    <td align="left" valign="top">&nbsp;</td>
                    <td height="30" align="left" valign="top">&nbsp;</td>
                    <td align="center" valign="top">&nbsp;</td>
                    <td width="179" align="left" valign="top"><div id="fname" class="error"></div></td>
                    <td width="224" align="left" valign="top">&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td align="left" valign="top"></td>
                    <td height="30" align="left" valign="top"> Last Name <span class="star">*</span></td>
                    <td valign="top" align="center">:</td>

                    <td align="left" valign="top"><input type="text" name="last_name" id ="lastname" size="35" ></td>

                    <td align="left" valign="top"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td align="left" valign="top">&nbsp;</td>
                    <td height="30" align="left" valign="top">&nbsp;</td>
                    <td align="center" valign="top">&nbsp;</td>
                    <td width="179" align="left" valign="top"><div id="lname" class="error"> </div></td>
                    <td width="224" align="left" valign="top">&nbsp;</td>
                </tr>

                <tr>
                    <td>&nbsp;</td>
                    <td align="left" valign="top"></td>
                    <td height="30" align="left" valign="top"> Gender<span class="star">*</span></td>
                    <td valign="top" align="center">:</td>

                    <td align="left" valign="top"><label>
                            <input type="radio" name="gender" value="Male" id="sex_0" />
                            Male</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label>
                            <input type="radio" name="gender" value="Female" id="sex_1" />
                            Female</label>
                    </td>

                    <td align="left" valign="top"></td>
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
                    <td align="left" valign="top"></td>
                    <td height="30" align="left" valign="top"> Email Address<span class="star">*</span></td>
                    <td align="center" valign="top">:</td>

                    <td align="left" valign="top"><input type="text" name="email" id="eml" size="35" /></td>

                    <td align="left" valign="top"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td align="left" valign="top">&nbsp;</td>
                    <td height="30" align="left" valign="top">&nbsp;</td>
                    <td align="center" valign="top">&nbsp;</td>
                    <td width="179" align="left" valign="top"><div id="mail" class="error"></div></td>
                    <td width="224" align="left" valign="top">&nbsp;</td>
                </tr>

                <tr>
                    <td>&nbsp;</td>
                    <td align="left" valign="top"></td>
                    <td height="30" align="left" valign="top"> Password<span class="star">*</span></td>
                    <td align="center" valign="top">:</td>

                    <td align="left" valign="top"><input type="password" name="password" id="pas" size="35" /></td>

                    <td align="left" valign="top"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td align="left" valign="top">&nbsp;</td>
                    <td height="30" align="left" valign="top">&nbsp;</td>
                    <td align="center" valign="top">&nbsp;</td>
                    <td width="179" align="left" valign="top"><div id="pass" class="error"></div></td>
                    <td width="224" align="left" valign="top">&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td align="left" valign="top"></td>
                    <td height="30" align="left" valign="top"> Confirm Password<span class="star">*</span></td>
                    <td align="center" valign="top">:</td>

                    <td align="left" valign="top"><input type="password" name="password2" id="pas2" size="35" class=" "/></td>

                    <td align="left" valign="top"></td>
                </tr>

                <tr>
                    <td>&nbsp;</td>
                    <td align="left" valign="top">&nbsp;</td>
                    <td height="30" align="left" valign="top">&nbsp;</td>
                    <td align="center" valign="top">&nbsp;</td>
                    <td width="179" align="left" valign="top"><div id="pass2" class="error"></div></td>
                    <td width="224" align="left" valign="top">&nbsp;</td>
                </tr>

                <tr><td>&nbsp;</td> </tr>    
                <tr>
                    <td>&nbsp;</td>
                    <td align="left" valign="top"></td>
                    <td height="30" align="left" valign="top"> Mobile No. <span class="star">*</span></td>
                    <td align="center" valign="top">:</td>

                    <td align="left" valign="top"><input type="text" name="mob_no" id="mobno"   maxlength="10" class=" "/></td>

                    <td align="left" valign="top"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td align="left" valign="top">&nbsp;</td>
                    <td height="30" align="left" valign="top">&nbsp;</td>
                    <td align="center" valign="top">&nbsp;</td>
                    <td width="179" align="left" valign="top"><div id="mob" class="error"></div></td>
                    <td width="224" align="left" valign="top">&nbsp;</td>
                </tr>

                <tr>
                    <td>&nbsp;</td>
                    <td align="left" valign="top"></td>
                    <td height="30" align="left" valign="top"> Date of Birth <span class="star">*</span></td>
                    <td align="center" valign="top">:</td>
                    <td colspan="2" align="left" valign="top">

                        <select name="birth_day">
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

                        <select name="birth_month">
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

                        <input type="number" name="birth_year" id="birthyear" size="4"><div id="byear" class="error"></div>
                        <br>
                        <span>
                            (DD&nbsp;-&nbsp;MM&nbsp;&nbsp;-&nbsp;YYYY)
                        </span> 

                    </td>
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
                    <td valign="top">&nbsp;</td>
                    <td valign="top"> </td>
                    <td height="80" valign="top">Address <span class="star">*</span></td>
                    <td align="center" valign="top">:</td>
                    <td colspan="2" align="left" valign="top"><textarea name="address" cols="40" rows="3"></textarea>      &nbsp;&nbsp;&nbsp;&nbsp;
                        <!--<textarea name="caddress" id="textarea2" cols="20" rows="3">Address for Correspondence Same as Above </textarea>-->  

                        <div id="addr"></div>      </td>
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
                    <td align="left" valign="top"></td>
                    <td height="30" align="left" valign="top"> Branch name<span class="star">*</span></td>
                    <td align="center" valign="top">:</td>
                    <td align="left" valign="top">

                        <select name="branch" class="select_box">
                            <option value="00" selected="selected">Select Branch Name</option>
                            <option value="Mechanical">Mechanical</option>
                            <option value="Civil">Civil</option>
                            <option value="Electronics & telicommunication">Electronics & Telecommunication</option>
                            <option value="computer">Computer</option>
                            <option value="Information Tecnhology">Information Technology</option>
                            <option value="OTHERS">OTHERS</option>
                        </select>     </td>
                    <td align="left" valign="top"></td>
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
                    <td align="left" valign="top"></td>
                    <td height="30" align="left" valign="top">Passing year<span class="star">*</span></td>
                    <td align="center" valign="top">:</td>
                    <td align="left" valign="top">

                        <select name="passing_year" class="select_box">
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
                    <td align="left" valign="top"></td>
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
                    <td align="left" valign="top"></td>
                    <td height="30" align="left" valign="top"> Current Employer<span class="star">*</span></td>
                    <td valign="top" align="center">:</td>

                    <td align="left" valign="top"><input type="text" name="current_employer" size="35" class=" "/></td>

                    <td align="left" valign="top"><div id="emp"></div></td>
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
                    <td align="left" valign="top"></td>
                    <td height="30" align="left" valign="top"> Current Position<span class="star">*</span></td>
                    <td valign="top" align="center">:</td>

                    <td align="left" valign="top"><input type="text" name="current_possition" size="35" class=" "/></td>

                    <td align="left" valign="top"><div id="pos"></div></td>
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

                        <input type="submit" value="submit">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="reset" value="Reset" />    

                    </td>
                </tr>
            </table>
        </form>

<?php 
if (isset($_POST['submit'])) { 
    if($_POST['first_name']==" ")
    {
        
        echo'<script type="text/javascript"> alert("Fisrt name should not blank");</script>';
    }
}
?>


    </div><!--close content_item-->
</div><!--close content-->  