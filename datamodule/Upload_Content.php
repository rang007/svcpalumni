<div id="content">
 <script type="text/javascript">
            $("#submit").click(function(){
    var fileName = $("#file").val();
    if(fileName.value==="")
        alert("Browse image first");
    
})
       
</script>

<div class="content_item">
    <h1>Select your profile picture &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="Profile.php">Back</a></h1>
    <form action="<?php echo 'upload_image.php?uid='.$uid.'&uname='.$uname;?>" method="post" enctype="multipart/form-data" name='imageform'>
        <label for="file">Select image:</label>
        <!--<br>-->
        <input type="file" name="file" id="file">
        <!--<input type="file" name="file" id="file">-->
        &nbsp;&nbsp;<input type="submit" value="select" id='submit'>
    </form>
    <br>
    <center>
        <p><table>
            <tr><td>step 1.</td><td> click on Browse button</td></tr>
            <tr><td>step 2.</td><td> choose your picture </td></tr> 
            <tr><td>step 3.</td><td> click on select button...</td></tr>
        </table>
        </p>
    </center>
    </div>
</div>    

