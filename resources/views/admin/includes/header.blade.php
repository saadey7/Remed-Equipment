 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
     <!-- Left navbar links -->
     <ul class="navbar-nav">
         <li class="nav-item">
             <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
         </li>
     </ul>

     <!-- SEARCH FORM -->
     <form class="form-inline ml-3">
         <div class="input-group input-group-sm">
             <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
             <div class="input-group-append">
                 <button class="btn btn-navbar" type="submit">
                     <i class="fas fa-search"></i>
                 </button>
             </div>
         </div>
     </form>

     <!-- Right navbar links -->

     <ul class="navbar-nav ml-auto">
         <!-- Messages Dropdown Menu -->
         <li class="nav-item dropdown">
             <div class="image" data-toggle="dropdown">
                 <img src="/images/logoo.jpg" class=" elevation-0" alt="User Image" width="100px"
                     height="50px">
             </div>
             <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                 <a class="dropdown-item" href="{{ route('admin.logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                 </a>
                 <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                     @csrf
                 </form>
             </div>
         </li>
     </ul>

 </nav>
 <!-- /.navbar -->