<x-app-layout>
    <x-slot name="header">
        <div>
			<a href="#" class="btn btn-outline-danger"> &times; Discard</a>
		</div>
    </x-slot>
    <x-budget-summary :incomes="$incomes" :expenses="$expenses"/>

    <x-addItem :billers="$billers"/>

    <x-budget-items :transactions="$transactions" />

</x-app-layout>
