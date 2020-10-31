<?php

namespace App\Http\Livewire;

use App\Models\Liga; // import dulu gaes
use App\Models\Product; // import dulu gaes
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'products' => Product::take(4)->get(),
            'ligas' => Liga::all()
        ]);
    }
}
