<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('New Budget') }}
        </h2>
    </x-slot>
    <x-budget-summary :totalincomes="$totalincomes" :totalexpenses="$totalexpenses"/>

    <x-addItem />

    <x-budget-items :transactions="$transactions"/>

</x-app-layout>
