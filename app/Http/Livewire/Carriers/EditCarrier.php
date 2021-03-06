<?php

namespace App\Http\Livewire\Carriers;

use App\Actions\Carriers\UpdateCarrier as UpdateCarrierAction;
use App\Http\Requests\SaveCarrierRequest;
use App\Models\Carrier;
use Livewire\Component;

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

        return redirect()->route('dashboard.carriers.index');
    }

    public function render()
    {
        return view('livewire.carriers.edit-carrier');
    }
}
