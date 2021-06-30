<?php

namespace app\core\form;
use app\core\Model;

abstract class BaseField
{
    public Model $model;
	public string $attribute;

    public function __construct(Model $model, string $attribute)
	{
		$this->model = $model;
		$this->attribute = $attribute;
	}

    abstract public function renderInput(): string;

    public function __toString()
	{
		return sprintf('
			<div class="input-field%s">
				<i></i>
				%s
			</div>
			<div class="invalid-feedback">%s</div>',
			$this->model->hasError($this->attribute) ? " is-invalid" : "",
			$this->renderInput(),
			$this->model->getFirstError($this->attribute)
		);
	}
}