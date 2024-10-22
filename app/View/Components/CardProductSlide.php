<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardProductSlide extends Component
{
    public $title;
    public $isRecomended;
    public $image;
    public $price;
    public $href;
    
    public function __construct($title, $isRecomended, $image, $price, $href)
    {
        $this->title = $title;
        $this->isRecomended = $isRecomended;
        $this->image = $image;
        $this->price = $price;
        $this->href = $href;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-product-slide');
    }
}
