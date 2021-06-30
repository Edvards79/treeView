<?php

namespace app\core\form;

class TextareaField extends BaseField
{
    public string $id = "";
    public int $rows = 5;

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setRows($rows)
    {
        $this->rows = $rows;
        return $this;
    }

    public function renderInput(): string
    {
        return sprintf('<textarea id="%s" rows="%u" name="%s" class="form-control%s">%s</textarea>',
            $this->id,
            $this->rows,
            $this->attribute,
            $this->model->hasError($this->attribute) ? " is-invalid" : "",
            $this->model->{$this->attribute},
        );
    }
}