<?php

namespace App\Http\Livewire\Agenda;

use Livewire\Component;

class AgendaCard extends Component
{
    public $title;
    public $pic;
    public $waktu;
    public $loc_offline;

    public $setcol = 'gray-500';
     public function mount($agenda)
    {
        $this->title = $agenda->title;
        $this->pic = $agenda->pic;
        $this->waktu = $agenda->waktu;
        $this->loc_offline = $agenda->loc_offline;
    }
    public function render()
    {
        return view('livewire.agenda.agenda-card');
    }
}
