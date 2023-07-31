<?php

namespace App\Http\Livewire\ToDoNotes;

use Livewire\Component;
use App\Models\toDoNote;

class Index extends Component
{

    public $toDoNotes;

    public $note;

    public function create()
    {
        $this->validate([
            'note' => 'required',

        ]);

        toDoNote::create([
            'note' => $this->note
        ]);

        $this->note = '';
    }

    public function toggleDone(toDoNote $toDoNote)
    {
        $toDoNote->update([
            'is_done' => !$toDoNote->is_done
        ]);
    }

    public function delete(toDoNote $toDoNote)
    {
        $toDoNote->delete();
    }

    public function render()
    {

        $this->toDoNotes = toDoNote::all();

        return view('livewire.to-do-notes.index');
    }
}
