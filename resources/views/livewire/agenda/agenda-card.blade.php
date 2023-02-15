<a href="#" class="group flex flex-col rounded-lg bg-pink-50 p-3 text-xs hover:bg-pink-100">
    <p class="font-semibold text-3xl text-pink-700">{{$title}}</p>
    <p class="text-pink-500 text-xl group-hover:text-pink-700" >{{$pic}}</p>
    <p class="text-pink-500 text-xl group-hover:text-pink-700">{{date('j F Y', strtotime( $waktu))}}</p>
    <p class="text-pink-500 text-xl group-hover:text-pink-700">{{$loc_offline}}</p>
</a>