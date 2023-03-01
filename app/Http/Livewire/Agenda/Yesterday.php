<?php

namespace App\Http\Livewire\Agenda;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\Agenda;

class Yesterday extends Component
{
    public function render()
    {
        return view('livewire.agenda.yesterday', [
            'agendas' => Agenda::whereDate("waktu", Carbon::yesterday())->get(),
        ]);
    }
}