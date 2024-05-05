<?php

namespace App\Livewire;

use App\Models\Tag;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class EditChirp extends Component
{
    use WithFileUploads; 

    #[Validate('required', message: 'Il campo è obbligatorio.')]
    #[Validate('min:5', message: 'Il titolo deve avere almeno 5 caratteri.')]
    public $content;

    public $img;

    public $chirp;

    public $name;


    public function mount (){
        $this->content = $this->chirp->content;
        $this->img = $this->chirp->img;
    }

    public function updateChirp()
{
    $this->validate();
    

    $path = $this->chirp->img;

    if ($this->img instanceof \Illuminate\Http\UploadedFile) {
        $path = $this->img->store('public');
    }

    $this->chirp->update([
        'content' => $this->content,
        'img' => $path,
    ]);

    if(empty($this->name)){
        $id = null;
    } elseif (!Tag::where('name', $this->name)->exists()){

        $tag= Tag::create([
            'name' => $this->name
        ]);

        $id = $tag['id'];

    }else{
        $tag = Tag::where('name' ,$this->name)->first();
        $id = $tag->id;

    }
    $this->chirp->tags()->sync($id);

    $this->reset();

    session()->flash('message', 'Articolo aggiornato correttamente');
}



    public function render()
    {
        $tags = Tag::all();

        return view('livewire.edit-chirp', compact('tags'));
    }
}
