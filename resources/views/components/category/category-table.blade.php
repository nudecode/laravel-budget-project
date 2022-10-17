<table class="table table-hover">
    <thead>
        <tr>
            <th>
                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                    />
                </div>
            </th>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Slug</th>
            <th>Order</th>
            <th class="text-end">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $categories as $category)
            <tr>
                <td>
                    <div class="form-check">
                        <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                        />
                    </div>
                </td>
                <td>{{$category->id}}</td>
                <td><b>{{$category->name}}</b></td>
                <td>{{$category->name}}</td>
                <td>/{{$category->name}}</td>
                <td>{{$category->id}}</td>
                <td class="text-end">
                    <div class="dropdown">
                        <a
                            href="#"
                            data-bs-toggle="dropdown"
                            class="btn btn-light"
                        >
                            <i
                                class="material-icons md-more_horiz"
                            ></i>
                        </a>
                        <div class="dropdown-menu">
                            <a
                                class="dropdown-item"
                                href="#"
                                >View detail</a
                            >
                            <a
                                class="dropdown-item"
                                href="#"
                                >Edit info</a
                            >
                            <a
                                class="dropdown-item text-danger"
                                href="#"
                                >Delete</a
                            >
                        </div>
                    </div>
                    <!-- dropdown //end -->
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
