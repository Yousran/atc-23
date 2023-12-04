<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Table extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $tableName,
        public string $jsonLink,
        public array $columns,
    )
    {
        $this->tableName = $tableName;
        $this->jsonLink = $jsonLink;
        $this->columns = $columns;
    }
    

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render(): View
    {
        return view('components.table');
    }
}
