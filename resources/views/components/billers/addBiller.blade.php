<section class="content-main" style="max-width: 720px">

	<div class="content-header">
		<h2 class="content-title">Create biller </h2>
		<div>
			<a href="{{ url()->previous() }}" class="btn btn-outline-danger"> &times; Discard</a>
		</div>
	</div>

	<div class="card mb-4">
          <div class="card-body">
			<form action="{{ route('store.biller') }}" method="POST">
                @csrf
				<div class="mb-4">
					<label for="product_name" class="form-label">Biller Name</label>
					<input name="name" id="name" type="text" placeholder="Type here" class="form-control">
				</div>
					<div class="row gx-2">
					<div class="col-sm-6 mb-3">
					    <label class="form-label">Category</label>
					    <select name="category" id="category" class="form-select">
					    	<option value="">-- Select One -- </option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}" {{ (isset($category->id) || old('id'))? "selected":"" }}>{{$category->name}}</option>
                            @endforeach
					    </select>
				  	</div>
					  {{-- <div class="col-sm-6 mb-3">
					    <label class="form-label">Sub-category</label>
					    <select class="form-select">
					    	<option> Mortgauge </option>
					    	<option> Electricity </option>
					    	<option> Gas </option>
					    	<option> Petrol </option>
					    </select>
					  </div> --}}
				</div> <!-- row.// -->
				{{-- <div class="mb-4">
					<label class="form-label">Budget</label>
					<div class="row gx-2">
						<div class="col-4">
						    <input placeholder="Type" type="text" class="form-control">
					  	</div>
					</div> <!-- row.// -->
				</div> --}}
				<button type="submit "class="btn btn-primary">Add Biller</button>

			</form>
          </div>
    </div> <!-- card end// -->


</section> <!-- content-main end// -->
