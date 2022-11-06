<?php

namespace App\Exceptions;

use Exception;

class MyExceptionTwo extends Exception
{
    public function context() {
        return ['func' => 'add'];
    }

    public function render() {
        return view('exception');
    }
}
