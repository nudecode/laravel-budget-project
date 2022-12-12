
<section class="content-main">
<<<<<<< HEAD

<div class="row">
    <div class="col-lg-4">
        <div class="card card-body mb-4">
    <article class="icontext">
      <span class="icon icon-sm rounded-circle bg-primary-light"><i class="text-primary material-icons md-monetization_on"></i></span>
      <div class="text">
        <h6 class="mb-1">Income</h6>  <span>$19,626,058.20</span>
      </div>
    </article>

    </div> <!-- card  end// -->
    </div> <!-- col end// -->
    <div class="col-lg-4">
        <div class="card card-body mb-4">
    <article class="icontext">
      <span class="icon icon-sm rounded-circle bg-success-light"><i class="text-success material-icons md-local_shipping"></i></span>
      <div class="text">
        <h6 class="mb-1">Expenses</h6> <span>87790</span>
      </div>
    </article>
    </div> <!-- card end// -->
    </div> <!-- col end// -->
    <div class="col-lg-4">
        <div class="card card-body mb-4">
    <article class="icontext">
      <span class="icon icon-sm rounded-circle bg-warning-light"><i class="text-warning material-icons md-shopping_basket"></i></span>
      <div class="text">
        <h6 class="mb-1">Balance</h6>  <span>5678</span>
      </div>
    </article>
    </div> <!--  end// -->
    </div> <!-- col end// -->
</div> <!-- row end// -->
=======
	<div class="d-flex justify-content-between mb-3">
		<div>
			<a href="{{ route('transactions') }}" class="btn btn-outline-success">Income</a>
		</div>
		<div>
			<a href="{{ route('transactions') }}" class="btn btn-outline-success">Expenses</a>
		</div>
		{{-- <div>
			<a href="#" class="btn btn-primary">Income</a>
		</div>
		<div>
			<a href="#" class="btn btn-primary">Billers</a>
		</div> --}}
	</div>
{{--<x-budget-summary :totalincomes="$totalincomes" :totalexpenses="$totalexpenses"/>--}}
>>>>>>> main
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

<<<<<<< HEAD
        <span class="text-muted">Expenses</span>
        <div class="progress mb-3">
        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 51%"> 51% </div>
        </div>
        <br>
        <a href="#" class="btn btn-light">Open analytics <i class="material-icons md-open_in_new"></i> </a>
                </article> <!-- card-body end// -->
                </div> <!-- card end// -->

        </div> <!-- col end// -->
        <div class="col-xl-8 col-lg-12">

         <x-budget-list :budgets="$budgets"/>

         <x-

        </div>
    </div>
=======
<span class="text-muted">Expense</span><span class="d-block">{{$expenses}}</span>
<div class="progress mb-3">
<div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 51%"> 51% </div>
</div>
<br>
         </article> <!-- card-body end// -->
        </div> <!-- card end// -->
    </div> <!-- col end// -->
>>>>>>> main
</div> <!-- row end// -->
</section>
