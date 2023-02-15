<div class="space-y-3 m-3 ">
    @forelse ($agendas as $agenda)
        @livewire('agenda.agenda-card', ['agenda' => $agenda])
    @empty
        <p>Tidak ada Agenda</p>
    @endforelse
</div>



{{-- <script>
function smoothScrollToTop() {
    var currentY = window.pageYOffset;
    var targetY = 0;
    var step = (targetY - currentY) / 1000;

    var scrolling = setInterval(function() {
        currentY = window.pageYOffset;
        if (currentY <= targetY) {
            clearInterval(scrolling);
            return;
        }
        window.scrollBy(0, step);
    }, 2000);
}

function smoothScrollToBottom() {
    var currentY = window.pageYOffset;
    var targetY = document.body.scrollHeight;
    var step = (targetY - currentY) / 50;

    var scrolling = setInterval(function() {
        currentY = window.pageYOffset;
        if (currentY >= targetY) {
            clearInterval(scrolling);
            return;
        }
        window.scrollBy(0, step);
    }, 2000);
}

setInterval(function() {
    smoothScrollToTop();
    setTimeout(smoothScrollToBottom, 2000);
}, 3000);
</script> --}}
