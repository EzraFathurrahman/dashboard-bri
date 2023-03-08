<div class="space-y-3 m-3 ">
    <div class="grid grid-cols-6 space-x-1">
        <div class="col-span-3 bg-[#219ebc] rounded-lg p-2 text-white text-xs place-items-center">
            Perihal
        </div>
        <div class="bg-[#219ebc] rounded-lg p-2 text-xs text-white place-items-center">
            Waktu
        </div>
        <div class="bg-[#219ebc] rounded-lg p-2 text-xs place-items-center text-white">
            Tempat
        </div>
        <div class="bg-[#219ebc] rounded-lg p-2 text-xs place-items-center text-white">
            PIC
        </div>
    </div>
    @forelse ($agendas as $agenda)
        @livewire('agenda.agenda-card', ['agenda' => $agenda, 'showDate' => true])
    @empty
        <p>Tidak ada Agenda</p>
    @endforelse
</div>
