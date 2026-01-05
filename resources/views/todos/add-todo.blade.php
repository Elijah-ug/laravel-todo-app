<x-app-layout>

 <x-slot:heading> Add Todo</x-slot:heading>
 <form method="POST" action="/add-todo" >
    @csrf
<div class="flex flex-col items-center justify-center gap-4 py-4  ">
    <div class="grid gap-2">
        <label for="title">Title</label>
        <x-input-text type="text" name="title" placeholder="Enter todo title..." />
    </div>

    <div class="grid gap-2">
        <label for="description">Description (optional)</label>
        <x-input-text type="text" name="description" placeholder="Enter todo description"/>
    </div>

    <div class="grid gap-2 ">
        <label for="category">Category</label>
                {{-- <x-input-text type="text" name="category" placeholder="Enter todo category"/> --}}

        <select name="category" class="w-full">
         <option value="" disabled selected hidden> -- Select an Option -- </option>
        <option value="Tech"> Tech</option>
        <option value="Sport"> Sport</option>
        <option value="Education"> Education</option>
        <option value="Social"> Social</option>
        <option value="Health"> Health</option>
</select>
    </div>

    <div class="flex gap-1 items-center">
        <div class="grid gap-2">
        <label for="date">Date</label>
        <input type="date" name="due_date" class="border rounded p-2">
        </div>
        <div class="grid gap-2">
        <label for="time">Time</label>
        <input type="time" name="due_time" class="border rounded p-2">
    </div>
    </div>
    

    <div class="grid gap-2">
        <x-user-form-button class="bg-blue-600">Save</x-user-form-button>
    </div>

 </div>
    </form>
 
</x-app-layout>