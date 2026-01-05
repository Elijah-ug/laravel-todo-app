<x-app-layout>
    @guest
        <h3 class="text-center font-semibold text-gray-500 mt-6">You're not logged in</h3>
    @endguest
    
    @auth
        <div class="flex justify-center py-6">
        <div class="flex flex-col gap-6 font-semibold text-gray-500">
            <div class="flex items-center gap-2">
            <span class="text-xl">First Name:</span>
            <span>{{ $user->first_name }}</span>
        </div>

        <div class="flex items-center gap-2">
            <span class="text-xl">Last Name:</span>
            <span>{{ $user->last_name }}</span>
        </div>

        <div class="flex items-center gap-2">
            <span class="text-xl">Email:</span>
            <span>{{ $user->email }}</span>
        </div>

        <div class="flex items-center gap-2">
            

            <x-a-tag href="/update-user" class="flex items-center gap-1 p-2" >
                Edit Profile
                 <x-heroicon-o-pencil class="h-5 w-5 text-red-600"/>
                </x-a-tag>

                <form method="POST" action="/delete-user">
                    @csrf
                    @method("DELETE")
                    <x-danger-button class="flex gap-1 items-center">
                         <span>Delete Account</span>
                <x-heroicon-o-trash class="h-5 w-5 "/>
                    </x-danger-button>
                </form>
        </div>
        </div>
    </div>
    @endauth
</x-app-layout>