<?php

namespace App\View\Composers;
use Illuminate\View\View;

class MyPageComposer
{
	
	public function compose(View $view) {
		$cart = (object) [
			'amount_products' => 3,
			'total_price'     => 12443124,
		];
		$view->with('cart', $cart);
	}
}