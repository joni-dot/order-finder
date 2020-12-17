<?php

namespace App\View\Components\Listing;

use Illuminate\View\Component;

class Listing extends Component
{
    /**
     * Eloquent collection of items.
     *
     * @var mixed
     */
    public $items;

    /**
     * Name of the items.
     *
     * @var mixed
     */
    public $itemsName = null;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($items, $itemsName)
    {
        $this->items = $items;
        $this->itemsName = $itemsName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        if ($this->items->isEmpty()) {
            return view($this->itemsName.'.components.list-empty');
        }

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
        if ($this->items->isEmpty()) {
            return [];
        }

        return array_keys(
            $this->items->toQuery()->getModel()->getAttributes()
        );
    }
}
