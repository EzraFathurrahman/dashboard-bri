<div class="grid grid-cols-6 space-x-1">
    @if ($showDate)
        <div class="col-span-3 bg-[#219ebc] rounded-lg p-2 text-white text-xs place-items-center">
            Perihal
        </div>
        <div class="bg-[#219ebc] rounded-lg p-2 text-xs text-white place-items-center">
            Waktu
        </div>
    @else
        <div class="col-span-4 bg-[#219ebc] rounded-lg p-2 text-xs text-white place-items-center">
            Perihal
        </div>
    @endif
    <div class="bg-[#219ebc] rounded-lg p-2 text-xs place-items-center text-white">
        Tempat
    </div>
    <div class="bg-[#219ebc] rounded-lg p-2 text-xs place-items-center text-white">
        PIC
    </div>
</div>

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
