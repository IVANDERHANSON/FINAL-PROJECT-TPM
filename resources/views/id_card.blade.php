<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ID Card') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900" style="text-align: center">
                    <img src="{{asset('/storage/cv/'.auth()->user()->cv)}}" class="card-img-top" alt="...">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>