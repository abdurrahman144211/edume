<?php

namespace App\Exceptions;

use Exception;

class AuthFailedException extends Exception
{
    public function render(){
        return response([
            'message' => 'The given data was invalid',
            'errors'  => [
                'email' => [__('auth.failed')]
            ]
        ], 422);
    }
}
