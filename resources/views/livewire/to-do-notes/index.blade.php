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
                        <input class="form-check-input" type="checkbox" role="switch" @checked($toDoNote->is_done)
                            wire:click="toggleDone({{ $toDoNote }})">
                    </div>

                    <p class="mb-0 @if ($toDoNote->is_done) text-decoration-line-through @endif ">
                        {{ $toDoNote->note }}</p>

                    <button class="ms-auto btn btn-sm btn-outline-danger"
                        wire:click="delete({{ $toDoNote }})">Elimina</button>
                </li>
            @endforeach


        </ul>
    </div>
</div>
