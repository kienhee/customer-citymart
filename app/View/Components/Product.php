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
    public $id;
    public $images;
    public $name;
    public $price;
    public $slug;
    public $discount;

    public function __construct($id, $images, $name, $slug, $price, $discount)
    {
        $this->id = $id;
        $this->images = $images;
        $this->name = $name;
        $this->slug = $slug;
        $this->price = $price;
        $this->discount = $discount;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product');
    }
}
