<?php require("db.php")  ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<title>Admin era</title>
		<!-- Favicon-->
		<link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
		<!-- Core theme CSS (includes Bootstrap)-->
		<link href="../css/styles.css" rel="stylesheet" />
		    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
	</head>
	<body>
		<div class="d-flex" id="wrapper">
			<!-- Sidebar-->
			<div class="border-end bg-white" id="sidebar-wrapper">
				<div class="sidebar-heading border-bottom bg-light">Admin Panel</div>
				<div class="list-group list-group-flush">
					<a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Dashboard</a>
					<a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Blog</a>
					<!-- <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Overview</a>
					<a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Events</a> -->
					<a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Profile</a>
					<a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Status</a>
				</div>
			</div>
			<!-- Page content wrapper-->
			<div id="page-content-wrapper">
				<!-- Top navigation-->
				<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
					<div class="container-fluid">
						<button class="btn btn-primary" id="sidebarToggle">Menu</button>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ms-auto mt-2 mt-lg-0">
								<li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
								<!--                                 <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
								<li class="nav-item dropdown">
												<a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
												<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
																<a class="dropdown-item" href="#!">Action</a>
																<a class="dropdown-item" href="#!">Another action</a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item" href="#!">Something else here</a>
												</div>
								</li> -->
							</ul>
						</div>
					</div>
				</nav>
				<!-- Page content-->
				<div class="container-fluid" >
					<h1 class="mt-4">Blog update Settings</h1>
					<?php
					$idd=$_GET['idu'];
					$show="SELECT * FROM blog WHERE id='$idd'";
					$query=mysqli_query($con,$show);
					$arraydata=mysqli_fetch_array($query);
					if(isset($_POST['update'])){
					$ids=$_GET['idu'];
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
					$upd="UPDATE blog SET title='$title',image='$destfile',image1='$destfile1',detail='$blog' WHERE id=$ids";
					$query=mysqli_query($con,$upd);
					if($query){
						?>
						<script>
							window.location.href="../?updated";
						</script>
						<?php 
					}
					else{
						?>
						<script>
							window.location.href="../?failed";
						</script>
						<?php 
					}
					}
					}
					}
					?>
					<form method="post" action="" enctype="multipart/form-data">
						<div class="form-group mt-3 mb-2">
							<label for="exampleFormControlFile1">Upload Image</label>
							<input type="file" name="image" value="<?php echo $arraydata['image']; ?>" class="form-control-file img-circle img-thumbnail" id="exampleFormControlFile1">
						</div>
						<div class="form-group mt-3 mb-2">
							<label for="exampleFormControlFile1">Upload Image</label>
							<input type="file" name="image1" value="<?php echo $arraydata['image1']; ?>" class="form-control-file" id="exampleFormControlFile1">
						</div>
						<div class="form-group mb-2">
							<label for="formGroupExampleInput">Title</label>
							<input type="text" name="title" value="<?php echo $arraydata['title']; ?>" class="form-control" id="formGroupExampleInput" placeholder="Example input" required>
						</div>
						<div class="form-group mb-2">
							<label for="comment">Details:</label>
							<textarea type="text" class="form-control" value="" name="blog" rows="5" id="summernote"><?php echo $arraydata['detail']; ?></textarea>
						</div>
						<button type="submit" name="update" class="btn btn-primary mb-2">update</button>
					</form>
				</div>
			</div>
			
		</div>
		<!-- Bootstrap core JS-->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
		<!-- Core theme JS-->
		<script src="../js/scripts.js"></script>
		   <script>
      $('#summernote').summernote({
        placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 100
      });
    </script>
	</body>
</html>