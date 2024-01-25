<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/register.css">
    <link rel="shortcut icon" href="assets/images/logo.jpg" />
</head>
<body>
	<div class="main">
		<div class="register">			
			<form action="<?= base_url() ?>proses_register" method="post">
				<label>Register</label>
				<input type="text" name="Username" placeholder="Username.." required>
				<input type="email" name="Email" placeholder="Email.." required>
				<input type="password" name="Password" placeholder="Password.." required>
				<input type="checkbox" id="chk" aria-hidden="true">
				<span class="ask">already have an account? <a href="<?= base_url() ?>login">Login</a></span>
				<label for="chk" arial-hidden="true" class="chk">Next</label>

				<div class="lanjut" id="lanjut">
					<label for="chk" arial-hidden="true" class="chk">Back</label>
					<input type="text" name="NamaLengkap" placeholder="Full Name.." required>
					<input type="text" name="Alamat" placeholder="Address.." required>
					<button type="submit">Register</button>
					
				</div>
			</form>

		</div>
	</div>
</body>
</html>