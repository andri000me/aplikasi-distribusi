<!doctype html>
<html lang="en">
  <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS from Online-->
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <!-- Bootstrap CSS from Assets Folder-->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
    <link rel="shortcut icon" href="<?php echo base_url('assets/logo.png')?>">
  </head>
  <body>
	<div class="container">
		<div class="row">
			<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
				<div class="card card-signin my-5">
          			<div class="card-body">
						<form class="form-signin" method="post" action="<?php echo base_url()?>auth/login">
						  <h1 class="card-title text-center">Login</h1>
						  <br>
						  <?php echo $this->session->flashdata('msg');?>
						  <div class="form-label-group">
			                <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
			                <label></label>
			              </div>
						  <div class="form-label-group">
			                <input type="password" class="form-control" name="password" placeholder="Password" required autofocus>
			                <label></label>
			              </div>
						  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
