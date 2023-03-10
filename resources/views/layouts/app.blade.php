<!DOCTYPE html>
<html>
{{-- lang="{{ str_replace('_', '-', app()->getLocale()) }}" --}}

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased" x-data="{ open: true }" :class="open ? '' : 'overflow-hidden'">
    <div class="bg-gray-100">
        <div class="flex" :class="open ? '' :"overflow-hidden">
            <div x-show="open">
                <x-sidebar-menu class="w-64" />
            </div>
            <div class="bg-white h-full shadow w-full x-auto py-6 px-6 sm:px-6 lg:px-8" -hidden'">
                {{ $header }}
                {{ $slot }}
                <marquee class="pt-4" direction="left" height="50px">
                    (1) BRILian jujur, tulus, dan patuh pada peraturan.
                    (2) BRILian cakap dan handal, terus belajar, mengembangkan diri dan orang lain (continous learner).
                    (3) BRILian bekerja tuntas dengan penuh tanggung jawab berorientasi pada kinerja terbaik.
                    (4) BRILian membangun kolaborasi yang produktif.
                    (5) BRILian terbuka dan menghargai kemajemukan (respect to diversity).
                    (6) BRILian proaktif, adaptif, inovatif dan berorientasi pada pertumbuhan yang berkelanjutan.
                    (7) BRILian berempati memahami kebutuhan pelanggan dan memberikan layanan melebihi harapan.
                    (8) BRILian peduli terhadap masyarakat dan lingkungan.
                    ------- Hanya ada satu negara yang pantas menjadi negaraku. Ia tumbuh dengan perbuatan dan perbuatan
                    itu adalah perbuatanku. ------- Orang yang memimpikan kesuksesan atau orang yang membuatnya menjadi
                    kenyataan? ------- Kesempatan kamu untuk sukses di setiap kondisi selalu dapat diukur oleh seberapa
                    besar kepercayaan kamu pada diri sendiri. ------- Suatu pekerjaan yang paling tak kunjung bisa
                    diselesaikan adalah pekerjaan yang tak kunjung pernah dimulai. ------- Dunia tak lagi sama tak
                    selamanya memihak kita, di saat kita mau berusaha di situlah kebahagiaan akan indah pada waktunya.
                    ------- Keberhasilan bukanlah milik orang yang pintar. Keberhasilan adalah kepunyaan mereka yang
                    senantiasa berusaha ------- Berhenti berharap, mulailah bertindak. ------- Persiapkan hari ini
                    sebaik-baiknya untuk menghadapi hari ??sok yang baru. ------- Berterimakasihlah pada segala yang
                    memberi kehidupan. -------
                </marquee>
            </div>
        </div>
        <div class="m-4 fixed bottom-0 right-0">
            <button x-on:click="open = ! open" type="button"
                class="inline-flex items-center rounded-full border border-transparent bg-indigo-600 p-1.5 text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15" />
                </svg>
                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 9V4.5M9 9H4.5M9 9L3.75 3.75M9 15v4.5M9 15H4.5M9 15l-5.25 5.25M15 9h4.5M15 9V4.5M15 9l5.25-5.25M15 15h4.5M15 15v4.5m0-4.5l5.25 5.25" />
                </svg>
            </button>
        </div>
    </div>
    @stack('modals')
    @stack('custom-scripts')
    @livewire('utils.popup-modal')
    @livewireScripts
    <script>
        function showModal() {
            var modal = document.getElementById("myModal");
            modal.style.display = "block";
            setTimeout(function() {
                Livewire.emit('randomFun')
                modal.style.display = "none";
            }, 5000);
        }
        setInterval(showModal, 15 * 60 * 1000); // 30 minutes in milliseconds
    </script>
</body>

</html>
