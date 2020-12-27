<?php

namespace App\Actions\ModeOfTransports;

use App\Models\ModeOfTransport;

class CreateModeOfTransport
{
    /**
     * Create carrier mode of transport and save it to the database-.
     *
     * @param array $values
     * @return \App\Models\ModeOfTransport
     */
    public function execute(array $values): ModeOfTransport
    {
        return ModeOfTransport::create(array_merge($values, [
            'price' => $values['price'] * 100,
            'price_vat' => $values['price_vat'] * 100,
        ]));
    }
}
