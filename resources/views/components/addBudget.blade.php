<section class="content-main" style="max-width: 720px">

	<div class="content-header">
		<h2 class="content-title">Create Budget </h2>
		<div>
			<a href="{{ url()->previous() }}" class="btn btn-outline-danger"> &times; Discard</a>
		</div>
	</div>

	<div class="card mb-4">
          <div class="card-body">
			<form action="{{ route('store.budget') }}" method="POST">
                @csrf
				<div class="mb-4">
					<label for="product_name" class="form-label">Name</label>
					<input type="text" placeholder="example... November Fortnight 1" class="form-control" name="name" id="product_name">
				</div>
				<div class="mb-4">
					<label for="product_name" class="form-label">From</label>
					<input type="date" placeholder="Type here" class="form-control" name="period_start" id="period_start">
				</div>
				<div class="mb-4">
					<label for="product_name" class="form-label">To</label>
					<input type="date" placeholder="Type here" class="form-control" name="period_end" id="period_end">
				</div>
                <button type="submit" class="btn btn-primary">Add Budget</button>
			</form>
          </div>
    </div> <!-- card end// -->


</section> <!-- content-main end// -->
