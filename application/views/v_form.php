<!DOCTYPE html>
<html>
<head>
	<title>Membuat form validation dengan CI</title>
</head>
<body>
<h1>Form validation CI</h1>
<?php echo validation_errors();?>
<?php echo form_open('form/aksi');?>
<label>Nama</label><br/>
<input type="text" name="nama"><br/>
<label>Email</label><br/>
<input type="text" name="email"><br/>
<label>Konfirmasi Email</label><br/>
<input type="text" name="konfir_email"><br/>
<input type="submit" value="Simpan" name="">
</body>
</html>