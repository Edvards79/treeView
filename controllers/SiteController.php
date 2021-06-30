<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\models\User;
use app\core\middlewares\AuthMiddleware;

class SiteController extends Controller
{
	public function __construct()
	{
		$this->registerMiddleware(new AuthMiddleware([
            "treeView"
        ]));
	}

	public function home()
	{
		return $this->render("home");
	}

	public function treeView()
	{
		return $this->render("treeView");
	}
}