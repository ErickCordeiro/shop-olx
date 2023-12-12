<?php

namespace App\View\Components;

use App\Models\State;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Hero extends Component
{

    public $states;
    public $categories;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->states = State::all();
        $this->categories = [
            ["values" => "cars", "name" => "CARROS"],
            ["values" => "houses", "name" => "CASAS"],
            ["values" => "eletronics", "name" => "ELETRÔNICOS"],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.hero');
    }
}
