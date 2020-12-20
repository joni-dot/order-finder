<?php

namespace App\Actions\Carriers;

use App\Models\Carrier;

class UpdateCarrier
{
    public function execute(Carrier $carrier, array $values)
    {
        $carrier->update($values);
    }
}
