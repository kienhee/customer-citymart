<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Product extends Component
{
    /**
     * Create a new component instance.
     */
    public $thumnail;
    public $name;
    public $price;
    public $id;
    public $slug;

    public function __construct($id, $thumnail, $name, $slug, $price)
    {
        $this->id = $id;
        $this->thumnail = $thumnail;
        $this->name = $name;
        $this->slug = $slug;
        $this->price = $price;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product');
    }
}
