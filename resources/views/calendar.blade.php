<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agenda') }}
          </h2>
          
        </x-slot>
        
        <div class="flex justify-between gap-2 p-2">
          <div>
            <h1>
              {{date("D,d M Y")}}
            </h1>
          </div>
          <div>
            <button type="button" class="inline-flex items-center rounded-md border border-gray-300 bg-white px-3 py-2 text-sm font-medium leading-4 text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Export</button>
            <button type="button" class="inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-3 py-2 text-sm font-medium leading-4 text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Tambah Agenda</button>
          </div>
        </div>

    <div class="py-3">
        <div class="bg-white overflow-hidden sm:rounded-lg drop-shadow-md max-w-7xl mx-auto border-emerald-300">
         <div class="tabs">
          
      <div 
        x-data="{
          openTab: 1,
          activeClasses: 'bg-white font-bold text-black-700',
          inactiveClasses: 'bg-gray-200 font-semibold text-gray-400 hover:text-gray-700 '
        }" 
        class=""
      >
        <div class="grid grid-cols-3 ">
          <button 
          @click="openTab = 1"
          :class="openTab === 1 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4"> 
            Yesterday
          </button>
          <button
          @click="openTab = 2"
          :class="openTab === 2 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4"> 
          Today
          </button>
          <button
          @click="openTab = 3"
          :class="openTab === 3 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4"> 
            Upcoming
          </button>
        </div>
        
        <div class="w-full pt-4">
          <div x-show="openTab === 1">
            @livewire('agenda.yesterday')
          </div>
          <div x-show="openTab === 2">
            @livewire('agenda.today')
          </div>
          <div x-show="openTab === 3">         
            @livewire('agenda.upcoming')
          </div>
        </div>
      </div>
        </div>
    </div>
</x-app-layout>
