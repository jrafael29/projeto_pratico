<?php

namespace App\Http\Livewire\Contato;

use App\Models\Contato;
use Livewire\Component;

class EditarContato extends Component
{

    public Contato $contato;

    protected $listeners = [
        'atualizarContato' => '$refresh'
    ];
    
    public function render()
    {
        $contato = $this->contato;
        return view('livewire.contato.editar-contato', compact('contato'));
    }


}
