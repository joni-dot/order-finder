<?php

namespace App\View\Components\Listing;

use App\Models\Carrier;

class CarrierListing extends Listing
{
    /**
     * Return name of the shown items.
     *
     * @return string
     */
    protected function itemsName(): string
    {
        return 'carriers';
    }

    /**
     * Return array of columns and column definitions.
     *
     * @return array
     */
    protected function columns(): array
    {
        return [
            'id',
            'name',
        ];
    }

    /**
     * Return per page count for pagination.
     *
     * @return int
     */
    protected function perPage(): int
    {
        return 15;
    }

    /**
     * Return model that Listing component uses.
     *
     * @return int
     */
    protected function model()
    {
        return Carrier::class;
    }
}
