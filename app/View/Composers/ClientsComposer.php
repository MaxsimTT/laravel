<?php

namespace App\View\Composers;
use Illuminate\View\View;

class ClientsComposer
{
	
	public function compose(View $view) {
		$clients = [
            (object) [
                'id'    => 1,
                'name'  => 'Maksim',
                'email' => 'qwerty@test.com',       
            ],
            (object) [
                'id'    => 2,
                'name'  => 'Danila',
                'email' => 'www@test.com',       
            ],
            (object) [
                'id'    => 3,
                'name'  => 'Zafar',
                'email' => 'abc@test.com',       
            ],
        ];

		$view->with('clients', $clients);
	}
}
