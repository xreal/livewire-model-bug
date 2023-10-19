<?php

namespace App\Livewire;

use Livewire\Attributes\Lazy;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Modelable;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class Selectbox extends Component
{
    public int $qty = 0;

    public function reload()
    {

    }

    public function render()
    {
        $this->qty = random_int(1000,5000);

        return view('livewire.selectbox');
    }
}
