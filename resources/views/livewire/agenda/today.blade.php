<div class="space-y-3 m-3 ">
    @forelse ($agendas as $agenda)
        <a href="#" class="space-y-2 group flex flex-col rounded-lg bg-pink-50 p-9 text-xs leading-5 hover:bg-pink-100">
            <p class="font-semibold text-5xl text-pink-700">{{$agenda->title}}</p>
            <p class="text-pink-500 text-3xl group-hover:text-pink-700">{{$agenda->pic}}</p>
            <p class="text-pink-500 text-3xl group-hover:text-pink-700">{{$agenda->waktu}}</p>
            <p class="text-pink-500 text-3xl group-hover:text-pink-700">Tempat Agenda</p>
        </a>
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


