
<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header('Location: index.php?message=error');
    exit;
}
include 'adminheader.php';
//including the database connection file
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM post ORDER BY id DESC"); 
// using mysqli_query instead
?>
<html>
<head>	
	<title>Homepage</title>
    <link rel="icon" href="../content/logo.png" type="image/gif">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="style.css">-->
</head>

<body>
	<center><table width='80%' border=1px>
	<tr bgcolor='#CCCCCC'>
		<th><center>Title</center></th>
		<th><center>Content</center></th>
        <th><center>Catagory</center></th>
        <th><center>Feature pic</center></th>
        <th><center>Price</center></th>
		<th><center>Update</center></th>
        
	</tr>
        <br>
	<?php 
	while($res = mysqli_fetch_assoc($result)) {  		
		echo "<tr>";
		echo "<td>"."<center>"."<b>".$res['title']."</b>"."</center>"."</td>";
		echo "<td>"."<center>"."<b>".$res['content']."</b>"."</center>"."</td>";
		echo "<td>"."<center>"."<b>".$res['catagory']."</b>"."</center>"."</td>";
        echo "<td>"."<center>"."<img src='data:image/jpeg;base64," . base64_encode($res['image_data']) . "' style='width: 80px; height: 50px;' />.<center>"."</td>";
        echo "<td>"."<center>"."<b>".$res['price']."</b>"."</center>"."</td>";
		echo "<td><center><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a><center></td>";
        echo "</tr>";
	}
	?>
	</table>
        </center>
</body>
</html>
