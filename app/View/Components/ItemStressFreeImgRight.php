<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ItemStressFreeImgRight extends Component
{
    public $title;
    public $desc;
    public $image;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $desc, $image)
    {
        $this->title = $title;
        $this->desc = $desc;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.item-stress-free-img-right');
    }
}
