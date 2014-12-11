<?php
require 'components/config.php';
?>

<header>
<ul>
<li><h2><a href="index.php">Home</a></h2></li>
<?php
while($row = mysqli_fetch_assoc($result)){ ?>
<li><h2><a href="index.php?id=<?php echo $row['id']; ?>"><?php echo $row['menu_name']; ?></a></h2></li>

<?php }?>
<?php mysqli_free_result($result);?>
<li><h2><a href="databases-create.php">+ Add new</a><h2></li>
</ul>
</header>