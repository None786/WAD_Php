<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header('Location: index.php?message=error');
    exit;
}
?>
<html>
    
<head>
	<title>Add post</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" href="../content/logo.png" type="image/gif">
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
    
    <?php include 'adminheader.php'; ?>
    <!--header ends here-->
	<br/><br/>
    <center>    
	<form action="add.php" method="post" name="form1" enctype="multipart/form-data">
         <pre>
		<table width="25%" border="0">
			<tr> 
				<td></td>
				<td><input type="text" name="title" placeholder="Title" id="title"></td>
			</tr>
			<tr> 
				<td></td>
				<td><textarea type="text" name="content" id="content" placeholder="Content" rows="5" cols="30"></textarea></td>
			</tr>
            <tr> 
				<td></td>
				<td><input type="text" name="price" id="price" placeholder="Price"></td>
			</tr>
            <tr> 
				<td rolspan="2"><label for="feature-picture"><b>Catagory:</b></label></td>
                <td rolspan="2"><input type="text" id="catagory" name="catagory"placeholder="Catagory"></td>
			</tr>
            <tr> 
				<td rolspan="2"><label for="feature-picture"><b>Feature Picture:</b></label></td>
                <td rolspan="2"><input type="file" id="feature-picture" name="feature-picture"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Publish" id="post"></td>
			</tr>
		</table>
         </pre>
	</form>
    </center>
</body>
</html>

