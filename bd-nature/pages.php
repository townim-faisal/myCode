<html>
	<head>
		
		<link rel='stylesheet' href='style.css'/>
	</head>

	<body>
		<div id='top'><p>Top bar</p></div>
		<?php include("includes/header.php"); ?>
		<?php include("includes/nav.php"); ?>
		<div class="post_body">
		<?php
		include("includes/connect.php");
		$page_id = $_GET["id"];
		$query="SELECT * FROM posts WHERE post_id=$page_id ";
		$run = mysql_query($query);

		while ($row= mysql_fetch_array($run)) {
			$title = $row["post_title"];
			$date = $row["post_date"];
			$author = $row["post_author"];
			$image = $row["post_image"];
			$content = $row["post_content"];
		?>
			<h2><?php echo $title; ?></h2>
			<p style="font-size: 15px;">Published On: &nbsp;&nbsp;<b><?php echo $date; ?></b></p>
			<p align="right" style="font-size: 15px;">Posted By: &nbsp;&nbsp;<b><?php echo $author; ?></b></p> 
			<img src="images/<?php echo $image; ?>" width= "590px" height= "600px"/>
			<p align="justify" style="font-size: 13px;"><?php echo $content; ?></p>
		<?php } ?>	
		
		</div>
		<?php include("includes/sidebar.php"); ?>	
		<div class="footer">This is a footer</div>
	</body>
<title>Bangladesh Nature-<?php echo $title;?></title>
</html>

