<?php

namespace App\Http\Livewire\General;

use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class Comments extends Component
{
    public $model;

    public function mount(Model $model)
    {
        $this->model = $model;
    }

    public function render()
    {
        return view('livewire.general.comments');
    }
}
