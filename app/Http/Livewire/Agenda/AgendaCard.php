<?php

namespace App\Http\Livewire\Agenda;

use Livewire\Component;

class AgendaCard extends Component
{
    public $title;
    public $pic;
    public $waktu;
    public $offline;
    public $loc_offline;
    public $showDate;

    public function mount($agenda)
    {
        $this->title = $agenda->title;
        $this->pic = $agenda->pic;
        $this->waktu = $agenda->waktu;
        $this->offline = $agenda->offline;
        $this->loc_offline = $agenda->lokasi_offline;
    }
    public function render()
    {
        return view('livewire.agenda.agenda-card');
    }
}