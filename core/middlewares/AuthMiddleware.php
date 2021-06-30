<?php

namespace app\core\middlewares;

use app\core\Application;
use app\core\exception\NotAuthorizedException;

class AuthMiddleware extends BaseMiddleware
{
    public array $actions = [];

    public function __construct(array $actions = [])
    {
        $this->actions = $actions;
    }

    public function execute()
    {
        if (Application::isGuest()) {
            foreach ($this->actions as $action) {
                $actionRegex = "/^\/?".str_replace("/", "\/", $action)."\/?$/";
                if (preg_match($actionRegex, $_SERVER["REQUEST_URI"])) {
                    throw new NotAuthorizedException();
                }
            }
        }
    }
}