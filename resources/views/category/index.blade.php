<x-app-layout>
    <x-slot name="header" {{--:budget="$budget"--}}>
        <div class="d-flex justify-content-between ">
            <h2 class="h4 font-weight-bold">
                {{__('My Categories')}}
            </h2>
            <diV class="align-items-center">
                <h3>{{--$budget->period->format('d/m/Y')--}}</h3>
                <p><small class='text-muted'>From: {{--$budget->period_start->format('d/m/Y')}} to: {{$budget->period_end->format('d/m/Y')--}}</small></p>
            </div>

        </div>
    </x-slot>
    <section class="content-main">
        <div class="content-header">
            <h2 class="content-title">Categories</h2>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <form>
                            <div class="mb-4">
                                <label
                                    for="product_name"
                                    class="form-label"
                                    >Name</label
                                >
                                <input
                                    type="text"
                                    placeholder="Type here"
                                    class="form-control"
                                    id="product_name"
                                />
                            </div>
                            <div class="mb-4">
                                <label
                                    for="product_slug"
                                    class="form-label"
                                    >Slug</label
                                >
                                <input
                                    type="text"
                                    placeholder="Type here"
                                    class="form-control"
                                    id="product_slug"
                                />
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Parent</label>
                                <select class="form-select">
                                    <option>Clothes</option>
                                    <option>T-Shirts</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="form-label"
                                    >Description</label
                                >
                                <textarea
                                    placeholder="Type here"
                                    class="form-control"
                                    rows="4"
                                ></textarea>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary">
                                    Create category
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-8">
                        <x-category.category-table :categories="$categories"/>
                    </div>
                    <!-- .col// -->
                </div>
                <!-- .row // -->
            </div>
            <!-- card body .// -->
        </div>
        <!-- card .// -->
    </section>
</x-app-layout>
