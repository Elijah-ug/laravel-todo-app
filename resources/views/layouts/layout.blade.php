<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite("resources/css/app.css")
  <title>Document</title>
</head>
<body class="bg-gray-50">
  
   <nav class=" text-gray-500 bg-white p-5 flex items-center justify-between px-6 shadow-md">
        <div class="flex items-center gap-4 text-xl">
          <x-nav-link href="/" >Home</x-nav-link>
        <x-nav-link href="/dashboard" >Dashboard</x-nav-link>
        </div>

        <div class="">
          <form method="POST" action="/search" class="flex items-center w-full gap-1">  
            <x-input-text/>
              <x-get-button>Search</x-get-button>
          </form>
        </div>

        <div class="flex items-center gap-6">

          @guest
            <div class="flex items-center gap-4 font-semibold">
            <x-a-tag href="/register-user">Register</x-a-tag>
             <x-a-tag href="/login-user">Log In</x-a-tag>
         </div>
          @endguest

          @auth
          <x-a-addtodo href="/add-todo">+   Add Todo</x-a-addtodo>
            <form method="POST" action="/logout">
              @csrf
              <x-danger-button>Logout</x-danger-button>
            </form>
          @endauth

          <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-11 rounded-full" />
         </div>

    </nav>
    {{ $slot }}
</body>
</html>