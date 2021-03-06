<?php

namespace App\Http\Livewire\Carriers;

use App\Http\Livewire\General\Listing;
use App\Models\Carrier;

class CarrierListing extends Listing
{
    /**
     * Return columns that are hidden from listing.
     *
     * @return array
     */
    protected function hiddenColumns(): array
    {
        return ['slug'];
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
            'slug' => [
                'sortable' => false,
            ],
        ];
    }

    /**
     * Return model that Listing component uses.
     *
     * @return string
     */
    protected function model()
    {
        return new Carrier;
    }
}
