<?php

namespace App\Http\Controllers\Traits;

use Illuminate\View\View;

trait CreateAction
{

    use ActionDataBinding;

    // You may add protected $model = Model::class in controller

    public function create(): View
    {
        $data = $this->bind();
        return view('create', $data);
    }

}
