    <section class="content-main">

        <div class="content-header">
            <h2 class="content-title">Budgets </h2>
            <div>
                <a href="{{ route('create.budget') }}" class="btn btn-primary"><i class="material-icons md-plus"></i> Create new</a>
            </div>
        </div>

        <div class="card mb-4">
            <header class="card-header">
                <div class="row align-items-center">
                    <div class="col col-check flex-grow-0">
                        <div class="form-check ms-2">
                            <input class="form-check-input" type="checkbox" value="">
                        </div>
                    </div>
                    {{-- <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                        <select class="form-select">
                            <option selected>All category</option>
                            <option>Electronics</option>
                            <option>Clothes</option>
                            <option>Automobile</option>
                        </select>
                    </div> --}}
                    <div class="col-md-4 col-6">
                        <input type="date" value="02.05.2021" class="form-control">
                    </div>
                    <div class="col-md-4 col-6">
                        <select class="form-select">
                            <option selected>Status</option>
                            <option>Active</option>
                            <option>Completed</option>
                            <option>Show all</option>
                        </select>
                    </div>
                </div>
            </header> <!-- card-header end// -->

            <div class="card-body">
                @foreach($budgets as $budget)
                <article class="itemlist">
                    <div class="row align-items-center">
                        <div class="col col-check flex-grow-0">
                             <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name">
                            <a class="itemside" href="{{ route('index.budget', $budget ) }}">
                                <div class="info">
                                    <h6 class="mb-0">{{$budget->name}}</h6>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-2 col-sm-2 col-4 col-price"> <span>$934.50</span> </div>
                        <div class="col-lg-2 col-sm-2 col-4 col-status">
                            <span class="badge rounded-pill alert-success">Active</span>
                        </div>
                        <div class="col-lg-2 col-sm-2 col-4 col-date">
                            <span>{{$budget->period->format('d/m/Y')}}</span>
                        </div>
                        <div class="col-lg-1 col-sm-2 col-4 col-action">
                            <div class="dropdown float-end">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-sm btn-light"> <i class="material-icons md-more_horiz"></i> </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('index.budget', $budget ) }}">View detail</a>
                                    <a class="dropdown-item" href="#">Edit info</a>
                                    <a class="dropdown-item text-danger" href="#">Delete</a>
                                </div>
                            </div> <!-- dropdown // -->
                        </div>
                    </div> <!-- row .// -->
                </article>  <!-- itemlist  .// -->
                @endforeach

                {{-- <article class="itemlist">
                    <div class="row align-items-center">
                        <div class="col col-check flex-grow-0">
                             <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name">
                            <a class="itemside" href="#">
                                <div class="info">
                                    <h6 class="mb-0">Nov Fortnight 2</h6>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-2 col-sm-2 col-4 col-price"> <span>$834.50</span> </div>
                        <div class="col-lg-2 col-sm-2 col-4 col-status">
                            <span class="badge rounded-pill alert-success">Active</span>
                        </div>
                        <div class="col-lg-2 col-sm-2 col-4 col-date">
                            <span>18/11/2020</span>
                        </div>
                        <div class="col-lg-1 col-sm-2 col-4 col-action">
                            <div class="dropdown float-end">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-sm btn-light"> <i class="material-icons md-more_horiz"></i> </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">View detail</a>
                                    <a class="dropdown-item" href="#">Edit info</a>
                                    <a class="dropdown-item text-danger" href="#">Delete</a>
                                </div>
                            </div> <!-- dropdown // -->
                        </div>
                    </div> <!-- row .// -->
                </article>  <!-- itemlist  .// --> --}}

                <nav class="float-end mt-4" aria-label="Page navigation">
                  <ul class="pagination">
                    {{-- <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li> --}}
                    {{$budgets->links}}
                  </ul>
                </nav>

            </div> <!-- card-body end// -->
        </div> <!-- card end// -->
    </section> <!-- content-main end// -->
