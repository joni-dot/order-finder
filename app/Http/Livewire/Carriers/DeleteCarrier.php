<?php

namespace App\Http\Livewire\Carriers;

use App\Actions\Carriers\DeleteCarrier as DeleteCarrierAction;
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
        (new DeleteCarrierAction())->execute(
            Carrier::findOrFail($this->carrierId)
        );

        return redirect()->route('dashboard.carriers.index');
    }

    public function render()
    {
        return view('livewire.carriers.delete-carrier');
    }
}
