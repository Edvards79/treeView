<?php

namespace app\core\exception;

class NotAuthorizedException extends \Exception
{
    protected $code = 401;
    protected $message = "Please authorize before accessing this page.";
}