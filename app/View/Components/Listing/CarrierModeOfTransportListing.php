<?php

namespace App\View\Components\Listing;

use App\Models\Carrier;

class CarrierModeOfTransportListing extends Listing
{
    /**
     * Carrier model.
     *
     * @var \App\Models\Carrier
     */
    protected $carrier;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Carrier $carrier)
    {
        $this->carrier = $carrier;
    }

    /**
     * Return listing items that are shown on the listing.
     *
     * @return mixed
     */
    protected function items()
    {
        return $this->carrier->modeOfTransports()
            ->select([
                'id',
                'name',
                'carrier_id',
            ])
                ->paginate();
    }

    /**
     * Return name of the shown items.
     *
     * @return string
     */
    protected function itemsName(): string
    {
        return 'mode-of-transports';
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
}
