<section class="content-main" style="max-width: 720px">

	<div class="content-header">
		<h2 class="content-title">Create biller </h2>
		<div>
			<a href="{{ url()->previous() }}" class="btn btn-outline-danger"> &times; Discard</a>
		</div>
	</div>

	<div class="card mb-4">
          <div class="card-body">
			<form>
				<div class="mb-4">
					<label for="product_name" class="form-label">Biller Name</label>
					<input type="text" placeholder="Type here" class="form-control" id="product_name">
				</div>

				<div class="mb-4">
					<label class="form-label">Biller description</label>
					<textarea placeholder="Type here" class="form-control" rows="4"></textarea>
				</div>
					<div class="row gx-2">
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
				</div> <!-- row.// -->


				<div class="mb-4">
					<label class="form-label">Budget</label>
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
				</div>
				<button class="btn btn-primary">Submit item</button>

			</form>
          </div>
    </div> <!-- card end// -->


</section> <!-- content-main end// -->
