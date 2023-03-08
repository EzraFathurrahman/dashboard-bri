<div id="myModal" class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true" style="display:none">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

    <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div
                class="relative transform overflow-hidden rounded-lg bg-white px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-sm sm:p-6">
                <div>
                    <div class="mx-auto flex h-3/5 w-3/5 items-center justify-center rounded-full bg-green-100">
                        <div
                            class="aspect-w-2 aspect-h-3 overflow-hidden rounded-lg bg-gray-100 sm:col-span-4 lg:col-span-5">
                            <img src={{ asset('images/' . $item->filename) }} class="object-cover object-center">
                        </div>
                    </div>
                    <div class="mt-3 text-center sm:mt-5">
                        <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title"></h3>
                        <div class="mt-2">
                            <p class="text-sm text-center text-gray-500">{{ $item->caption }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
