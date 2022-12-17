<x-app-layout>

    <div class="col-md-12">
        <div class="bg-white py-2">
            <span class="text-capitalize px-5">{{ Auth::user()['name'] }} logged in!</span>
        </div>
    </div>

    {{--  <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>  --}}
</x-app-layout>
