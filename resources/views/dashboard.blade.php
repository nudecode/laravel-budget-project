<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Simple Budget') }}
        </h2>
    </x-slot>

<<<<<<< HEAD
    <x-jet-welcome :budgets="$budgets"/>
=======
    <x-jet-welcome :incomes="$incomes" :expenses="$expenses"/>
>>>>>>> main
</x-app-layout>
