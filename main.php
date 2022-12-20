<?php
include 'Test.php';
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP and cats</title>
<link href="Main.css" rel="stylesheet" type="text/css">
</head>
<body class='color'>	

	<table class="head">
		<tr>
			<td><?php 
	echo "<img src='img/Kot23.png' width='200px'>" 
	?></td>
			<td>	<?php include 'menu.inc.php.php' ?>
</td>
		
		
		</tr>
	</table>
 <div class="fullname">
	 <?php
include 'Test.php';
?>	
	<?php echo "<h1>$hello</h1>" ?>
	 <table><td>
		<?php include'knowlage.inc.php'?>
		<p>Если число <?php echo $people, ' ', 'прибавить', ' ', $new_rand; $itog = $people + $new_rand?><br>
			Будет <?php echo $itog?>
			<form method="post">
    <input type="submit" name="test" id="test" value="Сброс" /><br/>
	 </form>
			</td>
			</table>
	<p><img src=img/Kot2.jpg align="midle">Меня зовут
	 <?php echo $name,' ', $lastName. '<br>';
		   echo 'город', ' ', $city;
		?><br></p>
	 <p>	 
	 Мне
		 <?php echo $age; ?>
		 года<br>
	
	 
	 
	 Мы научились вставлять переменные из фаила<br>
	Научились работать с объектами PHP<br>	
		
	 
    </p>
	</p>
	</div>
	<?php include 'footer.inc.php' ?> 
	

</body>
</html>