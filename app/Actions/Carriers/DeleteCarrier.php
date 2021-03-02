<?php

namespace App\Actions\Carriers;

use App\Events\Carriers\CarrierDeleted;
use App\Models\Carrier;

class DeleteCarrier
{
    public function execute(Carrier $carrier)
    {
        CarrierDeleted::dispatch(
            tap($carrier)->delete()
        );
    }
}
