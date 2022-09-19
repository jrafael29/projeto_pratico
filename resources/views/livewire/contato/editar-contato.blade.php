<div>
    <button class="btn btn-sm btn-outline-secondary" type="button" data-bs-toggle="modal" data-bs-target="#{{'edit-modal'.$contato->id}}">Editar</button>

    <div class="modal fade" id="{{'edit-modal'.$contato->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                    <button type="button" id="{{'btn-close'.$contato->id}}" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <livewire:form.contato-formulario
                        :wire:key="$contato->id"
                        :nome="$contato->nome"
                        :cpf="$contato->cpf"
                        :email="$contato->email"
                        :telefone="$contato->telefone"
                        :principal="$contato->principal"
                        :editando="true"
                        :contato="$contato"
                    />
                </div>
            </div>
        </div>
    </div>
    <script>
        window.addEventListener('contatoAtualizado', (id) => {
            document.querySelector('#btn-close'+id.detail).click();
        })
    </script>
</div>

