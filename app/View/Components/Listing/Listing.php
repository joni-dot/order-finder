<?php

namespace App\View\Components\Listing;

use Illuminate\Support\Arr;
use Illuminate\View\Component;

class Listing extends Component
{
    /**
     * Eloquent collection of items.
     *
     * @var \Illuminate\Support\Collection
     */
    public $items;

    /**
     * Name of the items.
     *
     * @var string
     */
    public $itemsName = null;

    /**
     * List of hidden columns that are not shown on listing.
     *
     * @var array
     */
    public $hiddenColumns = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $items,
        $itemsName = '',
        $hiddenColumns = []
    ) {
        $this->items = $items;
        $this->itemsName = $itemsName;
        $this->hiddenColumns = $hiddenColumns;
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
            'columns' => $this->columns(),
            'itemsName' => $this->itemsName,
        ]);
    }

    /**
     * Get columns from Eloquent collection.
     *
     * @return array
     */
    private function columns(): array
    {
        if ($this->noItems()) {
            return [];
        }

        return $this->visibleColumns();
    }

    /**
     * Check id there's no items on collection.
     *
     * @return bool
     */
    private function noItems(): bool
    {
        return $this->items->isEmpty();
    }

    /**
     * Return columns that are visible on listing.
     *
     * @return bool
     */
    private function visibleColumns(): array
    {
        return Arr::where(array_keys($this->items->toQuery()->getModel()->getAttributes()), function ($value) {
            return ! in_array($value, $this->hiddenColumns);
        });
    }
}
