<div>
    <form wire:submit.prevent="">
        <div class="d-flex flex-column @if(!$editando) flex-md-row @endif justify-content-between mb-3">
            <div class="form-group mb-3">
                <label for="@if(!$editando) name @else {{'name-'.$contato->id}} @endif" class="form-label">Nome</label>
                <input type="text" wire:model="nome" class="form-control @error('nome') is-invalid @enderror" autofocus autocomplete="off" id="@if(!$editando) name @else {{'name-'.$contato->id}} @endif" placeholder="Foo Bar">
            </div>
            

            <div class="form-group mb-3">
                <label for="@if(!$editando) cpf @else {{'cpf-'.$contato->id}} @endif" class="form-label">CPF</label>
                <input type="text" wire:model.debounce.400ms="cpf" class="form-control @error('cpf') is-invalid @enderror" autocomplete="off" id="@if(!$editando) cpf @else {{'cpf-'.$contato->id}} @endif" placeholder="123.456.789-10">
            </div>

            <div class="form-group mb-3">
                <label for="@if(!$editando) email @else {{'email-'.$contato->id}} @endif" class="form-label">Email</label>
                <input type="email" wire:model="email" class="form-control @error('email') is-invalid @enderror" autocomplete="off" id="@if(!$editando) email @else {{'email-'.$contato->id}} @endif" placeholder="foo@bar.com">
            </div>

            <div class="form-group mb-3">
                <label for="@if(!$editando) tel @else {{'tel-'.$contato->id}} @endif" class="form-label">Telefone</label>
                <input type="text" wire:model.debounce.400ms="telefone" class="form-control @error('telefone') is-invalid @enderror" autocomplete="off" id="@if(!$editando) tel @else {{'tel-'.$contato->id}} @endif" placeholder="(99)99999-9999">
            </div>
        </div>
        <div class=" mb-3">
            <div class="form-group">
                <input type="checkbox" wire:model="principal" class="form-check-input" id="@if(!$editando) principal @else {{'principal'.$contato->id}} @endif">
                <label for="@if(!$editando) principal @else {{'principal'.$contato->id}} @endif" class="form-check-label">Principal</label>
            </div>
        </div>

        <div class="">
            <button wire:click="salvarContato" class="btn btn-success w-100"> Salvar </button>
        </div>
    </form>
</div>
    
