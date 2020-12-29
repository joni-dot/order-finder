<?php

namespace Database\Seeders;

use App\Models\Carrier;
use App\Models\ModeOfTransport;
use Illuminate\Database\Seeder;

class ModeOfTransportSeeder extends Seeder
{
    /**
     * Run the carrier seeder.
     *
     * @return void
     */
    public function run()
    {
        $this->seedPostiModeTransports();
    }

    /**
     * Seed mode of transports for Posti.
     *
     * @return void
     */
    private function seedPostiModeTransports()
    {
        $carrier = Carrier::where('name', 'Posti')->firstOrFail();

        $modeOfTransports = collect([
            [
                'name' => 'SmartPost',
                'price' => 0,
                'price_vat' => 0,
            ],
            [
                'name' => 'Postipaketti',
                'price' => 0,
                'price_vat' => 0,
            ],
            [
                'name' => 'Kotiinkuljetus',
                'price' => 0,
                'price_vat' => 0,
            ],
        ]);

        $modeOfTransports->each(function ($modeOfTransport) use ($carrier) {
            ModeOfTransport::create(array_merge($modeOfTransport, [
                'carrier_id' => $carrier->id,
            ]));
        });
    }
}
