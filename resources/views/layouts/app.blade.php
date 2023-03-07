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
                    sebaik-baiknya untuk menghadapi hari ésok yang baru. ------- Berterimakasihlah pada segala yang
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

    @livewireScripts
    <div id="myModal" class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true"
        style="display:none">
        <!--
    Background backdrop, show/hide based on modal state.

    Entering: "ease-out duration-300"
      From: "opacity-0"
      To: "opacity-100"
    Leaving: "ease-in duration-200"
      From: "opacity-100"
      To: "opacity-0"
  -->
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

        <div class="fixed inset-0 z-10 overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <!--
        Modal panel, show/hide based on modal state.

        Entering: "ease-out duration-300"
          From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
          To: "opacity-100 translate-y-0 sm:scale-100"
        Leaving: "ease-in duration-200"
          From: "opacity-100 translate-y-0 sm:scale-100"
          To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
      -->
                <div
                    class="relative transform overflow-hidden rounded-lg bg-white px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-sm sm:p-6">
                    <div>
                        <div class="mx-auto flex h-3/5 w-3/5 items-center justify-center rounded-full bg-green-100">
                            <div
                                class="aspect-w-2 aspect-h-3 overflow-hidden rounded-lg bg-gray-100 sm:col-span-4 lg:col-span-5">
                                <img src={{ asset('img/pakKriss.png') }} class="object-cover object-center">
                            </div>
                        </div>
                        <div class="mt-3 text-center sm:mt-5">
                            <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title"></h3>
                            <div class="mt-2">
                                <p class="text-sm text-center text-gray-500">Siapkan semangat tiap hari untuk membangun
                                    negeri
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function showModal() {
            var modal = document.getElementById("myModal");
            modal.style.display = "block";
            setTimeout(function() {
                modal.style.display = "none";
            }, 5000);
        }

        setInterval(showModal, 15 * 60 * 1000); // 30 minutes in milliseconds
    </script>
</body>

</html>
