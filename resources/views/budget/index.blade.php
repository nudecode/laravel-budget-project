<x-app-layout>
    <x-slot name="header" {{--:budget="$budget"--}}>
        <div class="d-flex justify-content-between ">
            <h2 class="h4 font-weight-bold">
                {{__('My Budgets')}}
            </h2>
            <diV class="align-items-center">
                <h3>{{--$budget->period->format('d/m/Y')--}}</h3>
                <p><small class='text-muted'>From: {{--$budget->period_start->format('d/m/Y')}} to: {{$budget->period_end->format('d/m/Y')--}}</small></p>
            </div>

        </div>
    </x-slot>
    <section class="content-main">

        <div class="content-header">
            <h2 class="content-title">My Budgets </h2>
            <div>
                <a href="{{route('create.budget')}}" class="btn btn-primary text-white"><i class="material-icons md-plus"></i> Create new</a>
            </div>
        </div>

        <div class="card mb-4">
            <header class="card-header">
                <div class="row gx-3">
                    <div class="col-lg-4 col-md-6 me-auto">
                        <input type="text" placeholder="Search..." class="form-control">
                    </div>
                    <div class="col-lg-2 col-6 col-md-3">
                        <select class="form-select">
                            <option>Status</option>
                            <option>Active</option>
                            <option>Completed</option>
                            <option>Show all</option>
                        </select>
                    </div>
                </div>
            </header> <!-- card-header end// -->
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </th>
                            <th>Budget</th>
                            <th>Period</th>
                            <th>Status</th>
                            <th class="text-end"> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $budgets as $budget )
                        <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>{{$budget->name}}</td>
                                <td><b>{{$budget->period->format('d/m/Y')}}</b></td>
                                <td><span class="badge rounded-pill {{$budget->is_active ? 'alert-success' : 'alert-primary'}}">{{$budget->is_active ? 'Active' : 'Completed'}}</span></td>
                                <td class="text-end">
                                    <a href="{{route('show.budget', $budget->id)}}" class="btn btn-light">Detail</a>
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light"> <i
                                                class="material-icons md-more_horiz"></i> </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{route('show.budget', $budget->id)}}">View Budget</a>
                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                        </div>
                                    </div> <!-- dropdown //end -->
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
                </div> <!-- table-responsive end // -->

                <nav class="float-end mt-3" aria-label="Page navigation">
                  <ul class="pagination">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                  </ul>
                </nav>

            </div> <!-- card-body end// -->
        </div> <!-- card end// -->


    </section> <!-- content-main end// -->

    <script>
        if(localStorage.getItem("darkmode")){
            var body_el = document.body;
            body_el.className += 'dark';
        }
    </script>

</x-app-layout>
