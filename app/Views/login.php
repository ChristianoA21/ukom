<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
    <link rel="shortcut icon" href="assets/images/logo.jpg" />
	<link rel="stylesheet" type="text/css" href="css/login.css">

</head>
<body>
	<div class="main">
		<div class="login">			
			 <form action="<?= base_url() ?>proses_login" method="post">
			 	<label>Login</label>
			 	<input type="email" name="Email" placeholder="Email.." required>
			 	<input type="password" name="Password" placeholder="Password.." required>
			 	<button type="submit">Login</button>
				<span>Don't have an account? <a href="<?= base_url() ?>register">Register</a></span>
			 </form>
		</div>
	</div>

<?php if (session()->getFlashdata('error')): ?>
<p><?= session()->getFlashdata('error')  ?></p>
<?php endif; ?>
</body>
</html>