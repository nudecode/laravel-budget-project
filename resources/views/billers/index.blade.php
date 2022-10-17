<x-app-layout>
    <x-slot name="header" {{--:budget="$budget"--}}>
        <div class="d-flex justify-content-between ">
            <h2 class="h4 font-weight-bold">
                {{__('My Billers')}}
            </h2>
            <diV class="align-items-center">
                <h3>{{--$budget->period->format('d/m/Y')--}}</h3>
                <p><small class='text-muted'>From: {{--$budget->period_start->format('d/m/Y')}} to: {{$budget->period_end->format('d/m/Y')--}}</small></p>
            </div>

        </div>
    </x-slot>
    <section class="content-main">

        <div class="content-header">
            <h2 class="content-title">Billers list</h2>
            <div>
                <a href="#" class="btn btn-primary"><i class="material-icons md-plus"></i> Create new</a>
            </div>
        </div>

        <div class="card mb-4">
            <header class="card-header">
                <div class="row gx-3">
                    <div class="col-lg-4 col-md-6 me-auto">
                        <input type="text" placeholder="Search..." class="form-control">
                    </div>
                    <div class="col-lg-2 col-md-3 col-6">
                        <select class="form-select">
                            <option>Status</option>
                            <option>Active</option>
                            <option>Disabled</option>
                            <option>Show all</option>
                        </select>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6">
                        <select class="form-select">
                            <option>Show 20</option>
                            <option>Show 30</option>
                            <option>Show 40</option>
                        </select>
                    </div>
                </div>
            </header> <!-- card-header end// -->
            <div class="card-body">

                <div class="table-responsive">
                    <x-biller.biller-table :billers="$billers"/>
                </div>

            </div> <!-- card-body end// -->
        </div> <!-- card end// -->


    </section> <!-- content-main end// -->
</x-app-layout>
