@props(['active'])

@php
$classes = ($active ?? false)
            ? 'group w-full flex items-center pl-2 py-2 text-sm font-medium rounded-md bg-[#EEF2FF] font-bold text-[#4F46E5] border-l-4 border-[#4F46E5] text-gray-900'
            : 'group w-full flex items-center pl-2 py-2 text-sm font-medium rounded-md font-medium text-white hover:bg-sky-800 hover:border-l-4 hover:border-white hover:text-white';
$classesSVG = ($active ?? false)
            ? 'text-gray-500 mr-3 flex-shrink-0 h-6 w-6 text-[#4F46E5]'
            : 'text-gray-500 mr-3 flex-shrink-0 h-6 w-6  text-white group-hover:text-white';
@endphp

            {{-- //  border-indigo-400 text-sm font-medium leading-5 text-sky-900 focus:outline-none focus:border-indigo-700 transition --}}

{{-- //  border-transparent text-sm font-medium leading-5 text-sky-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition --}}
<a {{ $attributes->merge(['class' => $classes]) }}>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" {{ $attributes->merge(['class' => $classesSVG]) }} >
        {{ $svg }}
    </svg>
    <div>
        {{ $slot }}
    </div>
</a>