{{-- <div class="row justify-content-center my-5">
    <div class="col-md-12">
        home dash board
    </div>
</div> --}}
{{-- <div class="container-fluid">
    <div class="row">
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar"></span>
              This week
            </button>
          </div>
        </div>

        <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

        <h2>Budgets</h2>
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Header</th>
                <th scope="col">Header</th>
                <th scope="col">Header</th>
                <th scope="col">Header</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1,001</td>
                <td>random</td>
                <td>data</td>
                <td>placeholder</td>
                <td>text</td>
              </tr>
              <tr>
                <td>1,002</td>
                <td>placeholder</td>
                <td>irrelevant</td>
                <td>visual</td>
                <td>layout</td>
              </tr>
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div> --}}

<section class="content-main">
	<div class="content-header">
		<div>
			<a href="#" class="btn btn-primary">Create budget</a>
		</div>
	</div>
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
<div class="row">
    <div class="col-xl-4 col-lg-12">
        <div class="card mb-4">
       <article class="card-body">

        <h5 class="card-title">Summary</h5>


        <span class="text-muted">Balance</span>
        <div class="progress mb-3">
        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 15%">15%</div>
        </div>

        <span class="text-muted">Income</span>
        <div class="progress mb-3">
        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 65%">65% </div>
        </div>

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

         <x-budget-list />

        </div>
    </div>
</div> <!-- row end// -->
</section>
