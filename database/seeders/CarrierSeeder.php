<?php

namespace Database\Seeders;

use App\Models\Carrier;
use Illuminate\Database\Seeder;

class CarrierSeeder extends Seeder
{
    /**
     * Run the carrier seeder.
     *
     * @return void
     */
    public function run()
    {
        Carrier::create([
            'name' => 'Posti',
        ]);
        Carrier::create([
            'name' => 'Matkahuolto',
        ]);
        Carrier::create([
            'name' => 'DHL',
        ]);
        Carrier::create([
            'name' => 'DB Schenker',
        ]);
    }
}
