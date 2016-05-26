<div class='post_body'>
<?php
include("includes/connect.php");

$query= "SELECT * from posts ORDER BY post_id DESC LIMIT 0,3";

$run = mysql_query($query);

while ($row= mysql_fetch_array($run)) {
	$post_id = $row["post_id"];
	$title = $row["post_title"];
	$date = $row["post_date"];
	$author = $row["post_author"];
	$image = $row["post_image"];
	$content = substr($row["post_content"], 0, 200);
?>
<h2><a href="pages.php?id=<?php echo $post_id; ?>" style="font-size: 22px;"><?php echo $title; ?></a></h2>
<p style="font-size: 15px;">Published On: &nbsp;&nbsp;<b><?php echo $date; ?></b></p>
<p align="right" style="font-size: 15px;">Posted By: &nbsp;&nbsp;<b><?php echo $author; ?></b></p> 
<img src="images/<?php echo $image; ?>" width= "590px" height= "300px"/>
<p align="justify" style="font-size: 13px;"><?php echo $content . '....'; ?></p>
<p align="right"><a href="pages.php?id=<?php echo $post_id; ?>">Read more..</a></p>
<?php }?>


</div>
