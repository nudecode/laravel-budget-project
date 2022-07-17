<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
<<<<<<< HEAD

        <!-- Fontawesome -->
        <script
            src="https://kit.fontawesome.com/1e6705f353.js"
            crossorigin="anonymous"
        ></script>

=======
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> --}}
        <link rel="stylesheet" href="{{ mix('css/bootstrap.css') }}">
>>>>>>> main
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/ui.css') }}">
        <link rel="stylesheet" href="{{ mix('css/responsive.css') }}">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
<<<<<<< HEAD
        <link rel="stylesheet" href="{{ mix('css/style.css') }}">
=======
        {{-- <link rel="stylesheet" href="{{ mix('css/style.css') }}"> --}}
>>>>>>> main

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/jquery.js') }}" defer></script>
        <script src="{{ mix('js/bootstrap.bundle.min.js') }}" defer></script>
        {{-- <script src="{{ mix('js/bootstrap.min.js') }}" defer></script> --}}
        <script src="{{ mix('js/script.js') }}" defer></script>
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="{{ mix('js/main.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased bg-light">
        {{-- <x-jet-banner />
        @livewire('navigation-menu') --}}

        <!-- Page Heading -->
        {{-- <header class="d-flex py-3 bg-white shadow-sm border-bottom">
            <div class="container">
                {{ $header }}
            </div>
        </header> --}}

        <!-- Page Content -->
        <main class="main-wrap">
            <header class="main-header navbar">
                <div class="col-search">
                    <form class="searchform">
                        <div class="input-group">
                          <input list="search_terms" type="text" class="form-control" placeholder="Search term">
                          <button class="btn btn-light bg" type="button"> <i class="material-icons md-search"></i> </button>
                        </div>
                        <datalist id="search_terms">
                          <option value="Products">
                          <option value="New orders">
                          <option value="Apple iphone">
                          <option value="Ahmed Hassan">
                        </datalist>
                    </form>
                </div>
                <div class="col-nav">
             <button class="btn btn-icon btn-mobile me-auto" data-trigger="#offcanvas_aside"> <i class="md-28 material-icons md-menu"></i> </button>
             <ul class="nav">
              <li class="nav-item">
                  <a class="nav-link btn-icon" onclick="darkmode(this)" title="Dark mode" href="#"> <i class="material-icons md-nights_stay"></i> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-icon" href="#"> <i class="material-icons md-notifications_active"></i> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> English </a>
              </li>
              <li class="dropdown nav-item">
                <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#"> <img class="img-xs rounded-circle" src="images/people/avatar1.jpg" alt="User"></a>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="#">My profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <a class="dropdown-item text-danger" href="#">Exit</a>
                </div>
              </li>
            </ul>
          </div>
            </header>

        <aside class="navbar-aside" id="offcanvas_aside">
            <div class="aside-top">
              <a href="page-index-1.html" class="brand-wrap">
                <img src="/assets/img/Simple Budget-logo/vector/default.svg" height="46" class="logo" alt="Simple Budget">
              </a>
              <div>
                <button class="btn btn-icon btn-aside-minimize"> <i class="text-muted material-icons md-menu_open"></i> </button>
              </div>
            </div> <!-- aside-top.// -->

            <nav>
              <ul class="menu-aside">
                <li class="menu-item active">
                  <a class="menu-link" href="page-index-1.html"> <i class="icon material-icons md-home"></i>
                    <span class="text">Dashboard</span>
                  </a>
                </li>
                <li class="menu-item has-submenu">
                  <a class="menu-link" href="page-products-list.html"> <i class="icon material-icons md-shopping_bag"></i>
                    <span class="text">Products</span>
                  </a>
                  <div class="submenu">
                    <a href="page-products-list.html">Product list view</a>
                    <a href="page-products-table.html">Product table view</a>
                    <a href="page-products-grid.html">Product grid</a>
                    <a href="page-products-grid-2.html">Product grid 2</a>
                    <a href="page-categories.html">Categories</a>
                  </div>
                </li>
                <li class="menu-item has-submenu">
                  <a class="menu-link" href="page-orders-1.html"> <i class="icon material-icons md-shopping_cart"></i>
                    <span class="text">Orders</span>
                  </a>
                  <div class="submenu">
                    <a href="page-orders-1.html">Order list 1</a>
                    <a href="page-orders-2.html">Order list 2</a>
                    <a href="page-orders-detail.html">Order detail</a>
                  </div>
                </li>
                <li class="menu-item has-submenu">
                  <a class="menu-link" href="page-sellers-cards.html"> <i class="icon material-icons md-store"></i>
                    <span class="text">Sellers</span>
                  </a>
                  <div class="submenu">
                    <a href="page-sellers-cards.html">Sellers cards</a>
                    <a href="page-sellers-list.html">Sellers list</a>
                    <a href="page-seller-detail.html">Seller profile</a>
                  </div>
                </li>
                <li class="menu-item has-submenu">
                  <a class="menu-link" href="page-form-product-1.html"> <i class="icon material-icons md-add_box"></i>
                    <span class="text">Add product</span>
                  </a>
                  <div class="submenu">
                    <a href="page-form-product-1.html">Add product 1</a>
                    <a href="page-form-product-2.html">Add product 2</a>
                    <a href="page-form-product-3.html">Add product 3</a>
                    <a href="page-form-product-4.html">Add product 4</a>
                  </div>
                </li>
                <li class="menu-item has-submenu">
                  <a class="menu-link" href="page-transactions-A.html"> <i class="icon material-icons md-monetization_on"></i>
                    <span class="text">Transactions</span>
                  </a>
                  <div class="submenu">
                    <a href="page-transactions-A.html">Transaction 1</a>
                    <a href="page-transactions-B.html">Transaction 2</a>
                  </div>
                </li>
                <li class="menu-item has-submenu">
                  <a class="menu-link" href="#"> <i class="icon material-icons md-person"></i>
                    <span class="text">Account</span>
                  </a>
                  <div class="submenu">
                    <a href="page-account-login.html">User login</a>
                    <a href="page-account-register.html">User registration</a>
                    <a href="page-error-404.html">Error 404</a>
                  </div>
                </li>
                <li class="menu-item">
                  <a class="menu-link" href="page-reviews.html"> <i class="icon material-icons md-comment"></i>
                    <span class="text">Reviews</span>
                  </a>
                </li>
                <li class="menu-item">
                  <a class="menu-link" href="page-brands.html"> <i class="icon material-icons md-stars"></i>
                    <span class="text">Brands</span> </a>
                </li>
                <li class="menu-item">
                  <a class="menu-link" disabled href="#"> <i class="icon material-icons md-pie_chart"></i>
                    <span class="text">Statistics</span>
                  </a>
                </li>
              </ul>
              <hr>
              <ul class="menu-aside">
                <li class="menu-item has-submenu">
                  <a class="menu-link" href="#"> <i class="icon material-icons md-settings"></i>
                    <span class="text">Settings</span>
                  </a>
                  <div class="submenu">
                    <a href="page-settings-1.html">Setting sample 1</a>
                    <a href="page-settings-2.html">Setting sample 2</a>
                  </div>
                </li>
                <li class="menu-item">
                  <a class="menu-link" href="page-0-blank.html"> <i class="icon material-icons md-local_offer"></i>
                    <span class="text"> Starter page </span>
                  </a>
                </li>
              </ul>
              <br>
              <br>
            </nav>
            </aside>

            {{ $slot }}
        </main>

        @stack('modals')

        @livewireScripts

        @stack('scripts')
    </body>
</html>
