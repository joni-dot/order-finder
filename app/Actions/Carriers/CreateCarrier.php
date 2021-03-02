<?php

namespace App\Actions\Carriers;

use App\Events\Carriers\CarrierCreated;
use App\Models\Carrier;

class CreateCarrier
{
    public function execute(array $values)
    {
        CarrierCreated::dispatch(
            Carrier::create($values)
        );
    }
}
