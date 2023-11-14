<?php

namespace App\Livewire;

use Livewire\Component;

class CreateCode extends Component
{
    public int $counter = 0;

    public function increment() : void
    {
        $this->counter++;
    }

    public function render()
    {
        return view('livewire.create-code');
    }
}
