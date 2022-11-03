<div>
    @section('left')
        <div>Основное меню</div>
    @show
</div>
@isset($cart)
	<p>В вашей корзине {{ $cart->amount_products }} тов. на общую сумму {{ $cart->total_price }} @mycurrency(rub)</p>
@endisset