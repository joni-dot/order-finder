<?php

namespace App\Http\Livewire\Carriers;

use Livewire\Component;
use App\Carrier;
use App\Http\Requests\SaveCarrierRequest;
use App\Actions\Carriers\UpdateCarrier as UpdateCarrierAction;

class EditCarrier extends Component
{
    public $carrierId;
    public $name;

    public function mount($carrier)
    {
        $this->carrierId = $carrier->id;
        $this->name = $carrier->name;
    }

    public function submit()
    {
        $this->validate((new SaveCarrierRequest)->rules());

        (new UpdateCarrierAction)->execute(Carrier::findOrFail($this->carrierId), [
            'name' => $this->name,
        ]);

        return redirect()->to('/carriers');
    }

    public function render()
    {
        return view('livewire.carriers.edit-carrier');
    }
}
