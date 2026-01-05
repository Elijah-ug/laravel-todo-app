<x-app-layout>

 <x-slot:heading> User</x-slot:heading>

 <form method="POST" action="/update-user" >
    @csrf
    @method("PUT")
<div class="flex flex-col items-center justify-center gap-4 py-4 ">
    <div class="grid gap-2">
        <label for="first_name">First Name</label>
        <x-input-text type="text" name="first_name" value="{{ $user->first_name }}"  placeholder="Enter your first name" />
    </div>

    <div class="grid gap-2">
        <label for="last_name">Last Name</label>
        <x-input-text type="text" name="last_name" value="{{ $user->last_name }}" placeholder="Enter your last name"/>
    </div>

    <div class="grid gap-2">
        <label for="email">Email</label>
        <x-input-text type="email" name="email" value="{{ $user->email }}" placeholder="Enter your email"/>
    </div>

    <div class="grid gap-2">
        <x-user-form-button>Save</x-user-form-button>
    </div>

 </div>
    </form>
 
</x-app-layout>