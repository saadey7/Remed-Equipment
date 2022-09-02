<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="./" class="brand-link">
    <img src="/images/logoo.jpg" alt="AdminLTE Logo" class="brand-image elevation-0"
      style="opacity: .8">
    <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="/images/logoo.jpg" class=" elevation-0" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{Auth::guard('admin')->user()->name}}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link active">
            <i class="fas fa-home nav-icon"></i>
            <p>
              Home
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item ">
              <a href="{{route('admin.product')}}" class="nav-link {{ (request()->is('admin/addProduct')) ? 'active' : '' }}">
                <i class="fab fa-product-hunt nav-icon"></i>
                <p>Add/View Product</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item ">
              <a href="{{url('admin/quote')}}" class="nav-link {{ (request()->is('admin/quote')) ? 'active' : '' }}  {{ (request()->is('admin/quote_detail')) ? 'active' : '' }}">
                <i class="fas fa-quote-left nav-icon"></i>
                <p>Customer Quotes</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
</aside>