@isset($cart)
	<p>В вашей корзине {{ $cart->amount_products }} тов. на общую сумму {{ $cart->total_price }} руб.</p>
@endisset