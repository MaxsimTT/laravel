<!DOCTYPE html>
<html>
<head>
		<title>Product</title>
</head>
<body>
	<p>Товар 1: <?=$name?></p>
	<p>Цена: <?=$prace?></p>
	<p>Корзина: <?=$cart?></p>
	<?php if (isset($my_data_of_composer)) { ?>
		<p>Данные из компоновщика: <?=$my_data_of_composer?></p>
	<? } ?>
</body>
</html>
