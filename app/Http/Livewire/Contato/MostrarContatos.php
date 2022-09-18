<?php

namespace App\Http\Livewire\Contato;
use App\Models\Contato;
use Livewire\Component;

class MostrarContatos extends Component
{
    protected $listeners = [
        'atualizarListaDeContatos' => '$refresh'
    ];

    public function render()
    {
        $contatos = Contato::orderBy('updated_at', 'desc')->paginate(10);
        return view('livewire.contato.mostrar-contatos', compact('contatos'));
    }
}
