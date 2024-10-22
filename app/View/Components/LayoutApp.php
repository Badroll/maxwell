<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LayoutApp extends Component
{   
    public $withNavbar;
    public $withFooter;
    public $withBottomNavbar;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($withNavbar = 'true', $withFooter = 'true', $withBottomNavbar = 'true')
    {
        $this->withNavbar = $withNavbar;
        $this->withFooter = $withFooter;
        $this->withBottomNavbar = $withBottomNavbar;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layout-app');
    }
}
