<html>
<head>
</head>
<body>
	<center><h1>Upload File</h1></center>
	
 
	<?php echo form_open_multipart('upload/aksi_upload');?>
	<p><h3>
	

	           Selamat datang di halaman dashboard, <?php echo ucfirst($this->session->userdata('username')); ?>!
	           </h3>
	           <p>
           Untuk logout dari sistem, silakan klik <?php echo anchor('login/logout','di sini...'); ?>
       </p>
           
 </p>
 <p>Untuk Uploud foto silahkan pilih dibawah ini</p>

	<input type="file" name="berkas" />
 
	<br /><br />
 
	<input type="submit" value="upload" />
	<?php echo $error;?>
 
</form>
 
</body>
</html>