<?php

namespace App\Http\Livewire\Carriers\ModeOfTransports;

use App\Actions\ModeOfTransports\CreateModeOfTransport as CreateModeOfTransportAction;
use App\Http\Requests\SaveModeOfTransportRequest;
use Livewire\Component;

class CreateCarrierModeOfTransport extends Component
{
    public $carrier;
    public $name;
    public $price;
    public $price_vat;

    public function mount($carrier)
    {
        $this->carrier = $carrier;
    }

    public function submit()
    {
        $this->validate((new SaveModeOfTransportRequest)->rules());

        (new CreateModeOfTransportAction)->execute([
            'carrier_id' => $this->carrier->id,
            'name' => $this->name,
            'price' => $this->price,
            'price_vat' => $this->price_vat,
        ]);

        return redirect()->route(
            'carriers.mode-of-transports.index',
            $this->carrier->slug
        );
    }

    public function render()
    {
        return view('livewire.carriers.mode-of-transports.create-carrier-mode-of-transport');
    }
}
