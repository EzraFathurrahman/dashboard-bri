<a href="#" class="group flex flex-col rounded-lg bg-sky-50 p-3 text-xs hover:bg-sky-100">
    <p class="font-bold text-3xl text-sky-700">{{$title}}</p>
    <p class="font-semibold  text-sky-500 text-xl group-hover:text-sky-700" >{{$pic}}</p>
    <p class="text-sky-500 text-xl group-hover:text-sky-700">{{date('j F Y', strtotime( $waktu))}}</p>
    @if($offline)
        <p class="text-sky-500 text-xl group-hover:text-sky-700">Offline : {{$loc_offline}}</p>
    @else
        <p class="text-sky-500 text-xl group-hover:text-sky-700">Online</p>
    @endif
</a>