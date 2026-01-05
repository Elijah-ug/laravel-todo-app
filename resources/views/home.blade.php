<x-app-layout>
    <x-slot:heading>Elicom Elijah</x-slot:heading>
         <p>Hello from Kaboom</p>

         @foreach ($todos as $todo )
             <x-todo :todo="$todo" />
         @endforeach

         

</x-app-layout>