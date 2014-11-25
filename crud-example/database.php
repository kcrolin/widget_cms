
<?php
$dbhost = 'localhost';
$dbuser = 'widget_cms';
$dbpass = 'secretpassword';
$dbname = 'widget_corp';

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


if (mysqli_connect_errno()) {
die("Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ").");
}

$query = "SELECT * FROM pages where subject_id = 2 ORDER BY menu_name ASC;";
 $result = mysqli_query($connect, $query);
$row = mysqli_fetch_row($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Databases</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<pre>
<?php // print(mysqli_fetch_row($result)); ?>
</pre>
<pre>
<?php
while ($row = mysqli_fetch_assoc($result)) {
echo '
<article class="page">
  <header class="page-header">
    <h1 class="page-title">' . $row['menu_name'] . '</h1>
  </header>
  <div class="page-body">
    ' . $row['content'] . '
   </div>
</article>' ;}?>
</body>
</html>
<?php mysqli_close($connect); ?>

    
