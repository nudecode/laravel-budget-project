<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('New Budget') }}
        </h2>
    </x-slot>
    <x-budget-header />
    <x-budget-summary />

    <x-addItem :transactions="$transactions"/>
</x-app-layout>
