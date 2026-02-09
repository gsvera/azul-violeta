<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ComponentMenuHeader extends Component
{
    public $className;

    public function _constructor() 
    {

    }

    public function render()
    {
        return view('components.menu-header');
    }
}