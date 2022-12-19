<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Create Biller') }}
        </h2>
    </x-slot>
    <x-billers.addBiller :categories="$categories"/>
</x-app-layout>
