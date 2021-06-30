<?php

namespace app\core\form;

use app\core\Model;
use app\core\form\BaseField;

class InputField extends BaseField
{
	public const TYPE_TEXT = "text";
	public const TYPE_PASSWORD = "password";
	public const TYPE_NUMBER = "number";
	public const TYPE_FILE = "file";

	public string $type;
	public ?string $value = NULL;
	public ?String $placeholder = NULL;
	public bool $multiple = false;
	public bool $readonly = false;

	public function __construct(Model $model, string $attribute)
	{
		$this->type = self::TYPE_TEXT;
		parent::__construct($model, $attribute);
	}

	public function passwordField()
	{
		$this->type = self::TYPE_PASSWORD;
		return $this;
	}

	public function value($value)
	{
		$this->value = $value;
		return $this;
	}

	public function placeholder($placeholder)
	{
		$this->placeholder = $placeholder;
		return $this;
	}

	public function readonly()
	{
		$this->readonly = true;
		return $this;
	}

	public function fileField()
	{
		$this->type = self::TYPE_FILE;
		return $this;
	}

	public function multipleFileField()
	{
		$this->type = self::TYPE_FILE;
		$this->multiple = true;
		return $this;
	}

	public function renderInput(): string
	{
		return sprintf('<input type="%s" name="%s" placeholder="%s" value="%s"%s%s>',
			$this->type,
			$this->attribute,
			$this->placeholder ?? "",
			$this->value ?? $this->model->{$this->attribute},
			$this->readonly ? " readonly" : "",
			$this->multiple ? " multiple" : "",
		);
	}
}