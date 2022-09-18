<?php

namespace App\Http\Livewire\Contato;

use App\Models\Contato;
use Livewire\Component;


class NovoContato extends Component
{
    protected $listeners = [
        'atualizarListaDeContatos' => '$refresh'
    ];
    
    public function render()
    {
        return view('livewire.contato.novo-contato');
    }
}
