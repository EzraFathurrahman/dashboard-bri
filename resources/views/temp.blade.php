 
<div class="flex h-full flex-col">
  <header class="flex flex-none items-center justify-between border-b border-gray-200 py-4 px-6">
    <h1 class="text-lg font-semibold text-gray-900">
        Week {{date('w')}}, {{date('M Y')}}
    </h1>
  </header>
  <div class="isolate flex flex-auto flex-col overflow-auto bg-white">
    <div style="width: 100%" class="flex max-w-full flex-none flex-col sm:max-w-none md:max-w-full">
      <div class="sticky top-0 z-30 flex-none bg-white shadow ring-1 ring-black ring-opacity-5 sm:pr-8">

        <div class="-mr-px hidden grid-cols-5 divide-x divide-gray-200 border-r border-gray-100 text-sm leading-7 text-gray-500 sm:grid">
          <div class="col-end-1 w-14"></div>
          <div class="flex items-center justify-center py-3">
            <span>Senin </span>
          </div>
          <div class="flex items-center justify-center py-3">
            <span>Selasa </span>
          </div>
          <div class="flex items-center justify-center py-3">
            <span>Rabu </span>
        </div>
          <div class="flex items-center justify-center py-3">
            <span>Kamis </span>
          </div>
          <div class="flex items-center justify-center py-3">
            <span>Jumat </span>
          </div>
        </div>
      </div>
      <div class="flex flex-auto">
        <div class="sticky left-0 z-10 w-14 flex-none bg-white ring-1 ring-gray-100"></div>
        <div class="grid flex-auto grid-cols-1 grid-rows-1">
          <!-- Horizontal lines -->
          <div class="col-start-1 col-end-2 row-start-1 grid divide-y divide-gray-100" style="grid-template-rows: repeat(19, minmax(3.5rem, 1fr))">
            <div class="row-end-1 h-7"></div>
            <div>
              <div class="sticky left-0 z-20 -mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 text-gray-400">07:30</div>
            </div>
            <div></div>
            <div>
              <div class="sticky left-0 z-20 -mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 text-gray-400">08:30</div>
            </div>
            <div></div>
            <div>
              <div class="sticky left-0 z-20 -mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 text-gray-400">09:30</div>
            </div>
            <div></div>
            <div>
              <div class="sticky left-0 z-20 -mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 text-gray-400">10:30</div>
            </div>
            <div></div>
            <div>
              <div class="sticky left-0 z-20 -mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 text-gray-400">11:30</div>
            </div>
            <div></div>
            <div>
              <div class="sticky left-0 z-20 -mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 text-gray-400">12:30</div>
            </div>
            <div></div>
            <div>
              <div class="sticky left-0 z-20 -mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 text-gray-400">13:30</div>
            </div>
            <div></div>
            <div>
              <div class="sticky left-0 z-20 -mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 text-gray-400">14:30</div>
            </div>
            <div></div>
            <div>
              <div class="sticky left-0 z-20 -mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 text-gray-400">15:30</div>
            </div>
            <div></div>
            <div>
              <div class="sticky left-0 z-20 -mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 text-gray-400">16:30</div>
            </div>
          </div>

          <!-- Vertical lines -->
          <div class="col-start-1 col-end-2 row-start-1 hidden grid-cols-5 grid-rows-1 divide-x divide-gray-100 sm:grid sm:grid-cols-5">
            <div class="col-start-1 row-span-full"></div>
            <div class="col-start-2 row-span-full"></div>
            <div class="col-start-3 row-span-full"></div>
            <div class="col-start-4 row-span-full"></div>
            <div class="col-start-5 row-span-full"></div>
            <div class="col-start-6 row-span-full w-8"></div>
          </div>

          <!-- Events -->
          <ol class="col-start-1 col-end-2 row-start-1 grid grid-cols-1 sm:grid-cols-5 sm:pr-8" style="grid-template-rows: 1.75rem repeat(300, minmax(0, 1fr)) auto">
            <li class="relative mt-px flex sm:col-start-3" style="grid-row: 20 / span 40">
              <a href="#" class="group absolute inset-1 flex flex-col overflow-y-auto rounded-lg bg-blue-50 p-2 text-xs leading-5 hover:bg-blue-100">
                <p class="text-sm order-1 font-semibold text-blue-700">Rapat 1</p>
                <p class="text-base text-blue-500 group-hover:text-blue-700">AML x OJK</p>
              </a>
            </li>
            <li class="relative mt-px flex sm:col-start-3" style="grid-row: 20 / span 40">
              <a href="#" class="group absolute inset-1 flex flex-col overflow-y-auto rounded-lg bg-blue-50 p-2 text-xs leading-5 hover:bg-blue-100">
                <p class="text-sm order-1 font-semibold text-blue-700">Rapat 230</p>
                <p class="text-base text-blue-500 group-hover:text-blue-700">AML x OJK</p>
              </a>
            </li>
            <li class="relative mt-px flex sm:col-start-3" style="grid-row: 92 / span 30">
              <a href="#" class="group absolute inset-1 flex flex-col overflow-y-auto rounded-lg bg-pink-50 p-2 text-xs leading-5 hover:bg-pink-100">
                <p class="order-1 font-semibold text-pink-700">Rapat 2</p>
                <p class="text-pink-500 group-hover:text-pink-700">Mba Della dan Mba Gissel</p>
              </a>
            </li>
            <li class="relative mt-px flex sm:col-start-1" style="grid-row: 10 / span 30">
              <a href="#" class="group absolute inset-1 flex flex-col overflow-y-auto rounded-lg bg-pink-50 p-2 text-xs leading-5 hover:bg-pink-100">
                <p class="order-1 font-semibold text-pink-700">Rapat 3</p>
                <p class="text-pink-500 group-hover:text-pink-700">Compliance Division</p>
              </a>
            </li>
            
          </ol>
        </div>
      </div>
    </div>
  </div>