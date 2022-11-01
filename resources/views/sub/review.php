<!DOCTYPE html>
<html>
<head>
		<title>Product</title>
</head>
<body>
	<p>Автор: <?=$name?></p>
	<p>Отзыв: <?=$review?></p>
	<p>Корзина: <?=$cart?></p>
	<?php if (isset($data_of_composer)) { ?>
		<p>Данные из компоновщика: <?=$data_of_composer?></p>
	<? } ?>
	<?php if (isset($my_data_of_composer)) { ?>
		<p>Данные из компоновщика: <?=$my_data_of_composer?></p>
	<? } ?>
</body>
</html>