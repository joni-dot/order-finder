<?php

namespace App\Http\Livewire\General;

use Livewire\Component;

class DeleteModel extends Component
{
    public $model;
    public $redirectRoute;

    public function mount($model, $redirectRoute)
    {
        $this->model = $model;
        $this->redirectRoute = $redirectRoute;
    }

    public function delete()
    {
        $this->model->delete();

        return redirect()->to($this->redirectRoute);
    }

    public function render()
    {
        return view('livewire.general.delete-model');
    }
}
