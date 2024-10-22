<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BranchInfo extends Component
{
    public $address;
    public $phone;
    public $phoneId;
    public $fax;
    public $whatsapp;
    public $linkWA;
    public $location;
    public function __construct($address, $phone, $phoneId, $fax, $whatsapp, $linkWA,$location)
    {
        $this->address = $address;
        $this->phone = $phone;
        $this->phoneId = $phoneId;
        $this->fax = $fax;
        $this->whatsapp = $whatsapp;
        $this->linkWA = $linkWA;
        $this->location = $location;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.branch-info');
    }
}
