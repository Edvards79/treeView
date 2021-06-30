<?php

namespace app\core\form;

use app\core\Model;


class Form
{
	public static function begin($action, $method)
	{
		echo "<form action='$action' method='$method'>";
		return new Form();
	}

	public static function signupBegin($action, $method)
	{
		echo "<form action='$action' method='$method' class='sign-up-form'>";
		return new Form();
	}

	public static function signinBegin($action, $method)
	{
		echo "<form action='$action' method='$method' class='sign-in-form'>";
		return new Form();
	}

	public static function multipartBegin($action, $method)
	{
		echo "<form enctype='multipart/form-data' action='$action' method='$method'>";
		return new Form();
	}

	public static function end()
	{
		echo "</form>";
	}

	public function inputField(Model $model, $attribute)
	{
		return new InputField($model, $attribute);
	}

	public function textareaField(Model $model, $attribute)
	{
		return new TextareaField($model, $attribute);
	}
}