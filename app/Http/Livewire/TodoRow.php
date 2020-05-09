<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TodoRow extends Component
{

    public $todo;

    public function mount($todo)
    {
        $this->todo = $todo;
    }


    public function completed($todo_id)
    {
        $todo = $this->todo;
        $todo->done = !$todo->done;
        $todo->save();
    }


    public function remove_todo($todo_id)
    {
        \App\todo::find($todo_id)->delete();
        $this->emitUp('loadTodos');
    }


    public function render()
    {
        return view('livewire.todo-row');
    }
}
