<div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-base font-semibold leading-6 text-gray-900">Popup</h1>
            <p class="mt-2 text-sm text-gray-700">A list of all the Popup in this webisite that will be show every 15
                minutes in 5 seconds</p>
        </div>
        <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
            <button type="button" wire:click="$set('openModal',true)"
                class="block rounded-md bg-indigo-600 py-2 px-3 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add
                Popup</button>
        </div>

        <x-jet-dialog-modal wire:model="openModal">
            <x-slot name="title">
                Tambah PopUp
            </x-slot>
            <x-slot name="content">
                <div class="space-y-5">
                    <div class="sm:items-start  sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="cover-photo"
                            class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Image</label>
                        <div class="mt-2 sm:mt-0">
                            <div runat="server"
                                class="flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                                <div class="space-y-1 text-center">
                                    @if ($imgFile)
                                        <img src="{{ $imgFile->temporaryUrl() }}">
                                    @else
                                        <svg id="svgImgUpld" class="mx-auto h-12 w-12 text-gray-400"
                                            stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                            <path
                                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    @endif
                                    <div class="flex text-sm text-gray-600">
                                        <label for="fileUpload"
                                            class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                                            <input wire:model="imgFile" id="imgInp" type="file" accept="image/*"
                                                class="file:rounded-full file:border-0 file:text-sm file:font-semibold
                                        file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100" />

                                        </label>
                                    </div>
                                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                </div>
                            </div>
                        </div>
                        <label for="last-name"
                            class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Caption</label>
                        <div class="mt-2 sm:mt-0">
                            <input type="text" wire:model="caption"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    @error('imgFile')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('openModal',false)" wire:loading.attr="disabled">
                    Tutup
                </x-jet-secondary-button>

                <x-jet-button class="ml-2" wire:click="tambahPopup()" wire:loading.attr="disabled">
                    Tambah
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>
    </div>
    <div class="mt-8 flow-root">
        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                    Image
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    Caption</th>
                                {{-- <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                    <span class="sr-only">Edit</span>
                                </th> --}}
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            @foreach ($files as $item)
                                <tr>
                                    <td
                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                        <img src="{{ asset('images/' . $item->filename) }}" alt=""
                                            width="500">
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        @if ($item->caption == '')
                                            -
                                        @else
                                            {{ $item->caption }}
                                        @endif
                                    </td>
                                    {{-- <td
                                    class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span
                                            class="sr-only">, Lindsay Walton</span></a>
                                </td> --}}
                                </tr>
                            @endforeach

                            <!-- More people... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <input accept="image/*" type='file' id="imgInp" />
<img id="blah" src="#" alt="your image" /> --}}
<script>
    $(document).ready(() => {
        $('#imgUpload').change(function() {
            const file = this.files[0];
            if (file) {
                let reader = new FileReader();
                reader.onload = function(event) {
                    $('#imgPreview').attr('src', event.target.result);
                }
                reader.readAsDataURL(file);
            }
        });
    });


    imgInp.onchange = evt => {
        const [file] = imgInp.files
        if (file) {
            blah.src = URL.createObjectURL(file)
        }
    }
</script>
