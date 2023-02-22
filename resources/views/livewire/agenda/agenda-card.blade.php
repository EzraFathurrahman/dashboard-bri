<a class="group flex flex-col rounded-lg bg-sky-50 p-3 text-xs hover:bg-sky-100">
    <p class="font-bold text-3xl text-sky-700">{{$title}}</p>
    <p class="font-semibold  text-[#E7700E] text-xl group-hover:text-orange-700" >{{$pic}}</p>
    <p class="text-[#E7700E] text-xl group-hover:text-orange-700">{{date('j F Y', strtotime( $waktu))}}</p>
    @if($offline)
        <p class="text-[#E7700E] text-xl group-hover:text-orange-700">Offline : {{$loc_offline}}</p>
    @else
        <p class="text-[#E7700E] text-xl group-hover:text-orange-700">Online</p>
    @endif
</a>