<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FilteredAdvertives extends Component
{
    public $advertiseList;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->advertiseList = [
            [
                'image' => 'http://placehold.it/145x145',
                'title' => 'Tênis vans baby - 1 ano',
                'price' => 'R$ 189,90',
                'href' => '#'
            ],
            [
                'image' => 'http://placehold.it/145x145',
                'title' => 'Tênis vans baby - 1 ano',
                'price' => 'R$ 189,90',
                'href' => '#'
            ],
            [
                'image' => 'http://placehold.it/145x145',
                'title' => 'Tênis vans baby - 1 ano',
                'price' => 'R$ 189,90',
                'href' => '#'
            ],
            [
                'image' => 'http://placehold.it/145x145',
                'title' => 'Tênis vans baby - 1 ano',
                'price' => 'R$ 189,90',
                'href' => '#'
            ],
            [
                'image' => 'http://placehold.it/145x145',
                'title' => 'Tênis vans baby - 1 ano',
                'price' => 'R$ 189,90',
                'href' => '#'
            ],
            [
                'image' => 'http://placehold.it/145x145',
                'title' => 'Tênis vans baby - 1 ano',
                'price' => 'R$ 189,90',
                'href' => '#'
            ],
            [
                'image' => 'http://placehold.it/145x145',
                'title' => 'Tênis vans baby - 1 ano',
                'price' => 'R$ 189,90',
                'href' => '#'
            ],
            [
                'image' => 'http://placehold.it/145x145',
                'title' => 'Tênis vans baby - 1 ano',
                'price' => 'R$ 189,90',
                'href' => '#'
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.filtered-advertives');
    }
}
