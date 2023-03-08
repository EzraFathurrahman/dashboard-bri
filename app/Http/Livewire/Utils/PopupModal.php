<?php

namespace App\Http\Livewire\Utils;

use Livewire\Component;
use App\Models\FormMultipleUpload;

class PopupModal extends Component
{
    public $image = null;
    protected $listeners = ['randomFun' => 'newData'];
    public function mount()
    {
        $this->image = FormMultipleUpload::all()->random();
    }
    public function newData()
    {

        $this->image = FormMultipleUpload::all()->random();
    }
    public function render()
    {
        return view('livewire.utils.popup-modal', ['item' => $this->image]);
    }
}