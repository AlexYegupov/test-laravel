<?php

namespace App\Livewire;

use Livewire\Component;

// for events

class TodoList extends Component
{
    public $todos = [];

    public $newTodo = '';

    public function addTodo()
    {
        $this->todos[] = ['text' => $this->newTodo, 'completed' => false];
        $this->newTodo = '';
    }

    public function toggle($index)
    {
        $this->todos[$index]['completed'] = ! $this->todos[$index]['completed'];
    }

    public function delete($index)
    {
        unset($this->todos[$index]);
        $this->todos = array_values($this->todos);
    }

    public function render()
    {
        return view('livewire.todo-list');
    }
}
