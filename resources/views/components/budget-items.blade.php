<section class="content-main">

    <div class="content-header">
        <h2 class="content-title">Transactions </h2>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Biller</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th class="text-end"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($transactions as $transaction)
                            <tr>
                                <td>{{$transaction->created_at->format('d/m/Y')}}</td>
                                <td>{{$transaction->name}}</td>
                                <td>{{$transaction->amount}}</td>
                                <td>
                                    <div class="col-lg-2 col-sm-2 col-4 col-status">
                                        <span class="badge rounded-pill {{$transaction->amount->isPositive() ? 'alert-success' : 'alert-danger'}}">{{$transaction->amount->isPositive() ? 'Income' : 'Expense'}}</span>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light">Details</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div> <!-- table-responsive.// -->

                    <nav class="float-end mt-4" aria-label="Page navigation">
                        <ul class="pagination">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>

                </div> <!-- col end// -->
            </div> <!-- row end// -->
        </div> <!-- card-body // -->
    </div> <!-- card end// -->

</section> <!-- content-main end// -->
