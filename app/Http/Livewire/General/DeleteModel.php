<?php

namespace App\Http\Livewire\General;

use Illuminate\Support\Str;
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
        $actionClass = 'App\\Actions\\'
            .Str::plural(class_basename($this->model)).'\\'
            .'Delete'.class_basename($this->model);

        if (class_exists($actionClass)) {
            (new $actionClass)->execute($this->model);
        }

        $this->model->delete();

        return redirect()->to($this->redirectRoute);
    }

    public function render()
    {
        return view('livewire.general.delete-model');
    }
}
