
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
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php
while ($subject = mysqli_fetch_assoc($result)) {
echo '
<ul>
	<li>'. $subject['menu_name'] .'</li>
</ul>' ;}?>
</body>
</html>
<?php mysqli_close($connect); ?>

    
