<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class sideBar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        if (Auth::user()->role == 0) {
            return view('components.side-bar');
        }
        if (Auth::user()->role == 0) {
            return view('components.side-bar');
        }
        if (Auth::user()->role == 0) {
            return view('components.side-bar');
        }
        if (Auth::user()->role == 0) {
            return view('components.side-bar');
        }
        if (Auth::user()->role == 0) {
            return view('components.side-bar');
        }
        if (Auth::user()->role == 0) {
            return view('components.side-bar');
        }
        if (Auth::user()->role == 0) {
            return view('components.side-bar');
        }
    }
}
