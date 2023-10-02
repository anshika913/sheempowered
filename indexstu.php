<!DOCTYPE html>
<html>
<head>
	<title>Upload Files</title>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
	<style>
		body {
			margin: 0;
			background-color: #ecfab6;
		}
        .a{
			margin-left:800px;
			margin-top:40px;
			width: 460px;
			height:300px;
			background: #00000036;
			color:white;
			padding:30px;
		}
		.b{
			margin-left:800px;
			margin-top:20px;
			width: 460px;
			height:100px;
			background: #00000036;
			color:white;
		}
	</style>
</head>
<body>
	<div class="container py-3">
		<div class="row justify-content-center">
			<div class="col-md-6">
				
				<form action="process_page.php" enctype="multipart/form-data" method="post" class="a">
					<div class="form-group">
						<label for="full_name">Full Name:</label>
						<input type="text" class="form-control" id="full_name" placeholder="Enter Full Name" name="full_name" required>
						<div class="form-group">
							<label for="uploadFile">Upload Resume:</label>
							<input type="file" class="form-control" id="uploadFile" name="uploadFile">
							<span style="color:#f00;font-size:10px;"><b>Note:</b> Only  JPG, PNG and JPEG images are allowed. Maximum upload size is 500kb </span>
						</div>
						<div class="form-group">
						<label for="email">Email :</label>
						<input type="text" class="form-control" id="email" placeholder="Enter Email" name="email" required>
						<br>
						<button type="submit" name="btnSubmit" class="btn "><a href="student_signup.php">Submit</a></button>
						
	                     </div>

					</div>
				</form>
				<div class="b">
				<span style="color:#f00;font-size:15px;"><b>Note:</b> We'll contact you after verification and provide your credential for getting started </span>
				<br>
				<button type="submit" name="btnSubmit" class="btn"><a href="student_signin_form.php">Sign in</a></button>
				</div>
			</div>
		</div>
	</div>

</body>
</html>