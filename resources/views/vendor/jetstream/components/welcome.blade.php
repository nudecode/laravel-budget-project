
<section class="content-main">
	<div class="d-flex justify-content-between mb-3">
		<div>
			<a href="{{ route('transactions') }}" class="btn btn-outline-success">Income</a>
		</div>
		<div>
			<a href="{{ route('transactions') }}" class="btn btn-outline-success">Expenses</a>
		</div>
        <div>
            <a href="{{ route('index.billers') }}" class="btn btn-outline-success">Billers</a>
        </div>
		{{-- <div>
			<a href="#" class="btn btn-primary">Income</a>
		</div> --}}
	</div>
{{--<x-budget-summary :totalincomes="$totalincomes" :totalexpenses="$totalexpenses"/>--}}
<div class="row">
    <div class="col-xl-4 col-lg-12">
        <div class="card mb-4">
       <article class="card-body">

<h5 class="card-title">Summary</h5>


<span class="text-muted">Balance</span><span class="d-block">{{$incomes->add($expenses)}}</span>
<div class="progress mb-3">
<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 15%">15%</div>
</div>

<span class="text-muted">Income</span><span class="d-block">{{$incomes}}</span>
<div class="progress mb-3">
<div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 65%">65% </div>
</div>

<span class="text-muted">Expense</span><span class="d-block">{{$expenses}}</span>
<div class="progress mb-3">
<div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 51%"> 51% </div>
</div>
<br>
         </article> <!-- card-body end// -->
        </div> <!-- card end// -->
    </div> <!-- col end// -->
</div> <!-- row end// -->
</section>
