<?php

namespace App\Http\Controllers\Traits;

use Illuminate\View\View;

trait EditAction
{
    
    // You must add protected $model = Model::class in controller
    
    public function edit(int $id): View
    {
        $model = app($this->model)->findOrFail($id);
        return view('edit', compact('model'));
    }

}
