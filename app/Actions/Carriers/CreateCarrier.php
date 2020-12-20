<?php

namespace App\Actions\Carriers;

use App\Models\Carrier;

class CreateCarrier
{
    public function execute(array $values)
    {
        Carrier::create($values);
    }
}
