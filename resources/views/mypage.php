<!DOCTYPE html>
<html>
<head>
	<title>My page</title>
</head>
<body>
	<? if (isset($cart)) { ?>
		<p>В вашей корзине <?=$cart->amount_products?> тов. на общую сумму <?=$cart->total_price?> руб.</p>
	<? } ?>
	<? if(isset($clients)) { ?>
		<table>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>e-mail</th>
			</tr>
		<? foreach ($clients as $client) { ?>
			<tr>
			<? foreach ($client as $k => $v) { ?>
				<td><?=$v?></td>
			<? } ?>
			</tr>
		<? } ?>
		</table>
	<? } ?>
</body>
</html>