<?php

namespace App\View\Components\Listing;

use App\Models\Carrier;

class CarrierListing extends Listing
{
    /**
     * Return listing items that are shown on the listing.
     *
     * @return mixed
     */
    protected function items()
    {
        return Carrier::select([
            'id',
            'name',
        ])->paginate();
    }

    /**
     * Return name of the shown items.
     *
     * @return string
     */
    protected function itemsName(): string
    {
        return 'carriers';
    }
}
