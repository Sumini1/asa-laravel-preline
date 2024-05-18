<x-app-layout>
    {{-- // diambil dari header layout app.blade, ngambil bagian judul aja, menggunakan alpine.js --}}
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200 lg:ps-64">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- content --}}
    <div class="w-full px-6 pt-10 sm:px-6 md:px-8 lg:ps-72">
        <header>
            <p class="mb-2 text-sm font-semibold text-blue-500 ">Assalamu alaikum...</p>
            <h1 class="text-xl font-bold text-gray-800 dark:text-gray-200">Senang melihatmu kembali, </h1>
        </header>
    </div>
</x-app-layout>
