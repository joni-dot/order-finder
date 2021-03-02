<?php

namespace App\Http\Livewire\Carriers;

use App\Events\Carriers\CarrierDeleted;
use App\Models\Carrier;
use Livewire\Component;

class DeleteCarrier extends Component
{
    public $carrierId;

    public function mount($carrier)
    {
        $this->carrierId = $carrier->id;
    }

    public function delete()
    {
        CarrierDeleted::dispatch(
            tap(Carrier::findOrFail($this->carrierId))->delete()
        );

        return redirect()->to('/carriers');
    }

    public function render()
    {
        return view('livewire.carriers.delete-carrier');
    }
}
