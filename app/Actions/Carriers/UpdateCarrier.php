<?php

namespace App\Actions\Carriers;

use App\Events\Carriers\CarrierUpdated;
use App\Models\Carrier;

class UpdateCarrier
{
    public function execute(Carrier $carrier, array $values)
    {
        CarrierUpdated::dispatch(
            tap($carrier)->update($values)->fresh()
        );
    }
}
