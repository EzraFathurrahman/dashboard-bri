<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class EditAgenda extends Modal
{
    // public $show = false;
    // protected $listeners = [
    //     'show' => 'show'
    // ];

    // public function show()
    // {
    //     $this->show = true;
    // }

    public function render()
    {
        return view('livewire.edit-agenda');
    }
}
