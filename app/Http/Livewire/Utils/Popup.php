<?php

namespace App\Http\Livewire\Utils;

use Livewire\Component;
use App\Models\FormMultipleUpload;
use Livewire\WithFileUploads;

class Popup extends Component
{
    use WithFileUploads;

    public $imgFile;
    public $openModal = false;
    public $caption = null;
    public function tambahPopup()
    {
        $this->validate([
            'imgFile' => 'required',
            'imgFile.*' => 'image|mimes:jpg,png,jpeg,gif,svg' // 1MB Max
        ]);

        $name = $this->imgFile->hashName();
        $imageName = FormMultipleUpload::create([
            'filename' => $name,
            'caption' => $this->caption,
        ]);
        $this->imgFile->store('images');
        $this->openModal = false;
        $this->reset();
        return redirect()->to('utils');
    }
    public function render()
    {
        return view('livewire.utils.popup', ['files' => FormMultipleUpload::all()]);
    }
}