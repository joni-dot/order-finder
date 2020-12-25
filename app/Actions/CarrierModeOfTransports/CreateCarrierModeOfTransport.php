<?php

namespace App\Actions\CarrierModeOfTransports;

use App\Models\CarrierModeOfTransport;

class CreateCarrierModeOfTransport
{
    /**
     * Create carrier mode of transport and save it to the database-.
     *
     * @param array $values
     * @return \App\Models\CarrierModeOfTransport
     */
    public function execute(array $values): CarrierModeOfTransport
    {
        return CarrierModeOfTransport::create(array_merge($values, [
            'price' => $values['price'] * 100,
            'price_vat' => $values['price_vat'] * 100,
        ]));
    }
}
