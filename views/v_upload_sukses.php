<html>
<head>
</head>
<body>
 
	<center><h1>Detail Hasil Uploud</h1></center>
 
	<ul>
		<?php foreach ($upload_data as $item => $value):?>
			<li><?php echo $item;?>: <?php echo $value;?></li>
		<?php endforeach; ?>
	</ul>	
	 Untuk Kembali ke Dashboard, silakan klik <?php echo anchor('upload','di sini...'); ?>
 
</body>
</html>