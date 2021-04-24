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
        Carrier::factory()
            ->hasComments(3)
            ->create([
                'name' => 'Posti',
                'slug' => 'posti',
            ]);

        Carrier::factory()
            ->hasComments(3)
            ->create([
                'name' => 'Matkahuolto',
                'slug' => 'matkahuolto',
            ]);

        Carrier::factory()
            ->hasComments(3)
            ->create([
                'name' => 'DHL',
                'slug' => 'dhl',
            ]);

        Carrier::factory()
            ->hasComments(3)
            ->create([
                'name' => 'DB Schenker',
                'slug' => 'db-schenker',
            ]);
    }
}
