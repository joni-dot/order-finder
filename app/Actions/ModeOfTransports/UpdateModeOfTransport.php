<?php

namespace App\Actions\ModeOfTransports;

use App\Models\ModeOfTransport;

class UpdateModeOfTransport
{
    public function execute(ModeOfTransport $modeOfTransport, array $values)
    {
        $modeOfTransport->update(array_merge($values, [
            'price' => $values['price'] * 100,
            'price_vat' => $values['price_vat'] * 100,
        ]));
    }
}
