<?php

namespace App\Exceptions;

use Exception;

class MoviesException extends Exception
{
    public function report()
    {
        return false;
    }

    /**
     * Display Error to user
     */
    public function render($request)
    {
        return response()->view('errors.invalid-input', ['message'=> $this->message], 500);
    }
}
