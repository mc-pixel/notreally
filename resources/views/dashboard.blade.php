<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="px-6">Biersal(notreally)</div>
    <div class="px-6 flex flex-row justify-center gap-x-6">
        <a href="{{route('beer_index')}}" class="hover:underline decoration-pink-500 decoration-2">Beers</a>
        <a href="{{route('beer_create')}}" class="hover:underline decoration-pink-500 decoration-2">Beers create</a>
        <a href="{{route('bar_index')}}" class="hover:underline decoration-pink-500 decoration-2">Bar</a>
        <a href="{{route('bar_create')}}" class="hover:underline decoration-pink-500 decoration-2">Bar create</a>
        <a href="{{route('country_index')}}" class="hover:underline decoration-pink-500 decoration-2">country</a>
        <a href="{{route('country_create')}}" class="hover:underline decoration-pink-500 decoration-2">country create</a>

    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
