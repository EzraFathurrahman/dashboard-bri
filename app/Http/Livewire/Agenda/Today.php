<?php

namespace App\Http\Livewire\Agenda;

use Livewire\Component;
use App\Models\Agenda;
use Carbon\Carbon;

class Today extends Component
{
    public function render()
    {
        return view('livewire.agenda.today', [
            'agendas' => Agenda::whereDate("waktu",Carbon::today())->get(),
        ]);
    }
}
