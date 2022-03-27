<?php

namespace App\Http\Controllers\Traits;

use Illuminate\View\View;

trait IndexAction
{

    use ActionDataBinding;

    // You may add protected $model = Model::class in controller

    public function index(): View
    {
        $data = $this->bind();
        return view('index', $data);
    }

}
