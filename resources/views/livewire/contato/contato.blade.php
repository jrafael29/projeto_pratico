<tr align="center">
    <td class="text-nowrap"> {{$contato->nome}} </td>
    <td class="text-nowrap"> {{$contato->cpf}} </td>
    <td class="text-nowrap"> {{$contato->email}} </td>
    <td class="text-nowrap"> {{$contato->telefone}} </td>
    <td> {{$contato->principal ? "Sim" : "Não"}} </td>
    <td class="d-flex gap-1 justify-content-center">
        <livewire:contato.editar-contato :contato="$contato" />
        <livewire:contato.deletar-contato :contato="$contato" />
    </td>
</tr>
