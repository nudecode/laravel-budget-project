<h3>
    <span><i class="far fa-edit"></i></span> Add New Transaction
</h3>
<form id="transaction-form" action="{{ route('store.transaction') }}" method="POST">
    @csrf
    <div class="form-control">
        <label for="text">Item</label>
        <input type="text" id="name" name="name" placeholder="Enter item..." />
    </div>
    <div class="form-control">
        <label for="amount"
            >Amount <br />
            (negative - expense, positive - income)</label
        >
        <input
            type="number"
            id="amount"
            name="amount"
            placeholder="Enter amount..."
        />
    </div>
    <button type="submit" value="submit" class="btn btn-primary">Add Item</button>
</form>
