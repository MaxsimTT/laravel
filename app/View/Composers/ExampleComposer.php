<?php

namespace App\View\Composers;
use Illuminate\View\View;

class ExampleComposer
{
	
	public function compose(View $view) {
		$view->with('my_data_of_composer', 'Привет из моего компоновщика');
	}
}