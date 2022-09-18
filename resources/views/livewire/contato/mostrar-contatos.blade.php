
<div class="table-responsive">
    @if(count($contatos) > 0 )
    <table class="table" >
        <thead align="center">
            <th>Nome</th>
            <th>CPF</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Principal</th>
            <th>Ações</th>
        </thead>

        <tbody>
            @foreach($contatos as $contato)
            
                <livewire:contato.contato :wire:key="$contato->id" :contato="$contato" />
            
            @endforeach
        </tbody>
    </table>
    {{$contatos->links()}}
    @endif
</div>
