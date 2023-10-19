<?php

namespace App\Livewire;

use Livewire\Component;

class Selectbox extends Component
{
    public int $qty = 0;

    public function reload()
    {

    }

    public function render()
    {
        $this->qty = random_int(0,500);

        return view('livewire.selectbox');
    }
}
