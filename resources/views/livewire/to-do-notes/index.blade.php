<div class="card mt-5">
    <div class="card-header">

        <form wire:submit.prevent="create">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Inserisci TODO" wire:model="note">
                <button class="btn btn-outline-secondary" type="submit">Aggiungi</button>
            </div>
        </form>
    </div>
    <div class="card-body">
        <ul class="list-group">
            @foreach ($toDoNotes as $toDoNote)
                <li class="list-group-item d-flex  align-items-center">
                    <div class="form-check form-switch">
                        <input id="{{ $toDoNote->id }}" class="form-check-input" type="checkbox" role="switch"
                            @checked($toDoNote->is_done) wire:click="toggleDone({{ $toDoNote }})">
                    </div>

                    <label for="{{ $toDoNote->id }}"
                        class="mb-0 @if ($toDoNote->is_done) text-decoration-line-through @endif ">
                        {{ $toDoNote->note }}</label>

                    <button class="ms-auto btn btn-sm btn-outline-danger"
                        onclick="deleteNote('{{ $toDoNote->id }}', '{{ $toDoNote->note }}')"
                        {{-- wire:click="delete({{ $toDoNote }})" --}}>Elimina</button>
                </li>
            @endforeach


        </ul>
    </div>
</div>

@push('scripts')
    <script>
        function deleteNote(id, note) {
            Swal.fire({
                title: 'Sei sicuro?',
                icon: 'warning',
                html: `Vuoi eliminare <strong>${note}</strong>?`,
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Annulla',
                confirmButtonText: 'Ok, conferma'
            }).then((result) => {
                if (result.isConfirmed) {
                    @this.delete(id).then((r) => {
                        if (r) {
                            Swal.fire(
                                'Eliminato!',
                                'Nota eliminata',
                                'success'
                            )
                        }
                    })

                }
            })
        }
    </script>
@endpush
