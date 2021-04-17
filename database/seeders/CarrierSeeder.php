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
            'slug' => 'posti',
        ]);
        Carrier::create([
            'name' => 'Matkahuolto',
            'slug' => 'matkahuolto',
        ]);
        Carrier::create([
            'name' => 'DHL',
            'slug' => 'dhl',
        ]);
        Carrier::create([
            'name' => 'DB Schenker',
            'slug' => 'db-schenker',
        ]);
    }
}
