<?php

namespace app\models;

use app\core\UserModel;

class User extends UserModel
{
	public string $username = "";
	public string $password = "";

	public function register()
	{
		$this->password = password_hash($this->password, PASSWORD_DEFAULT);
		return $this->save();
	}

	public static function tableName(): string
	{
		return "users";
	}

	public static function primaryKey(): string
	{
		return "id";
	}

	public function rules(): array
	{
		return [
			"username" => [self::RULE_REQUIRED, [self::RULE_UNIQUE, "class" => self::class]],
			"password" => [self::RULE_REQUIRED, [self::RULE_MIN, "min" => 8], [self::RULE_MAX, "max" => 32]],
		];
	}

	public function attributes(): array
	{
		return ["username", "password"];
	}

	public function labels(): array
	{
		return [
			"username" => "Username",
			"password" => "Password",
		];
	}

	public function getDisplayName(): string
	{
		return $this->username;
	}
}