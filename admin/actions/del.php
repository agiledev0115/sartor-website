<?php
require("db.php");
$idd=$_GET['idd'];
$delete="DELETE FROM blog WHERE id=$idd";
$query=mysqli_query($con,$delete);
if ($query) {
	?>
	<script>
		window.location.href="../?true";
	</script>
	<?php
}
else{
		?>
	<script>
		window.location.href="../?false";
	</script>
	<?php
}
?>