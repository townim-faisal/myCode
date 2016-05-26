<div id="sidebar">
	<h2 style="color: yellow; text-align:center;">Subscribe your email</h2>
	<form style="pading: 3px; text-align: center;" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify','popupwindow', 'scrollbar=yes, width=550px, height=520px'); return true">
		<p><b>Enter your email address:</b></p>
		<p><input type="text" style="width:140px" name="email"/></p>
		<input type="hidden" value= "Facebook" name="uri">
		<input type="hidden" name="loc" value="en_US">
		<input type="submit" value="Subscribe">	
	</form>

<?php
include("includes/connect.php");
$query= "SELECT * from posts ORDER BY rand(post_id) DESC LIMIT 0,3";

$run = mysql_query($query);

while ($row= mysql_fetch_array($run)) {
	$title = $row["post_title"];
	$image = $row["post_image"];
?>
<center>
<img src="images/<?php echo $image; ?>" width= "100px" height= "100px"/>
<h3><?php echo $title; ?></h3>
</center>
<?php }?>


</div>
