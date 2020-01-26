<!DOCTYPE html>
<html>
<head>
	<title>view admin</title>
</head>
<body>
<h1>Login berhasil ! selamat datang</h1>
<h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
<a href="<?php echo base_url('login/logout') ?>">Logout</a>
</body>
</html>