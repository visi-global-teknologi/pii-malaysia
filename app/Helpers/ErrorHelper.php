<?php

namespace App\Helpers;

use Error;
use Illuminate\Database\QueryException;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Validation\ValidationException;
use Symfony\Component\ErrorHandler\Error\FatalError;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ErrorHelper
{
    public function getMessage($exception)
    {
        if ($exception instanceOf FatalError || $exception instanceof Error) {
            $message =  ('production' == config('app.env')) ? 'a fatal error occurred' : $exception->getMessage();
        } else {
            $message = $exception->getMessage();
        }

        if (true == $exception instanceOf ValidationException) {
            $message = app('string.helper')->getErrorLaravelFirstKey($exception->errors());
        }

        if (true == $exception instanceOf NotFoundHttpException) {
            $message = 'Route not found';
        }

        if (true == $exception instanceOf QueryException) {
            $message = ('production' == config('app.env')) ? 'Query failed to execute' : $message;
        }

        if (true == $exception instanceOf ClientException) {
            $message = ('production' == config('app.env')) ? 'Failed fetching request to client' : $message;
        }

        if (true == $exception instanceOf AuthenticationException) {
            $message = 'Invalid token';
        }

        return $message;
    }
}
