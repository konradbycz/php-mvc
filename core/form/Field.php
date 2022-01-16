<?php

namespace app\core\form;

use app\core\Model;
/**
 * @package app\core\form
 */
class Field
{
    public Model $model;
    public string $attr;

    /**
     * @param Model $model
     * @param string $attr
     */
    public function __construct(\app\core\Model $model, string $attr)
    {
        $this->model = $model;
        $this->attr = $attr;
    }


}