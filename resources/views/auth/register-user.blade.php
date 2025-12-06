<x-app-layout>

 <x-slot:heading> User</x-slot:heading>

 <form method="POST" action="/register-user" >
    @csrf
<div class="flex flex-col items-center justify-center gap-4 py-4 ">
    <div class="grid gap-2">
        <label for="first_name">First Name</label>
        <x-input-text type="text" name="first_name" placeholder="Enter your first name" />
    </div>

    <div class="grid gap-2">
        <label for="last_name">Last Name</label>
        <x-input-text type="text" name="last_name" placeholder="Enter your last name"/>
    </div>

    <div class="grid gap-2">
        <label for="password">Password</label>
        <x-input-text type="password" name="password"/>
    </div>

    <div class="grid gap-2">
        <label for="password_confirmation">Confirm Password</label>
        <x-input-text type="password" name="password_confirmation" />
    </div>

    <div class="grid gap-2">
        <label for="email">Email</label>
        <x-input-text type="email" name="email" placeholder="Enter your email"/>
    </div>

    <div class="grid gap-2">
        <x-user-form-button>Register</x-user-form-button>
    </div>

 </div>
    </form>
 
</x-app-layout>