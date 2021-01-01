<?php

namespace App\Http\Livewire\Carriers\ModeOfTransports;

use App\Actions\ModeOfTransports\UpdateModeOfTransport as UpdateModeOfTransportAction;
use App\Http\Requests\SaveModeOfTransportRequest;
use Livewire\Component;

class EditCarrierModeOfTransport extends Component
{
    public $carrier;
    public $modeOfTransport;
    public $name;
    public $price;
    public $price_vat;

    public function mount($carrier, $modeOfTransport)
    {
        $this->carrier = $carrier;
        $this->modeOfTransport = $modeOfTransport;
        $this->name = $modeOfTransport->name;
        $this->price = $modeOfTransport->price;
        $this->price_vat = $modeOfTransport->price_vat;
    }

    public function submit()
    {
        $this->validate((new SaveModeOfTransportRequest)->rules());

        (new UpdateModeOfTransportAction)->execute($this->modeOfTransport, [
            'carrier_id' => $this->carrier->id,
            'name' => $this->name,
            'price' => $this->price,
            'price_vat' => $this->price_vat,
        ]);

        return redirect()->route(
            'carriers.mode-of-transports.index',
            $this->carrier->id
        );
    }

    public function render()
    {
        return view('livewire.carriers.mode-of-transports.edit-carrier-mode-of-transport');
    }
}
