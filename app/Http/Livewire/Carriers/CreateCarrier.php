<?php

namespace App\Http\Livewire\Carriers;

use Livewire\Component;
use App\Carrier;
use App\Http\Requests\SaveCarrierRequest;
use App\Actions\Carriers\CreateCarrier as CreateCarrierAction;

class CreateCarrier extends Component
{
    public $name;

    public function mount($carrier)
    {
        $this->name = $carrier->name;
    }

    public function submit()
    {
        $this->validate((new SaveCarrierRequest)->rules());

        (new CreateCarrierAction)->execute([
            'name' => $this->name,
        ]);

        return redirect()->to('/carriers');
    }

    public function render()
    {
        return view('livewire.carriers.create-carrier');
    }
}
