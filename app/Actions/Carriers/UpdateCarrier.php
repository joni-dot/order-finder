<?php

namespace App\Actions\Carriers;

use App\Events\Carriers\CarrierUpdated;
use App\Models\Carrier;
use Illuminate\Support\Str;

class UpdateCarrier
{
    public function execute(Carrier $carrier, array $values)
    {
        CarrierUpdated::dispatch(
            tap($carrier)->update(array_merge($values, [
                'slug' => Str::slug($values['name']),
            ]))->fresh()
        );
    }
}
