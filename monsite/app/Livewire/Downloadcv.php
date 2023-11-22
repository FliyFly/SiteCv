<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class Downloadcv extends Component
{

    public function download()
    {
        return response()->download(storage_path('/file/cv.pdf'));
    }

    public function render()
    {
        return view('livewire.downloadcv');
    }
}
