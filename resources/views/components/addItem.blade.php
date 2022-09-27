<section class="content-main" style="max-width: 720px">

	<div class="content-header">
		<h2 class="content-title">Add Transaction </h2>
		<div>
			<a href="#" class="btn btn-outline-danger"> &times; Discard</a>
		</div>
	</div>

	<div class="card mb-4">
          <div class="card-body">
			<form action="{{ route('store.transaction') }}" method="POST">
                @csrf
				<div class="mb-4">
					<label for="product_name" class="form-label">Name</label>
					<input id="name" name="name" placeholder="Enter item..." class="form-control">
					<input type="hidden" id="budget_id" name="budget_id" value="{{$budget->id}}">
				</div>
				<div class="mb-4">
					<label for="product_name" class="form-label">Amount</label>
					<input type="number"
                    id="amount"
                    name="amount"
                    placeholder="Enter amount..." class="form-control">
				</div>
				<button type="submit" value="submit" class="btn btn-primary">Add item</button>
			</form>
          </div>
    </div> <!-- card end// -->


</section> <!-- content-main end// -->
