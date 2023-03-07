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

    public function tambahPopup()
    {
        $this->validate([
            'imgFile' => 'required',
            'imgFile.*' => 'image|mimes:jpg,png,jpeg,gif,svg' // 1MB Max
        ]);

        $name = $this->imgFile->hashName();
        $imageName = FormMultipleUpload::create([
            'filename' => $name,
        ]);
        $this->imgFile->store('images');
        // $this->imgFile->storeAs('images', $imageName);
        $this->openModal = false;
    }
    public function render()
    {
        return view('livewire.utils.popup', ['files' => FormMultipleUpload::all()]);
    }
}