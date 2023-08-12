<?php

namespace App\Exceptions\Auth;

use Exception;

class LoginFailed extends Exception
{
    public function render($request)
    {
        return abort(500, 'Ошибка обработки формы авторизации.');
    }
}
