<?php

namespace App\Http\Livewire\Contato;

use App\Models\Contato;
use Livewire\Component;

class EditarContato extends Component
{
    public Contato $contato;
    
    public function render()
    {
        return view('livewire.contato.editar-contato');
    }


}
