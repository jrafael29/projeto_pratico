@extends('layouts.app')

@section('content')
<div class="mb-3">
    <livewire:contato.novo-contato />
</div>
<hr>
<div>
    <livewire:contato.mostrar-contatos />
</div>

@endsection