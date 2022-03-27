<?php

namespace App\Http\Controllers\Traits;

trait ActionDataBinding
{

    protected function bind (): array
    {
        $data = [];
        if(!empty($this->model)){
            $data['model'] = app($this->model);
        }
        return $data;
    }

}
