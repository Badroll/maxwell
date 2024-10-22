<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardProduct extends Component
{
    public $title;
    public $isRecomended;
    public $image;
    public $price;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $isRecomended, $image, $price)
    {
        $this->title = $title;
        $this->isRecomended = $isRecomended;
        $this->image = $image;
        $this->price = $price;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-product');
    }
}
