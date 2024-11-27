<?php

namespace  Dotgix\ChatSupport\Livewire\Consultant;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.consultant.index')->layout('layouts.Consultant');
    }
}
