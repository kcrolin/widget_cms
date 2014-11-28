
<?php
$dbhost = 'localhost';
$dbuser = 'widget_cms';
$dbpass = 'secretpassword';
$dbname = 'widget_corp';

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


if (mysqli_connect_errno()) {
die("Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ").");
}

$query = "SELECT * FROM subjects;";
 $result = mysqli_query($connect, $query);
$subject = mysqli_fetch_row($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Databases</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<pre>
<?php
while($row = mysqli_fetch_assoc($result)){ ?>
<ul><li class="page-title"><?php echo $row['menu_name'];?></li></ul>
<a href="databases-update.php?id=<?php echo $row['id'];?>">Muuda</a>
<?php }?>
<?php mysqli_free_result($result);?>
</pre>
</body>
</html>
<?php mysqli_close($connect); ?>

    
