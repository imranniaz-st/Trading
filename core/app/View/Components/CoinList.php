<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CoinList extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
     
    public function render()
{
    $coins = ['Bitcoin', 'Ethereum', 'Litecoin', 'Dogecoin'];
    return view('components.coin-list', compact('coins'));
}

}
