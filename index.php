
<?php
require 'components/config.php';
?>

<?php
$query = "SELECT * FROM subjects WHERE visible = 1 ORDER BY position";
$result = mysqli_query($connect, $query);
$subject = mysqli_fetch_row($result);
?>
<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $currentPageQuery = "SELECT content FROM subjects where id = '{$id}'";
  $currentPageResult = mysqli_query($connect, $currentPageQuery);
  $currentPage = mysqli_fetch_assoc($currentPageResult);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Databases</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
</head>
<body>

<div class="container">
<?php
include 'header.php';
?>

<div class="sisu"><?php if (isset($_GET['id'])) { ?>
  <?php echo $currentPage['content']; ?>
<?php } else { echo "We are the Widget Corporation. Welcome to our webpage!" . '<img src="firm3.jpg" />';}?>
<div class="edit"><a href="databases-update.php?id=<?php echo $_GET['id'];?>">Muuda</a>
<a href="databases-delete.php?id=<?php echo $_GET['id'];?>">Kustuta</a></div>
</div>

</div>
</body>
</html>
<?php mysqli_close($connect); ?>

    
