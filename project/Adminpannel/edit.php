<?php
// including the database connection file
session_start();
if (!isset($_SESSION['logged_in'])) {
    header('Location: index.php?message=error');
    exit;
}
include_once("config.php");
if(isset($_POST['update'])) 
{	
    $id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$title = mysqli_real_escape_string($mysqli, $_POST['title']);
	$content = mysqli_real_escape_string($mysqli, $_POST['content']);
    $price = mysqli_real_escape_string($mysqli, $_POST['price']);
    $catagory = mysqli_real_escape_string($mysqli, $_POST['catagory']);
    $image_name = $_FILES['feature-picture']['name'];
    
    
	// checking empty fields
	if(empty($title) || empty($content) || empty($image_name)||empty($price)||empty($catagory))
    {	
		if(empty($title)) 
        {
			echo "<font color='red'>Title field is empty.</font><br/>";
            header("location:admin-view.php");
		}
		
		if(empty($content)) 
        {
			echo "<font color='red'>Content field is empty.</font><br/>";
            header("location:admin-view.php");
		}
		if(empty($image_name)) 
        {
            echo "<font color='red'>Feature picture field is empty.</font><br/>";
            header("location:admin-view.php");
		}
        if(empty($price)) 
        {
            
            echo "<font color='red'>price field is empty.</font><br/>";
            header("location:admin-view.php");
        }
        if(empty($catagory)) 
        {
            
            echo "<font color='red'>catagory field is empty.</font><br/>";
            header("location:admin-view.php");
            
        }
	} 
    else 
    {	
        $image_data = file_get_contents($_FILES['feature-picture']['tmp_name']);
        $image_data = mysqli_real_escape_string($mysqli, $image_data);
        $result = mysqli_query($mysqli, "UPDATE post SET title='$title',content='$content',catagory='$catagory',image_data='$image_data',price='$price' WHERE id=$id");
        //redirectig to the display page. In our case, it is admin-view.php
        header("Location: admin-view.php");      
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM post WHERE id=$id");

while($res = mysqli_fetch_assoc($result))
{
	$title = $res['title'];
	$content = $res['content'];
    $catagory = $res['catagory'];
    $price = $res['price'];
    $image_data=$res['image_data'];
}
?>
<html>
<head>	
	<title>Edit post</title>
    <link rel="icon" href="../content/logo.png" type="image/gif">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
    <style>
    
         /* Style for the title input */
  #title {
    font-size: 18px;
    padding: 10px;
    width: 100%;
    border: none;
    border-bottom: 2px solid grey;
    margin-bottom: 20px;
      border-radius: 20px;
  }

  /* Style for the content input */
  #content {
    font-size: 16px;
    padding: 10px;
    width: 800px;
    height: 300px;
    border: 1px solid #ddd;
    margin-bottom: 20px;
      border-radius: 20px;
  }

  /* Style for the feature picture button */
  #feature-picture{
    background-color: #ddd;
    border: none;
    color: #fff;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    margin-bottom: 20px;
  }

  /* Style for the post button */
  #post{
    background-color: #333;
    border: none;
    color: #fff;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    margin-top: 20px;
      border-radius: 20px;
  }
    </style>
</head>

<body>
    
    <?php include 'adminheader.php';?>
    
    <!--header ends here-->
	<br/><br/>
	<center>
	<form name="form1" method="post" action="edit.php" enctype="multipart/form-data">
		<table border="0">
			<tr> 
				<td></td>
				<td><input type="text" name="title" placeholder="Title" id="title" value="<?php echo $title;?>"></td>
			</tr>
			<tr> 
				<td></td>
                <td><textarea type="text" name="content" id="content" placeholder="Content" rows="5" cols="30"><?php echo $content;?></textarea></td>
			</tr>
            <tr> 
				<td></td>
				<td><input type="text" name="price" id="price" placeholder="Price" value="<?php echo $price;?>"></td>
			</tr>
            <tr> 
				<td rolspan="2"><label for="feature-picture"><b>Catagory:</b></label></td>
                <td rolspan="2"><input type="text" id="catagory" name="catagory" placeholder="Catagory" value="<?php echo $catagory;?>"></td>
			</tr>
			<tr> 
				<td rolspan="2"><label for="feature-picture"><b>Feature Picture:</b></label></td>
				<td><input type="file" id="feature-picture" name="feature-picture" ></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
				<td><input type="submit" name="update" value="Update" id="post"></td>
			</tr>
		</table>
	</form>
    </center>
</body>
</html>
