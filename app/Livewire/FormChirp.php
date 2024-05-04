<?php

namespace App\Livewire;

use App\Models\Chirp;
use App\Models\Tag;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads; // Importa il trait WithFileUploads

class FormChirp extends Component
{
    use WithFileUploads; // Utilizza il trait WithFileUploads

    #[Validate('required', message: 'Il campo è obbligatorio.')]
    #[Validate('min:5', message: 'Il titolo deve avere almeno 5 caratteri.')]
    public $content;

    public $img;


    public function store(Request $request)
    {
        $this->validate();

        $path = $this->img ? $this->img->store('public') : null; // Salva l'immagine nella directory 'public'

        $chirp = Chirp::create([
            'content' => $this->content,
            'img' => $path, // Salva il percorso dell'immagine nel database
            'user_id' => Auth::user()->id
        ]);

        $chirp->tags()->attach($request->tags);
        // Se ci sono tag inseriti dall'utente, separali e associali al chirp
        if (!empty($this->tags)) {
            $tagsArray = explode(',', $this->tags);
            $chirp->tags()->attach($tagsArray);
        }

        session()->flash('message', 'Articolo creato');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.form-chirp');
    }
}
