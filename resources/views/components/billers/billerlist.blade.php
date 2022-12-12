<div class="card-body">

    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Seller</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Total</th>
                    <th class="text-end"> Action </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($billers as $biller)
                    <tr>
                        <td width="40%">
                            <a href="#" class="itemside">
                                <div class="left">
                                    <img src="images/people/avatar1.jpg" class="img-sm img-avatar" alt="Userpic">
                                </div>
                                <div class="info pl-3">
                                    <h6 class="mb-0 title">{{$biller->name}}</h6>
                                    <small class="text-muted">Seller ID: #{{$biller->id}}</small>
                                </div>
                            </a>
                        </td>
                        <td>eleanor2020@example.com</td>
                        <td><span class="badge rounded-pill alert-success">Active</span></td>
                        <td>{{$biller->created_at->format('d/m/Y')}}</td>
                        <td class="text-end">
                            <a href="#" class="btn btn-light">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table> <!-- table-responsive.// -->
    </div>

</div> <!-- card-body end// -->
