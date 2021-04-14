<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/mycss/login.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">

        <!-- font -->

        <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&family=Sriracha&display=swap" rel="stylesheet">

	<title>Login klinik</title>
</head>
<body>

	<div class="row">
		<div class="col-md-6">
			
			<!-- logo -->

				<div class="row" id="lgo">
					<div class="col-md-2">
						<img src="<?php echo base_url()?>assets/img/logo.png" class="logo">
					</div>
					<div class="col-md-6">
						<div class="head">
							<h4>Klinik ALQIAY </h4>
						</div>
					</div>
				</div>

			<!-- endlogo -->

			<!-- Form login -->

				<div class="helogin">
					<h4>Sign in</h4>
				</div>

				<div class="container ">
					<form method="POST" action="<?= base_url('auth/login_aksi');?>">
					  <div class="form-group">
					  	<div class="row">
					  		<div class="col-md-1">
					  			<img src="https://img.icons8.com/windows/25/000000/username.png"/ class="icn">
					  		</div>
					  		<div class="col-md-6">
					  			<input type="text" class="folgin" id="username" name="username" placeholder="username">
					  		</div>
					  	</div>
					  	
					   
					  </div>
					  <div class="form-group">
					  	<div class="row">
					  		<div class="col-md-1">
					  			<img src="https://img.icons8.com/wired/25/000000/forgot-password.png"/ class="icn">
					  		</div>
					  		<div class="col-md-6">
					  			<input type="password" class="folgin" id="password" name="password" placeholder="password">
					  		</div>
					  	</div>
					  </div>
					  <button type="submit" class="btn " id="btn">Login</button>
					</form>
				</div>	

			<!-- end Form login -->

			<!-- footer -->
				<div class="footer">
					<p>Copyright @Klinik_ALQIAY 2021</p>
				</div>
			<!-- end footer -->


		</div>
		<div class="col-md-6">
			<!-- sklas info -->

			<div class="info">
				<div class="imge">
					<img src="<?php echo base_url()?>assets/img/medical.png">
				</div>

				<div class="judl">
					<h4>WELCOME TO WEBSITE<br>KLINIK ALQIAY</h4><br>
					<p>Lorem Ipsum adalah contoh teks atau 
						dalam industri percetakan dan penataan
						 huruf atau typesetting. Lorem 
						Ipsum telah menjadi standar
					</p>
					<br>
					<h6>"Mulailah Hidup Sehat"</h6>
				</div>	
			</div> 

			<!-- END SKLAS INFO -->

			<div class="back2">
				<img src="<?php echo base_url()?>assets/img/back2.png">
			</div>
			<div class="back1">
				<img src="<?php echo base_url()?>assets/img/back1.png">
			</div>

		</div>
	</div>

</body>
	
<!-- ionic icon -->
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
<!-- javascript -->
	<script src="<?php echo base_url()?>assets/js/vanilla-tilt.js"></script>
	<script src="<?php echo base_url()?>assets/js/slim.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

    <script type="text/javascript">
      VanillaTilt.init(document.querySelectorAll(".info"), {
        max: 30,
        speed: 400
      });
    </script>
</html>