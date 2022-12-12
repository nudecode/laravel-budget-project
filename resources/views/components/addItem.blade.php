<section class="content-main" style="max-width: 720px">

	<div class="content-header">
		<h2 class="content-title">Add Transaction </h2>

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
					<label class="form-label">Images</label>
					<input class="form-control" type="file">
				</div> --}}

				{{-- <div class="mb-4">
					<label for="product_name" class="form-label">Tags</label>
					<input type="text" class="form-control">
				</div> --}}

				<div class="row gx-2">
					<div class="col-sm-6 mb-3">
					    <label class="form-label">Biller</label>
					    <select class="form-select">
                            @foreach ($billers as $biller)
					    	<option> $biller->name </option>
                            @endforeach
					    	{{-- <option> Home items </option>
					    	<option> Electronics </option>
					    	<option> Smartphones </option>
					    	<option> Sport items </option>
					    	<option> Baby and Tous </option> --}}
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
                <label class="form-check mb-4">
                    <input hidden class="form-check-input"
                        name="is_paid"
                        type="checkbox"
                        value="0">
                    <input class="form-check-input"
                        name="is_paid"
                        type="checkbox"
                        value="1">
                    <span class="form-check-label">Paid </span>
                  </label>

				<button type="submit" value="submit" class="btn btn-success">Add item</button>

			</form>
          </div>
    </div> <!-- card end// -->

    <div class="modal modal-signin position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalSignin">
        <div class="modal-dialog" role="document">
          <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
              <!-- <h5 class="modal-title">Modal title</h5> -->
              <h2 class="fw-bold mb-0">Add new budget transaction</h2>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-5 pt-0">
              <form class="">
                <div class="form-floating mb-3">
                  <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com">
                  <small class="text-muted">Positive for income negitive for expense</small>
                  <label for="floatingInput">Item</label>
                </div>
                <div class="list-group list-group-radio d-grid gap-2 border-0 w-auto">
                    <div class="position-relative">
                      <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="listGroupRadioGrid" id="listGroupRadioGrid1" value="" checked>
                      <label class="list-group-item py-3 pe-5" for="listGroupRadioGrid1">
                        <strong class="fw-semibold">Income</strong>
                        <span class="d-block small opacity-75">With support text underneath to add more detail</span>
                      </label>
                    </div>

                    <div class="position-relative">
                      <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="listGroupRadioGrid" id="listGroupRadioGrid2" value="">
                      <label class="list-group-item py-3 pe-5" for="listGroupRadioGrid2">
                        <strong class="fw-semibold">Expense</strong>
                        <span class="d-block small opacity-75">Some other text goes here</span>
                      </label>
                    </div>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Amount</label>
                </div>
                <label class="form-check mb-4">
                    <input hidden class="form-check-input"
                        name="is_paid"
                        type="checkbox"
                        value="0">
                    <input class="form-check-input"
                        name="is_paid"
                        type="checkbox"
                        value="1">
                    <span class="form-check-label">Paid </span>
                  </label>
                <button class="w-100 mb-2 btn btn-lg rounded-3 btn-success" type="submit">Add Item</button>

              </form>
            </div>
          </div>
        </div>
      </div>


</section> <!-- content-main end// -->


