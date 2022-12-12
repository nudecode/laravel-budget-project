<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between">
            <div>
                <a href="#" class="btn btn-outline-danger"> &times; Discard</a>
            </div>
            <div>
                <a href="{{ route('create.biller') }}" class="btn btn-outline-success"> &plus; Add Biller</a>
            </div>
        </div>
    </x-slot>
    <x-billers.billerlist :billers="$billers"/>
</x-app-layout>
