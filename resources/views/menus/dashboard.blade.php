<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="bg-white overflow-hidden sm:rounded-lg drop-shadow-md max-w-7xl mx-auto sm:px-3 lg:px-5 border-emerald-300">
            This is a dashboard page
        </div>
    </div>
</x-app-layout>
