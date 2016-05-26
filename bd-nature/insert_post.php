<html>
	<head>
		<title>Insert New Post</title>
	</head>

	<body>
		<form method="post" action="insert_post.php" enctype="multipart/form-data">
		<table align="center" border="10px" width="800px">
			<tr>
				<td align="center" colspan="5" bgcolor="yellow"><h1>Insert New Post Here</h1></td>
			</tr>
			<tr>
				<td>Post Title:</td>
				<td><input type="text" name="title" size="50"></td>
			</tr>
			<tr>
				<td>Post Author:</td>
				<td><input type="text" name="author" size="30"></td>
			</tr>
			<tr>
				<td>Post Image:</td>
				<td><input type="file" name="image"></td>
			</tr>
			<tr>
				<td>Post Content:</td>
				<td><textarea name="content" cols="80" rows="15"></textarea></td>
			</tr>
			<tr>
				<td align="center" colspan="5"><input type="submit" name="submit" value="Publish Now"></td>
			</tr>
		</table>
		</form>
	</body>
</html>
<?php
include("includes/connect.php");

if (isset($_POST["submit"])){
	$title= $_POST["title"];
	$date= date("d/m/y", time());
	$author= $_POST["author"];
	$image_name= $_FILES["image"]["name"];
	$image_type= $_FILES["image"]["type"];
	$image_size= $_FILES["image"]["size"];
	$image_tmp= $_FILES["image"]["tmp_name"];
	$content = $_POST["content"];
	
	if (empty($title)||empty($author)||empty($content)) {
		echo "<script>alert('Any field is empty')</script>";
		exit();
	}
	if ($image_type=="image/jpeg" || $ $image_type=="image/png" || $image_type=="image/gif") {
		if ($image_size<=200000) {
			move_uploaded_file($image_tmp, "images/$image_name");
		}
		else{
			echo "<script>alert(\"image is larger, only 200kb is allowed\")</script>";
		}
	}
	else{
		echo "<script>alert(\"image type is invalid\")</script>";
		}
	$query= "INSERT INTO posts (post_title, post_date, post_author, post_image, post_content)
		values('$title', '$date', '$author','$image_name', '$content') ";
	if (mysql_query($query)) {
		echo "<center><h1>Post has been published</h1></center>";
		}	
	}

?>

