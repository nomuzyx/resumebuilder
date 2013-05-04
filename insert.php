<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add a Resume</title>
</head>
<body style="background-color:lavender;">
<?php
include 'mysqlcon.php';

if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['address']) && !empty($_POST['city']) && !empty($_POST['state']) && !empty($_POST['zip']) && !empty($_POST['country']) && !empty($_POST['landline']) && !empty($_POST['mobile']) && !empty($_POST['email']) && !empty($_POST['website']) && !empty($_POST['personalstatement']) && !empty($_POST['careerobj']) && !empty($_POST['skill1']) && !empty($_POST['skill2']) && !empty($_POST['skill3']) && !empty($_POST['skill4']) && !empty($_POST['yearpass1']) && !empty($_POST['edu1']) && !empty($_POST['yearpass2']) && !empty($_POST['edu2']) && !empty($_POST['yearpass3']) && !empty($_POST['edu3']) && !empty($_POST['workexp']))
{
	$fname             = $_POST['fname'];
	$lname             = $_POST['lname'];
	$address           = $_POST['address'];
	$city              = $_POST['city'];
	$state             = $_POST['state'];
	$zip               = $_POST['zip'];
	$country           = $_POST['country'];
	$landline 	       = $_POST['landline'];
	$mobile 	       = $_POST['mobile'];
	$email  	       = $_POST['email'];
	$website 	       = $_POST['website'];
	$photo    	       = $_FILES["file"]["name"];
	$personalstatement = $_POST['personalstatement'];
	$careerobj         = $_POST['careerobj'];
	$skill1            = $_POST['skill1'];
	$skill2            = $_POST['skill2'];
	$skill3            = $_POST['skill3'];
	$skill4            = $_POST['skill4'];
	$yearpass1         = $_POST['yearpass1'];
	$edu1              = $_POST['edu1'];
	$yearpass2         = $_POST['yearpass2'];
	$edu2              = $_POST['edu2'];
	$yearpass3         = $_POST['yearpass3'];
	$edu3              = $_POST['edu3'];
	$workexp           = $_POST['workexp'];

	$qry = "insert into resume_table values('$fname','$lname','$address','$city','$state','$zip','$country','$landline','$mobile','$email','$website','$photo','$personalstatement','$careerobj','$skill1','$skill2','$skill3','$skill4','$yearpass1','$edu1','$yearpass2','$edu2','$yearpass3','$edu3','$workexp','')";

	$result = mysqli_query($con,$qry);

	if ($result)
	{
		echo'Resume was added to the database.<br/>';

		$allowedExts = array("gif", "jpeg", "jpg", "png");

		$photo = explode(".",$_FILES["file"]["name"]);

		$extension = end($photo);

		if ((($_FILES["file"]["type"] == "image/gif")
		|| ($_FILES["file"]["type"] == "image/jpeg")
		|| ($_FILES["file"]["type"] == "image/jpg")
		|| ($_FILES["file"]["type"] == "image/pjpeg")
		|| ($_FILES["file"]["type"] == "image/x-png")
		|| ($_FILES["file"]["type"] == "image/png"))
		&& ($_FILES["file"]["size"] < 20000)
		&& in_array($extension, $allowedExts))
  		{ 
  			if ($_FILES["file"]["error"] > 0)
    		{
    			echo "Error: " . $_FILES["file"]["error"] . "<br>";
    		}
  			else
	   		{
    			echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    			echo "Type: " . $_FILES["file"]["type"] . "<br>";
    			echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    			echo "Stored in: " . $_FILES["file"]["tmp_name"];
    
    			if (file_exists("upload/" . $_FILES["file"]["name"]))
      			{	
      				echo $_FILES["file"]["name"] . " already exists. ";
      			}
    			else
      			{
      				move_uploaded_file($_FILES["file"]["tmp_name"],
      				"upload/" . $_FILES["file"]["name"]);
     				echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      			}
    		}
  		}
		else
 		{
  			echo "Invalid file";
  		}
	}
	else
	{
		echo'Resume could not be added to the database.<br/>';	
	}
}	
else
{
	echo "You have not filled out the form. Please try again.";
}

?>
<body>
</html>
