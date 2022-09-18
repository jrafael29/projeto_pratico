<?php

namespace App\Http\Livewire\Contato;

use App\Models\Contato as ModelsContato;
use Livewire\Component;

class Contato extends Component
{
    public ModelsContato $contato;

    protected $listeners = [
        'atualizarContato' => '$refresh'
    ];

    public function render()
    {
        return view('livewire.contato.contato');
    }
}
