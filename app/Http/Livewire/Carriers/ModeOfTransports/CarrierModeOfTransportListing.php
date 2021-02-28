<?php

namespace App\Http\Livewire\Carriers\ModeOfTransports;

use App\Http\Livewire\General\Listing;
use App\Models\Carrier;

class CarrierModeOfTransportListing extends Listing
{
    /**
     * Carrier model.
     *
     * @var \App\Models\Carrier
     */
    public $carrier;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function mount(Carrier $carrier)
    {
        $this->carrier = $carrier;
    }

    /**
     * Returns the path of items view path.
     *
     * @return string
     */
    protected function viewPath(): string
    {
        return 'carriers.mode-transports';
    }

    /**
     * Return columns that are hidden from listing.
     *
     * @return array
     */
    protected function hiddenColumns(): array
    {
        return ['carrier_id'];
    }

    /**
     * Return array of columns and column definitions.
     *
     * @return array
     */
    protected function columns(): array
    {
        return [
            'id' => [
                'sortable' => true,
            ],
            'name' => [
                'sortable' => true,
            ],
            'carrier_id' => [
                'sortable' => true,
            ],
        ];
    }

    /**
     * Return model that Listing component uses.
     *
     * @return mixed
     */
    protected function model()
    {
        return $this->carrier->modeOfTransports();
    }
}
