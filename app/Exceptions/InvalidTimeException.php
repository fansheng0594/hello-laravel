<?php

namespace App\Exceptions;

use Exception;

class InvalidTimeException extends Exception
{
    public function render()
    {
        return response()->json([
            'message' => $this->message ?: 'Not now!'
        ], 403);
    }
}
