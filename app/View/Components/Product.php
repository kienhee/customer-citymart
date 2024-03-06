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
    public $description;
    public $price;
    public $slug;
    public $discount;
    public $quantity;
    public $colors;
    public $sizes;

    public function __construct($id, $images, $name, $description, $slug, $price, $discount, $quantity, $colors, $sizes)
    {
        $this->id = $id;
        $this->images = $images;
        $this->name = $name;
        $this->description = $description;
        $this->slug = $slug;
        $this->price = $price;
        $this->discount = $discount;
        $this->quantity = $quantity;
        $this->colors = $colors;
        $this->sizes = $sizes;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product');
    }
}
