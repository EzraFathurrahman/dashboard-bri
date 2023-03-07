<div class="space-y-3 m-3 ">
    @forelse ($agendas as $agenda)
        @livewire('agenda.agenda-card', ['agenda' => $agenda, 'showDate' => false])
    @empty
        <p>Tidak ada Agenda</p>
    @endforelse
</div>
