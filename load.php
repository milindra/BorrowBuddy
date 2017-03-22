<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="" enctype="multipart/form-data">
	<input type="file" name="image">
	<input type="submit" name="submit" value="upload">
</form>
<?php
mysql_connect("localhost","root","nith");
mysql_select_db("borrowbuddy");

$file=$_FILES['image']['tmp_name'];
//echo $file."<br>";
if(!isset($file))
{
	echo "please select an image";
}
else
{
	$image=addslashes(file_get_contents($file));
	//print $image;
	$image_name=addslashes($_FILES['image']['name']);
	$imagesize=getimagesize($file);
	if($imagesize==false)
	{
		echo "this is not an image". "<br>";
	}
	else
	{
		$qry="INSERT INTO user_image values(' ','$image_name','$image')";
		if(mysql_query($qry))
		{
			
			$lastid=mysql_insert_id();
			echo "uploaded"."<br>"."<img src='get.php?id=$lastid' >";

		}
		else
		{
			echo "error";

		}
	}
}

?>

</body>
</html>
