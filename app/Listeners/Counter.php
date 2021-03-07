<?php

namespace App\Listeners;

use App\Models\Counter as CounterModel;
use Illuminate\Support\Str;

class Counter
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  mixed  $event
     * @return void
     */
    public function handle($event)
    {
        $eventParts = Str::of(class_basename($event))
            ->snake()
            ->replace('_', ' ')
            ->explode(' ');

        $existingCounter = CounterModel::query()
            ->where('countable_type', Str::plural($eventParts[0]))
            ->first();

        if (! $existingCounter) {
            CounterModel::create([
                'countable_type' => Str::plural($eventParts[0]),
                'quantity' => 1,
            ]);

            return;
        }

        switch ($eventParts[1]) {
            case 'created':
                $existingCounter->update([
                    'quantity' => $existingCounter->quantity + 1,
                ]);
                break;

            case 'deleted':
                $existingCounter->update([
                    'quantity' => $existingCounter->quantity - 1,
                ]);
                break;
        }
    }
}
