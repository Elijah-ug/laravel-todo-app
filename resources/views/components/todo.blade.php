<div class="flex flex-col justify-center items-center py-4">
    <p>Here are User Todos</p>

    <div class="">
        <div class="flex items-center gap-6 px-6 bg-gray-200 py-4 rounded-md">
            <div class="flex flex-col ">
                   <h3 class="text-center">{{ $todo->title }}</h3>
            <p>{{ $todo->description }}</p>
            <span>Category: {{ $todo->category }}</span>
            <div class="flex items-center gap-2 text-xs italic pt-8">
                <span>{{ $todo->due_date }}</span>
            <span>{{ $todo->due_time }}</span>
            </div>
            </div>
            <div class="flex items-center gap-2">  
                <x-a-tag href="/update-todo/{{ $todo->id }}" class="flex items-center gap-1 p-2" >
                Update Todo
                 <x-heroicon-o-pencil class="h-5 w-5 text-green-600"/>
                </x-a-tag>
                <form method="POST" action="/delete-todo/{{ $todo->id }}">
                    @csrf
                    @method("DELETE")
                    <x-danger-button class="flex gap-1 items-center">
                        <x-heroicon-o-trash class="h-5 w-5 "/>
                    </x-danger-button>
                
                    </form>
            </div>
        </div>
    </div>

</div>