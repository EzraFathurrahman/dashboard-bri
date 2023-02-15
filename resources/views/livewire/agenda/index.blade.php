@inject('carbon', 'Carbon\Carbon')
<div class="flex justify-between gap-2 p-2">
    <div>
        <h1>
            {{date("D,d M Y")}}
        </h1>
    </div>
    <div>
      <button type="button" class="hidden inline-flex items-center rounded-md border border-gray-300 bg-white px-3 py-2 text-sm font-medium leading-4 text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Export</button>
      <button wire:click="$set('openModal',true)" type="button" class="inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-3 py-2 text-sm font-medium leading-4 text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Tambah Agenda</button>
        <x-jet-dialog-modal wire:model="openModal">
            <x-slot name="title">
                Tambah Agenda
            </x-slot>
            <x-slot name="content">
                <div class="space-y-5">
                    <div>
                    <label for="agenda" class="block text-sm font-medium text-gray-700">Judul Agenda</label>
                    <div class="mt-1">
                        <input wire:model="title" placeholder="Judul Agenda" type="text" name="agenda" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" >
                        @error('title') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    </div>
                    <div>
                    <label for="agenda" class="block text-sm font-medium text-gray-700">PIC Agenda</label>
                    <div class="mt-1">
                        <input wire:model="pic" placeholder="dipisahkan dengan , (Made, Ezra,...)" type="text" name="agenda" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" >
                        @error('pic') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    </div>
                    <div>
                        <label class="text-base font-medium text-gray-900">Lokasi</label>
                        <fieldset class="mt-4" x-data="{ offline : false }">
                            <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                <div class="flex items-center">
                                    <input wire:click="resetField()" wire:model="offline" value="0" @click="offline = false" name="notification-method" type="radio" checked class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label class="ml-3 block text-sm font-medium text-gray-700">Online</label>
                                </div>

                                <div  class="flex items-center">
                                    <input wire:model="offline" value="1" @click="offline = true" name="notification-method" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label  class="ml-3 block text-sm font-medium text-gray-700">Offline</label>
                                </div>
                            
                            </div>
                            <div x-show="offline" class="pt-4">
                                <label for="agenda" class="block text-sm font-medium text-gray-700">Lokasi Offline</label>
                                <div class="mt-1">
                                    <input wire:model="loc_offline" placeholder="Masukan lantai, divisi, alamat, atau kosongkan saja" type="text" name="agenda" id="agenda" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" >
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div>
                        <label class="text-base font-medium text-gray-900">Waktu</label>
                        <fieldset>
                            <div x-data="{checked : 'esokhari'}" class="-space-y-px rounded-md bg-white">
                                <label class="rounded-tl-md rounded-tr-md relative border p-4 flex cursor-pointer focus:outline-none" 
                                    @click="checked = 'esokhari'"
                                    :class="checked ==='esokhari' ? 'bg-indigo-50 border-indigo-200 z-10' : 'border-gray-200'" >
                                    <input wire:model="is_tanggal" type="radio" name="privacy-setting" checked value="1" class="mt-0.5 h-4 w-4 shrink-0 cursor-pointer text-indigo-600 border-gray-300 focus:ring-indigo-500" aria-labelledby="privacy-setting-0-label" aria-describedby="privacy-setting-0-description">
                                    <span class="ml-3 flex flex-col">
                                        <span :class="checked ==='esokhari' ? 'text-indigo-900' : 'text-gray-900'"
                                        id="privacy-setting-0-label" class="block text-sm font-medium">Esok Hari</span>
                                        <span :class="checked ==='esokhari' ? 'text-indigo-700' : 'text-gray-500'"
                                        id="privacy-setting-0-description" class="block text-sm">Agenda ini akan dilakukan pada esok hari. {{date("D, d M", mktime(0, 0, 0, date("m")  , date("d")+1, date("Y")))}}</span>
                                    </span>
                                </label>
            
                                <label class="relative border p-4 flex cursor-pointer focus:outline-none"
                                    @click="checked = 'hariini'"
                                    :class="checked ==='hariini' ? 'bg-indigo-50 border-indigo-200 z-10' : 'border-gray-200'" >                            
                                    <input wire:model="is_tanggal" type="radio" name="privacy-setting" value="0" class="mt-0.5 h-4 w-4 shrink-0 cursor-pointer text-indigo-600 border-gray-300 focus:ring-indigo-500" aria-labelledby="privacy-setting-1-label" aria-describedby="privacy-setting-1-description">
                                    <span class="ml-3 flex flex-col">
                                        <span :class="checked ==='hariini' ? 'text-indigo-900' : 'text-gray-900'" 
                                        id="privacy-setting-1-label" class="block text-sm font-medium">Hari Ini</span>
                                        <span :class="checked ==='hariini' ? 'text-indigo-700' : 'text-gray-500'"
                                        id="privacy-setting-1-description" class="block text-sm">Agenda ini dilakukan pada hari ini. {{ date("D, d M") }}</span>
                                    </span>
                                </label>

                                <label class="rounded-bl-md rounded-br-md relative border p-4 flex cursor-pointer focus:outline-none"
                                @click="checked = 'pilihtanggal'"
                                    :class="checked ==='pilihtanggal' ? 'bg-indigo-50 border-indigo-200 z-10' : 'border-gray-200'" >
                                    
                                    <input wire:model="is_tanggal" type="radio" name="privacy-setting" value="2" class="mt-0.5 h-4 w-4 shrink-0 cursor-pointer text-indigo-600 border-gray-300 focus:ring-indigo-500" aria-labelledby="privacy-setting-2-label" aria-describedby="privacy-setting-2-description">
                                <span class="ml-3 flex flex-col">
                                    <span :class="checked ==='pilihtanggal' ? 'text-indigo-900' : 'text-gray-900'" 
                                    id="privacy-setting-2-label" class="block text-sm font-medium">Direncankan</span>
                                    <span :class="checked ==='pilihtanggal' ? 'text-indigo-700' : 'text-gray-500'"
                                    id="privacy-setting-2-description" class="block text-sm">Agenda ini akan dilakuakan sesuai dengan tanggal yang dipilih</span>
                                </span>
                                </label>
                            <div 
                                x-show="checked ==='pilihtanggal' "
                                class="pt-4">
                                <label for="agenda" class="block text-sm font-medium text-gray-700">Pilih Tanggal</label>
                                <div class="mt-1">
                                    <input wire:model="pil_tanggal" type="date" name="agenda" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" >
                                </div>
                            </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('openModal',false)" wire:loading.attr="disabled">
                    Tutup
                </x-jet-secondary-button>

                <x-jet-button class="ml-2" wire:click="tambahUser()" wire:loading.attr="disabled">
                    Tambah
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>
        </div>
        </div>

    <div class="py-3">
        <div class="bg-white overflow-hidden sm:rounded-lg drop-shadow-md max-w-7xl mx-auto border-emerald-300">
        <div class="tabs">
          <div 
              x-data="{
                openTab: 2,
                activeClasses: 'bg-white font-bold text-black-700',
                inactiveClasses: 'bg-gray-200 font-semibold text-gray-400 hover:text-gray-700 '
              }" 
              class="" >
                <div class="grid grid-cols-3 ">
                    <button @click="openTab = 1" :class="openTab === 1 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4"> 
                    Yesterday
                    </button>
          
                    <button @click="openTab = 2" :class="openTab === 2 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4"> 
                    Today
                    </button>
                    
                    <button @click="openTab = 3" :class="openTab === 3 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4"> 
                    Upcoming
                    </button>
                </div>
        
                <div class=" h-[32rem] w-full pt-4 overflow-auto scrollbar scrollbar-thumb-indigo-900 scrollbar-track-grey-100">
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

<script>
$(function() {
    down();
    
    function up() {
        setTimeout(function() {
            scroll(0, down);
        }, 2);
    }

    function down() {
        setTimeout(function() {
            scroll($(document).height(), up);
        }, 2)
    }

    function scroll(pos, callback) {
        $('.scrollbar').animate({
            scrollTop: pos
        }, 4000, callback);
    }
})
</script>