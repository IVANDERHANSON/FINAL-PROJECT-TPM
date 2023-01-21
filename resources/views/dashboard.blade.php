<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900" style="text-align: center">
                    <h5 style="font-size: 30px">Hello, {{auth()->user()->name}}!</h5>
                    <h5 style="font-size: 25px">Leader Information</h5>
                    <h5 class="card-title">Name: {{auth()->user()->leader_name}}</h5>
                    <h5 class="card-title">Email: {{auth()->user()->email}}</h5>
                    <h5 class="card-title">Whatsapp Number: {{auth()->user()->whatsapp}}</h5>
                    <h5 class="card-title">LINE ID: {{auth()->user()->line}}</h5>
                    <h5 class="card-title">Github / Gitlab ID: {{auth()->user()->github}}</h5>
                    <h5 class="card-title">Birth Place: {{auth()->user()->birth_place}}</h5>
                    <h5 class="card-title">Birth Date: {{auth()->user()->birth_date}}</h5>
                    <br>
                    <a href="{{route('dashboard', auth()->user()->cv)}}" style="background-color: blue; color:white; padding: 3px">View CV</a>
                    <a href="{{route('dashboard', auth()->user()->flazz_card)}}" style="background-color: blue; color:white; padding: 3px">View Flazz Card</a>
                    <a href="{{route('dashboard', auth()->user()->id_card)}}" style="background-color: blue; color:white; padding: 3px">View ID Card</a>
                    <br>
                    <br>
                    <a href="{{route('dashboard', auth()->user()->github)}}" style="background-color: red; color:white; padding: 3px">Add Member (Max 3x)</a>
                    <br>
                    <br>
                    <h5 style="font-size: 25px">Contact Person</h5>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
