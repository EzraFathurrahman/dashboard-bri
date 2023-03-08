<div class="space-y-3 m-3 ">
    <div class="grid grid-cols-6 space-x-1 divide-x divide-gray-500">
        <div class="col-span-4 p-2 ">
            Perihal
        </div>
        <div class="p-2 ">
            Tempat
        </div>
        <div class="p-2 ">
            PIC
        </div>
    </div>
    @forelse ($agendas as $agenda)
        @livewire('agenda.agenda-card', ['agenda' => $agenda, 'showDate' => false])
    @empty
        <p>Tidak ada Agenda</p>
    @endforelse
</div>
