<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;
use Manny;
use App\Models\Contato;

class ContatoFormulario extends Component
{
    public $nome;
    public $cpf;
    public $email;
    public $telefone;
    public bool $principal = false;

    public $contato;
    public bool $editando = false;

    protected $rules = [
        'nome' => 'required|max:50',
        'cpf' => 'required|min:14|max:14',
        'email' => 'nullable|max:50|email',
        'telefone' => 'nullable|min:14|max:14',
    ];

    protected $listeners = [
        'atualizarFormulario' => '$refresh'
    ];

    public function render()
    {
        return view('livewire.form.contato-formulario');
    }

    public function updated($campo)
    {
        if($campo == 'telefone'){
            $this->telefone = Manny::mask( $this->telefone, "(11)11111-1111");
        }
        if($campo == 'cpf'){
            $this->cpf = Manny::mask($this->cpf, "111.111.111-11");
        }
        $this->validateOnly($campo);
    }

    public function salvarContato()
    {
        $this->validate();

        if($this->editando){
            $id = $this->contato->id;
            $this->contato->update([
                'nome' => $this->nome,
                'cpf' => $this->cpf,
                'email' => $this->email,
                'telefone' => $this->telefone,
                'principal' => $this->principal
            ]);
            $this->contato->save();
            $this->emit('atualizarContato');
            $this->dispatchBrowserEvent('contatoAtualizado', $id);
            
        }else{
            // usando else porque tenho que resetar os campos apos a ação.
            Contato::create([
                'nome' => $this->nome,
                'cpf' => $this->cpf,
                'email' => $this->email,
                'telefone' => $this->telefone,
                'principal' => $this->principal
            ]);
            
        }
        $this->emit('atualizarListaDeContatos');
        $this->emitSelf('atualizarFormulario');
        $this->reset('nome', 'cpf', 'email', 'telefone', 'principal');
    }
}
