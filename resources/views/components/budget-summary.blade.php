<h4></h4>
<div class="content-header">
    <h2 class="content-title"> Quick Summary</h2>
</div>
@empty($totalIncomes)
    empty
@endempty
<div class="row">
    <div class="col-lg-4">
        <div class="card card-body mb-4">
    <article class="icontext">
      <span class="icon icon-sm rounded-circle bg-success-light"><i class="text-success material-icons md-monetization_on"></i></span>
      <div class="text">
        <h3 class="mb-1 text-success fw-bold">Income</h3>  <span><h3 class="text-success fw-bold">{{ $totalincomes }}</h3></span>
      </div>
    </article>

    </div> <!-- card  end// -->
    </div> <!-- col end// -->
    <div class="col-lg-4">
        <div class="card card-body mb-4">
    <article class="icontext">
      <span class="icon icon-sm rounded-circle bg-danger-light"><i class="text-danger material-icons md-monetization_on"></i></span>
      <div class="text">
        <h3 class="mb-1 text-danger fw-bold">Expenses</h3> <span><h3 class="text-danger fw-bold">{{ $totalexpenses }}</h3></span>
      </div>
    </article>
    </div> <!-- card end// -->
    </div> <!-- col end// -->
    <div class="col-lg-4">
        <div class="card card-body mb-4">
    <article class="icontext">
      <span class="icon icon-sm rounded-circle bg-primary-light"><i class="text-primary material-icons md-monetization_on"></i></span>
      <div class="text">
        <h2 class="mb-1 text-primary fw-bold">Balance</h2>  <span><h2 class="text-primary fw-bold">{{ $totalbalance}}</h2></span>
      </div>
    </article>
    </div> <!--  end// -->
    </div> <!-- col end// -->
</div> <!-- row end// -->
