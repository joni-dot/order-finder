<?php

namespace Database\Seeders;

use App\Models\Carrier;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarrierSeeder extends Seeder
{
    /**
     * Run the carrier seeders.
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
