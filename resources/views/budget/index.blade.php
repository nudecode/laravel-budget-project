<x-app-layout>
    <x-slot name="header" :budget="$budget">
        <div class="d-flex justify-content-between ">
            <h2 class="h4 font-weight-bold">
                {{ __($budget->name) }}
            </h2>
            <diV class="align-items-center">
                <h3>{{$budget->period->format('d/m/Y')}}</h3>
                <p><small class='text-muted'>From: {{$budget->period_start->format('d/m/Y')}} to: {{$budget->period_end->format('d/m/Y')}}</small></p>
            </div>

        </div>
    </x-slot>
    <x-budget-summary :totalincomes="$totalincomes" :totalexpenses="$totalexpenses" :totalbalance="$totalbalance"/>

    <x-addItem :budget="$budget"/>

    <x-budget-items :transactions="$transactions" />

</x-app-layout>
