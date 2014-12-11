<?php
require 'components/config.php';
?>
<?php


$id = $_GET['id'];
$query = "DELETE FROM subjects where id={$id}";
 $result = mysqli_query($connect, $query);
$subject = mysqli_fetch_row($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Databases</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta http-equiv="refresh" content="2;url=index.php">
</head>
<body>
<?php if ($result) { ?>
  <p style="color: green;"><?php echo "Rida kustutatud"; ?></p>
<?php } else { ?>
  <p style="color: red;"><?php echo "Sellist rida andmebaasis ei ole"; ?></p>
<?php } ?>
<?php
  if ($result && mysqli_affected_rows($connection)) {
  }
?>
<div class="edit"><a href="index.php">Tühista</a></div>
</body>
</html>
<?php mysqli_close($connect); ?>

    
