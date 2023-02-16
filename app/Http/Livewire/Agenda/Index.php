<?php

namespace App\Http\Livewire\Agenda;

use Livewire\Component;
use App\Models\Agenda;
use Carbon\Carbon;

class Index extends Component
{

    public $title, $pic, $offline, $lokasi_offline, $waktu, $is_tanggal, $pil_tanggal;
    public $openModal = false;

    protected $rules = [
        'title' => 'required',
        'pic' => 'required',
        'offline' =>'required',
        'is_tanggal' => 'required',
    ];

    public function resetField()
    {
        unset($this->lokasi_offline);
    }

    public function tambahUser()
    {
        $this->validate();
        
        switch ($this->is_tanggal) {
            case "0":
                $this->waktu = Carbon::today()->format("Y-m-d");
                break;
            case "1":
                $this->waktu = Carbon::tomorrow()->format("Y-m-d");
                break;
            case "2":
                $this->waktu = Carbon::parse($this->pil_tanggal)->format("Y-m-d");
                break;
        }
        Agenda::create([
            'title' => $this->title,
            'pic' => $this->pic,
            'offline' => $this->offline,
            'lokasi_offline' => $this->lokasi_offline,
            'waktu' => $this->waktu
        ]);
        $this->openModal = false;
        $this->reset();
        return redirect()->to('calendar');
    }
    public function render()
    {
        return view('livewire.agenda.index');
    }
}
