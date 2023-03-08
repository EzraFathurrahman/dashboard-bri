<a class="grid grid-cols-6 rounded-lg bg-sky-50 p-3 text-xs hover:bg-sky-100  place-items-center">
    @if ($showDate)
        <p class="font-bold col-span-3 justify-self-start text-2xl text-sky-700">{{ $title }}</p>
        <p class="text-[#E7700E] text-xl group-hover:text-orange-700">{{ date('j F', strtotime($waktu)) }}</p>
    @else
        <p class="font-bold col-span-4 justify-self-start text-2xl text-sky-700">{{ $title }}</p>
    @endif
    @if ($offline)
        <p class="text-[#E7700E] text-xl group-hover:text-orange-700">Offline : {{ $loc_offline }}</p>
    @else
        <p class="text-[#E7700E] text-xl group-hover:text-orange-700">Online</p>
    @endif
    <p class="font-semibold  text-[#E7700E] text-xl group-hover:text-orange-700">{{ $pic }}</p>
</a>
