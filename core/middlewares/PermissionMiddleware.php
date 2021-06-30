<?php

namespace app\core\middlewares;

use app\core\Application;
use app\core\exception\ForbiddenException;

class PermissionMiddleware extends BaseMiddleware
{
    public array $actions = [];

    public function __construct(array $actions = [])
    {
        $this->actions = $actions;
    }

    public function execute()
    {
        foreach ($this->actions as $entry) {
            foreach ($entry as $action => $checkerFunc) {
                $actionRegex = "/^\/?".str_replace("/", "\/", $action)."\/?$/";
                if (preg_match($actionRegex, $_SERVER["REQUEST_URI"])) {
                    if (!Application::$app->user || !call_user_func_array($checkerFunc, [])) {
                        throw new ForbiddenException();
                    }
                }
            }
        }
    }
}