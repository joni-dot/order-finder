<?php

namespace App\Http\Livewire\General;

use Illuminate\Support\Arr;
use Livewire\Component;

class Listing extends Component
{
    public $items = [];
    public $columns = [];
    public $langFile = '';
    public $orderBy = [];
    public $viewPath = '';

    /**
     * Render livewire component view.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function render()
    {
        $this->items = $this->items();
        $this->columns = $this->handleColumns();
        $this->langFile = $this->langFile();
        $this->viewPath = $this->viewPath();

        return view('livewire.general.listing');
    }

    /**
     * Handle sorting toggle.
     *
     * @param string $column
     * @return void
     */
    public function sortToggle(string $column)
    {
        $this->orderBy = Arr::only($this->orderBy, [$column]);

        switch (Arr::get($this->orderBy, $column)) {
            case 'ASC':
                $this->orderBy = Arr::set($this->orderBy, $column, 'DESC');
                break;

            case 'DESC':
                $this->orderBy = Arr::set($this->orderBy, $column, 'ASC');
                break;

            default:
                $this->orderBy = Arr::set($this->orderBy, $column, 'ASC');
                break;
        }
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
     * @return array
     */
    private function handleVisibleColumns(): array
    {
        return Arr::where($this->columns(), function ($value, $key) {
            return ! in_array($key, $this->hiddenColumns());
        });
    }

    /**
     * Return listing items that are shown on the listing.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    protected function items()
    {
        $query = $this->model()->select($this->buildSelect());

        $query = $this->buildOrderBy($query);

        return $query->get();
    }

    /**
     * Build order by clause to the query.
     *
     * @return \Illuminate\Database\Query\Builder
     */
    protected function buildOrderBy($query)
    {
        foreach ($this->orderBy as $column => $direction) {
            $query->orderBy($column, $direction);
        }

        return $query;
    }

    /**
     * Build select array for the guery builder select method.
     *
     * @return array
     */
    protected function buildSelect()
    {
        return array_keys($this->columns());
    }

    /**
     * Return the lang file of the items.
     *
     * @return string
     */
    protected function langFile(): string
    {
        return $this->modelTable();
    }

    /**
     * Returns the path of items view path.
     *
     * @return string
     */
    protected function viewPath(): string
    {
        return $this->modelTable();
    }

    /**
     * Try to get table name from model or model relation.
     *
     * @return string
     */
    protected function modelTable(): string
    {
        if (method_exists($this->model(), 'getTable')) {
            return $this->model()->getTable();
        }

        return $this->model()->getRelated()->getTable();
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
     * @return array
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
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    protected function model()
    {
        return null;
    }
}
