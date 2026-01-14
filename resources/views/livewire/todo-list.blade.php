<div class="min-h-screen bg-gray-100 flex items-center justify-center px-4">
    <div class="bg-white shadow-lg rounded-xl w-full max-w-lg p-6">
        <h1 class="text-2xl font-semibold text-gray-800 mb-4">My Todolist</h1>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-1" for="new-todo">New task</label>
            <div class="flex gap-2">
                <input
                    id="new-todo"
                    wire:model="newTodo"
                    type="text"
                    class="flex-1 rounded-lg border border-gray-300 px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="For example: buy milk"
                >
                <button
                    wire:click="addTodo"
                    class="inline-flex items-center justify-center rounded-lg bg-blue-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                >
                    Add
                </button>
            </div>
        </div>

        <div class="border border-gray-200 rounded-lg divide-y divide-gray-200 bg-gray-50">
            @forelse($todos as $index => $todo)
                <div class="flex items-center gap-3 px-4 py-3 {{ $todo['completed'] ? 'bg-green-50' : 'bg-white' }}">
                    <input
                        type="checkbox"
                        wire:model="todos.{{ $index }}.completed"
                        class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500"
                    >
                    <span class="flex-1 text-sm text-gray-800 {{ $todo['completed'] ? 'line-through text-gray-400' : '' }}">
                        {{ $todo['text'] }}
                    </span>
                    <button
                        wire:click="delete({{ $index }})"
                        class="text-xs font-medium text-red-600 hover:text-red-700"
                    >
                        Delete
                    </button>
                </div>
            @empty
                <div class="px-4 py-6 text-center text-sm text-gray-500">
                    The list is empty. Add your first task above.
                </div>
            @endforelse
        </div>
    </div>
</div>
