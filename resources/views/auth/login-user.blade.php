<x-app-layout>

 <x-slot:heading> User</x-slot:heading>

 <form method="POST" action="/login-user" >
<div class="flex flex-col items-center justify-center gap-4 py-4 ">

    <div class="grid gap-2">
        <label for="email">Email</label>
        <x-input-text type="email" name="email" placeholder="Enter your email"/>
    </div>

    <div class="grid gap-2">
        <label for="password">Password</label>
        <x-input-text type="password" name="password"/>
    </div>

    <div class="grid gap-2">
        <x-user-form-button>Log In</x-user-form-button>
    </div>

 </div>
    </form>
 
</x-app-layout>