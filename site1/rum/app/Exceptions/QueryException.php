<?php

namespace App\Exceptions;

use Exception;

class QueryException extends Exception
{
    /**
     * Report or log an exception.
     *
     * @return void
     */
    public function report()
    {
        \Log::debug('Query failure');
    }

    public function render($request)
    {
        return response()->view('home');
    }
}
