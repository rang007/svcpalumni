<!--<div id="content">-->

<script type="text/javascript">
$(function() {
//-------------- Update Button-----------------
//$("#search_box").keyup(function() { 
$(".search_button").click(function() {
    var search_word = $("#search_box").val();
    var dataString = 'search_word='+ search_word;
	
	if(search_word=='')
	{
	}
	else
	{
	$.ajax({
	type: "GET",
    url: "searchalumni.php",
    data: dataString,
    cache: false,
    beforeSend: function(html) {
   
	document.getElementById("insert_search").innerHTML = ''; 
	$("#flash").show();
	$("#searchword").show();
	 $(".searchword").html(search_word);
	$("#flash").html('<img src="images/ajax_loader.gif" align="absmiddle" width=100 height=100>&nbsp;Loading Results...');
	
	
               
            },
  success: function(html){
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
    var dataString = 'search_word='+ search_word;
	
	if(search_word=='')
	{
	}
	else
	{
	$.ajax({
	type: "GET",
    url: "searchalumni.php",
    data: dataString,
    cache: false,
    beforeSend: function(html) {
   
	document.getElementById("insert_search").innerHTML = ''; 
	$("#flash").show();
	$("#searchword").show();
	 $(".searchword").html(search_word);
	$("#flash").html('<img src="images/ajax_loader.gif" align="absmiddle" height=100 width=100>&nbsp;Loading Results...');
	 },
  success: function(html){
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
    <div class="content_item">
        <h2><b>Alumni Search </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="Reports.php">Back </a></h2>
        
        <div align="center">
            <div class="name_blue" style="border-bottom:#dedede dotted 1px"> You can search alumini students here </div>
            <br>
            <form method="get" action="">
            <input name="search" id="search_box" class="search_box" type="text">
            <input value="Search" class="search_button" type="submit"><br>
            <div align="left" style="color:#666666; font-size:14px; font-family:Arial, Helvetica, sans-serif;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Eg:</b> name, surname, passing year, current 
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;position , company name, branch name</div>

            
        </form>
            <br><br>
       </div> 
            
        <div>
            <center><div id="searchword"><h2><b>Alumni Search results for <span class="searchword"></span></b></h2></div></center>
            <div id="flash"> </div>
            <div id="insert_search" class="update">
                
            </div>
            
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <!--<div class="content_container">-->
    </div>
<!--</div>-->

