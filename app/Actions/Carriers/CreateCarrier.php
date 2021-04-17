<?php

namespace App\Actions\Carriers;

use App\Events\Carriers\CarrierCreated;
use App\Models\Carrier;
use Illuminate\Support\Str;

class CreateCarrier
{
    public function execute(array $values)
    {
        CarrierCreated::dispatch(
            Carrier::create(array_merge($values, [
                'slug' => Str::slug($values['name']),
            ])
        ));
    }
}
