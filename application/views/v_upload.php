<!DOCTYPE html>
<html>
<head>
	<title>upload dengan codeigniter</title>
</head>
<body>
<center><h1>Membuat upload file codeigniter</h1></center>
<?php echo $error; ?>
<?php echo form_open_multipart('upload/aksi_upload'); ?>
<input type="file" name="berkas">
<br/><br/>
<input type="submit" value="upload" name=""/>
</body>
</html>