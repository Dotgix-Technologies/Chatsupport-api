<?php

namespace  Dotgix\ChatSupport\Livewire\Admin;

use Livewire\Component;
use  Dotgix\ChatSupport\Models\messages;
use  Dotgix\ChatSupport\Models\conversations;

class Chat extends Component
{
    public $query;
    public $selectedConversation;
    public function mount()
    {

        $this->selectedConversation= conversations::findOrFail($this->query);

       messages::where('conversations_id',$this->selectedConversation->id)
                ->whereNull('read_at')
                ->update(['read_at'=>now()]);
    }
    public function render()
    {
        return view('chatsupport::livewire.admin.chat')->layout('layouts.Admin');
    }
}
