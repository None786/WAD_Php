<html>
<head>
	<title>Add Data</title>
    
</head>
<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) 
{
        $title = mysqli_real_escape_string($mysqli, $_POST['title']);
        $content = mysqli_real_escape_string($mysqli, $_POST['content']);
        $price = mysqli_real_escape_string($mysqli, $_POST['price']);
        $catagory = mysqli_real_escape_string($mysqli, $_POST['catagory']);
        $image_name = $_FILES['feature-picture']['name'];
        
	   if(empty($title) || empty($content) || empty($image_name) ||empty($price)||empty($catagory)) 
       {
				
           if(empty($title)) 
           {
               echo "<font color='red'>Title field is empty.</font><br/>";
           }
		
           if(empty($content)) 
           {
               echo "<font color='red'>Content field is empty.</font><br/>";
           }
		
           if(empty($image_name)) 
           {
               echo "<font color='red'>Feature pic field is empty.</font><br/>";
           }
		  if(empty($price)) 
           {
               echo "<font color='red'>price field is empty.</font><br/>";
           }
           if(empty($catagory)) 
           {
               echo "<font color='red'>catagory field is empty.</font><br/>";
           }
		//link to the previous page
           echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
        } 
        else 
        { 
            $image_data = file_get_contents($_FILES['feature-picture']['tmp_name']);
            $image_data = mysqli_real_escape_string($mysqli, $image_data);
            //inserting into database
            $result = mysqli_query($mysqli, "INSERT INTO post(title,content,catagory,image_data,price) VALUES('$title','$content','$catagory','$image_data','$price')");
            //display success message
            echo "<font color='green'>Data added successfully.";
            header("Location: admin-view.php");
        }
}
?>
</body>
</html>
