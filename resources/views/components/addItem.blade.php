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
				</div>
				<div class="mb-4">
					<label for="product_name" class="form-label">Amount</label>
					<input type="number"
                    id="amount"
                    name="amount"
                    placeholder="Enter amount..." class="form-control">
				</div>

				{{-- <div class="mb-4">
					<label class="form-label">Full description</label>
					<textarea placeholder="Type here" class="form-control" rows="4"></textarea>
				</div> --}}

				{{-- <div class="mb-4">
					<label class="form-label">Images</label>
					<input class="form-control" type="file">
				</div> --}}

				{{-- <div class="mb-4">
					<label for="product_name" class="form-label">Tags</label>
					<input type="text" class="form-control">
				</div> --}}

				{{-- <div class="row gx-2">
					<div class="col-sm-6 mb-3">
					    <label class="form-label">Category</label>
					    <select class="form-select">
					    	<option> Automobiles </option>
					    	<option> Home items </option>
					    	<option> Electronics </option>
					    	<option> Smartphones </option>
					    	<option> Sport items </option>
					    	<option> Baby and Tous </option>
					    </select>
				  	</div>
					  <div class="col-sm-6 mb-3">
					    <label class="form-label">Sub-category</label>
					    <select class="form-select">
					    	<option> Nissan </option>
					    	<option> Honda </option>
					    	<option> Mercedes </option>
					    	<option> Chevrolet </option>
					    </select>
					  </div>
				</div> <!-- row.// --> --}}


				{{-- <div class="mb-4">
					<label class="form-label">Price</label>
					<div class="row gx-2">
						<div class="col-4">
						    <input placeholder="Type" type="text" class="form-control">
					  	</div>
						<div class="col-2">
						    <select class="form-select">
						    	<option> USD </option>
						    	<option> EUR </option>
						    	<option> RUBL </option>
						    </select>
						</div>
					</div> <!-- row.// -->
				</div> --}}

				{{-- <label class="form-check mb-4">
				  <input class="form-check-input" type="checkbox" value="">
				  <span class="form-check-label">  Publish on website </span>
				</label> --}}

				<button type="submit" value="submit" class="btn btn-primary">Add item</button>

			</form>
          </div>
    </div> <!-- card end// -->


</section> <!-- content-main end// -->
