

<?php
require 'components/config.php';
?>

<?php
// uut postitust saab luua, aga header ei funka

if(isset($_POST['submit'])){
$menu_name = $_POST['menu_name'];
$position = $_POST['position'];
$visible = $_POST['visible'];
$content = $_POST['content'];

  $query = "INSERT INTO subjects (menu_name, position, visible, content)
            VALUES ('$menu_name', '$position', '$visible', '$content')";}

 $result = mysqli_query($connect, $query);

if ($result) {
$answer = "Uus postitus on lisatud!";
} else {
$answer = "Midagi läks valesti";
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Databases</title>
<link rel="stylesheet" href="style.css">
<?php if (isset($_POST['submit'])) {?>
<meta http-equiv="refresh" content="2; url=index.php">
<?php } ?>

</head>

<body>
<div class="container">
<?php
include 'header.php';
?>
<div class="sisu">
<?php
if(isset($_POST['submit'])){
echo $answer;
}
?>	

<form action="databases-create.php" method="post">
	<div class="form-field">
		<label for="menu-name">Teema nimi</label>
		<input id="menu-name" type="text" name="menu_name">
	</div>
	<div class="form-field">
		<label for="position">Positsioon</label>
		<select name="position">
			<?php for ($i = 1; $i < 16; $i++){ ?>
			<option value="<?php echo $i;?>"> <?php echo $i; ?> </option>
			<?php }?>
		</select>
	</div>
	<div class="form-field">
		<label for="visible">Nähtavus</label>
		<select name="visible">
			<option value="1">Nähtav</option>
			<option value="0">Peidetud</option>
		</select>
	</div>
	<div class="form-field">
		<label for="content">Tekst</label>
		<input id="content" type="text" name="content">
	</div>
	<div class="form-field">
		<input type="submit" name="submit" value="Saada">
	</div>
</form>
<div class="edit"><a href="index.php">Tühista</a></div>
</div>
</div>
</body>
</html>
<?php mysqli_close($connect); ?>

    
