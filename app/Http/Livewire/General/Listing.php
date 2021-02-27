<?php

namespace App\Http\Livewire\General;

use Illuminate\Support\Arr;
use Livewire\Component;

class Listing extends Component
{
    public $items = [];
    public $columns = [];
    public $itemsName = '';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function mount()
    {
        $this->items = $this->items();
        $this->columns = $this->handleColumns();
        $this->itemsName = $this->itemsName();      
    }

    /**
     * Render livewire component.
     *
     * @return mixed
     */
    public function render() 
    {
        return view('livewire.general.listing');
    }

    /**
     * Handle sorting toggle.
     * 
     * @param string $column
     */
    public function sortToggle(string $column) 
    {
        
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
        return $this->model()
            ->select($this->columns())
            ->get();
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
     * @return mixed
     */
    protected function model()
    {
        return null;
    }
}
