<?php

namespace App\View\Composers;
use Illuminate\View\View;

class MyPageComposer
{
	
	public function compose(View $view) {
		$cart = (object) [
			'amount_products' => 19,
			'total_price'     => 12443124,
		];
		session()->put('cart', $cart);

		// echo '<pre>';
  //       print_r(session()->all());
  //       echo '</pre>';

		$view->with('cart', $cart);
	}
}