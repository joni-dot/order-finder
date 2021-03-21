<?php

namespace App\Http\Livewire\General;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Redirector;

class DeleteModel extends Component
{
    public $model;
    public $redirectRoute;
    public $confirm = false;

    public function mount($model, $redirectRoute): void
    {
        $this->model = $model;
        $this->redirectRoute = $redirectRoute;
        $this->confirm = false;
    }

    /**
     * Show confirm button for the user on view.
     *
     * @return void
     */
    public function showConfirm(): void
    {
        $this->confirm = true;
    }

    /**
     * Process model deletion.
     *
     * @return \Livewire\Redirector
     */
    public function delete(): Redirector
    {
        $this->doDeletetion();

        return redirect()->to($this->redirectRoute);
    }

    /**
     * Rendel delete button.
     *
     * @return \Illuminate\View\View
     */
    public function render(): View
    {
        return view('livewire.general.delete-model');
    }

    /**
     * Try to find action class that can be used for deletion process.
     *
     * @return mixed
     */
    protected function resolveAction()
    {
        $action = 'App\\Actions\\'
            .Str::plural(class_basename($this->model)).'\\'
            .'Delete'.class_basename($this->model);

        if (! class_exists($action)) {
            return;
        }

        return new $action;
    }

    /**
     * Process deletion by using action class or model directly.
     *
     * @return void
     */
    protected function doDeletetion(): void
    {
        if ($this->resolveAction()) {
            $this->resolveAction()->execute($this->model);
        }

        $this->model->delete();
    }
}
