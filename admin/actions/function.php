<?php 
require_once("db.php");
if (isset($_POST['upload'])) {
	$title=$_POST['title'];
	$blog=$_POST['blog'];
	$image=$_FILES['image'];
	$iname=$image['name'];
	$ipath=$image['tmp_name'];
	$ierror=$image['error'];
	$image1=$_FILES['image1'];
	$iname1=$image1['name'];
	$ipath1=$image1['tmp_name'];
	$ierror1=$image1['error'];
	if($ierror==0){
		$destfile='../img/'.$iname;
		move_uploaded_file($ipath, $destfile);
		if($ierror1==0){
			$destfile1='../img/'.$iname1;
			move_uploaded_file($ipath1, $destfile1);
			$insert="insert into blog(title,image,image1,detail)values('$title','$destfile','$destfile1','$blog')";
		$query=mysqli_query($con,$insert);
		if($query){	
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
		}
	}
}
?>