<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\galleryAdmin;

class EditGalleryModal extends Component
{
    use WithFileUploads;
    public $caption,$media;

    public $listeners = [
        'editGallery' => 'editGallery'
    ];


    public function editGallery($id){
        // dd($id);
    $gallery            = GalleryAdmin::findOrFail($id);
    $this->caption      = $gallery->caption;
    $this->media        = $gallery->media;
    // dd($gallery);

    }
    public function upateGallery($id){
    $gallery       = GalleryAdmin::where('id')->first();
    $validated = $this->validate();
    $gallery->updated($validated);

    $this->emit('editGallery');
    $this->dispatchBrowserEvent('alert',[
        'type' => 'success',
        'message' => "Main card edited Successfully"
    ]);

    }

    public function render()
    {
        
        return view('livewire.edit-gallery-modal');
    }
}
