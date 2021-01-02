<?php

namespace App\Http\Livewire\Carriers\ModeOfTransports;

use App\Models\Carrier;
use App\Models\ModeOfTransport;
use Livewire\Component;

class DeleteCarrierModeOfTransport extends Component
{
    public $carrier;
    public $modeOfTransport;

    public function mount(Carrier $carrier, ModeOfTransport $modeOfTransport)
    {
        $this->carrier = $carrier;
        $this->modeOfTransport = $modeOfTransport;
    }

    public function delete()
    {
        $this->carrier->modeOfTransports()
            ->where((new ModeOfTransport)->getTable().'.id', $this->modeOfTransport->id)
            ->firstOrFail()
            ->delete();

        return redirect()->route(
            'carriers.mode-of-transports.index',
            [$this->carrier->id, $this->modeOfTransport->id]
        );
    }

    public function render()
    {
        return view('livewire.carriers.mode-of-transports.delete-carrier-mode-of-transport');
    }
}
