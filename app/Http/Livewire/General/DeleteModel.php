<?php

namespace App\Http\Livewire\General;

use Livewire\Component;

class DeleteModel extends Component
{
    public $model;
    public $redirectRoute;
    public $confirm = false;

    public function mount($model, $redirectRoute)
    {
        $this->model = $model;
        $this->redirectRoute = $redirectRoute;
        $this->confirm = false;
    }

    public function showConfirm()
    {
        $this->confirm = true;
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
