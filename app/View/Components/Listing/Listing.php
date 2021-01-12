<?php

namespace App\View\Components\Listing;

use Illuminate\Support\Arr;
use Illuminate\View\Component;

class Listing extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        if ($this->items()->isEmpty()) {
            return view($this->itemsName().'.components.list-empty');
        }

        return view('components.listing.listing', [
            'items' => $this->items(),
            'columns' => $this->handleColumns(),
            'itemsName' => $this->itemsName(),
        ]);
    }

    /**
     * Get columns from Eloquent collection.
     *
     * @return array
     */
    private function handleColumns(): array
    {
        if ($this->noItems()) {
            return [];
        }

        return $this->handleVisibleColumns();
    }

    /**
     * Check id there's no items on collection.
     *
     * @return bool
     */
    private function noItems(): bool
    {
        return $this->items()->isEmpty();
    }

    /**
     * Return columns that are visible on listing.
     *
     * @return bool
     */
    private function handleVisibleColumns(): array
    {
        return Arr::where(array_keys($this->items()->toQuery()->getModel()->getAttributes()), function ($value) {
            return ! in_array($value, $this->hiddenColumns());
        });
    }

    /**
     * Return listing items that are shown on the listing.
     *
     * @return mixed
     */
    protected function items()
    {
        return collect();
    }

    /**
     * Return name of the shown items.
     *
     * @return string
     */
    protected function itemsName(): string
    {
        return '';
    }

    /**
     * Return columns that are hidden from listing.
     *
     * @return array
     */
    protected function hiddenColumns(): array
    {
        return [];
    }

    /**
     * Return array of columns and column definitions.
     *
     * @return string
     */
    protected function columns(): array
    {
        return [];
    }

    /**
     * Return per page count for pagination.
     *
     * @return int
     */
    protected function perPage(): int
    {
        return 15;
    }

    /**
     * Return model that Listing component uses.
     *
     * @return int
     */
    protected function model()
    {
        return null;
    }
}
