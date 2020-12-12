<?php

namespace App\View\Components\Listing;

use Illuminate\View\Component;

class Listing extends Component
{
    /**
     * Eloquent collection of items.
     *
     * @var string
     */
    public $items;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($items)
    {
        $this->items = $items;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.listing.listing', [
            'columns' => $this->getColumns(),
        ]);
    }

    /**
     * Get columns from Eloquent collection.
     * 
     * @param mixed $items
     * @return array
     */
    private function getColumns(): array
    {
        return array_keys(
            $this->items->toQuery()->getModel()->getAttributes()
        );
    }
}
