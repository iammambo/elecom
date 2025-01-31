<x-app-layout>
    <x-slot name="header">
        <h2 class="bg-dark font-semibold text-xl text-gray-800 dark:text-gray-900 leading-tight">
            {{ __('Customer Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-light overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-dark dark:text-gray-800 ">
                    {{ __("You're logged in as Customer") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
