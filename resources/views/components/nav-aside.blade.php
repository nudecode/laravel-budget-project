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
          <a class="menu-link" href="{{route('index.budget')}}"> <i class="icon material-icons md-shopping_bag"></i>
            <span class="text">Budgets</span>
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
          <a class="menu-link" href="{{route('index.billers')}}"> <i class="icon material-icons md-shopping_cart"></i>
            <span class="text">Billers</span>
          </a>
          <div class="submenu">
            <a href="page-orders-1.html">Order list 1</a>
            <a href="page-orders-2.html">Order list 2</a>
            <a href="page-orders-detail.html">Order detail</a>
          </div>
        </li>
        <li class="menu-item has-submenu">
          <a class="menu-link" href="{{route('index.category')}}"> <i class="icon material-icons md-store"></i>
            <span class="text">Categories</span>
          </a>
          <div class="submenu">
            <a href="page-sellers-cards.html">Sellers cards</a>
            <a href="page-sellers-list.html">Sellers list</a>
            <a href="page-seller-detail.html">Seller profile</a>
          </div>
        </li>
      </ul>
      <br>
      <br>
    </nav>
    </aside>
