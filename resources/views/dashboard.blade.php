<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>You're logged in!</p>
                    
                    @if (Auth::user()->role == "cliente")
                        <p>Puntua ;)</p>
                    @else
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <a href="establecimientos">Ver mis establecimientos</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
