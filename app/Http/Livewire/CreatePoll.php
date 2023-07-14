<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreatePoll extends Component
{
    public $title; //everything you pass here will be able to use in the return view down below
    public $options = ['First'];
    public function render()
    {
        return view('livewire.create-poll');
    }

    public function addOption()
    {
        $this->options[] = '';
    }

    // public function mount()
    // {

    // } // we only use this mount() method when we have to do a more complicated thing, like a request for some data in our database for example
}
