<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Todo extends Component
{
    public $todos;
    public $content;

    public $listeners = ['loadTodos'];

    public function mount()
    {
        $this->todos = \App\todo::get();
    }

    public function add_todo()
    {

        $this->validate([
            'content' => 'required',
        ]);

        $todo = new \App\todo();
        $todo->content = $this->content;
        $todo->done = 0;
        $todo->save();

        $this->content = '';
        $this->loadTodos();
    }

    public function loadTodos()
    {
        $this->todos = \App\todo::get();
    }


    public function render()
    {
        return view('livewire.todo');
    }
}
