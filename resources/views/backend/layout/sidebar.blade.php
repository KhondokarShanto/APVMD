<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="{{ url('/panel') }}" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="{{ url('/admin/product') }}"><i class="fa fa-table fa-fw"></i> Products </a>
            </li>
            <li>
                <a href="{{ url('/admin/task') }}"><i class="fa fa-table fa-fw"></i> Task </a>
            </li>

            <li>
                <a href="{{ url('/admin/distributor') }}"><i class="fa fa-table fa-fw"></i> Distributor</a>
            </li>

            <li>
                <a href="{{ url('/admin/supplier') }}"><i class="fa fa-table fa-fw"></i> Supplier</a>
            </li>

            <li>
                <a href="{{ url('/admin/merchandiser') }}"><i class="fa fa-table fa-fw"></i> Merchandiser</a>
            </li>

            <li>
                <a href="{{ url('/admin/requisition') }}"><i class="fa fa-table fa-fw"></i> Requisition</a>
            </li>

            <li>
                <a href="{{ url('/admin/area') }}"><i class="fa fa-table fa-fw"></i> Area</a>
            </li>
            <li>
                <a href="{{ url('/admin/order') }}"><i class="fa fa-edit fa-fw"></i> Order</a>
            </li>


            <!-- roles -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('role_index') }}"><i class="fas fa-fw fa-folder"></i><span>User Roles</span></a>
      </li>
      <!-- roles end -->
      <!-- Users -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('user_index') }}"><i class="fas fa-fw fa-folder"></i><span>User</span></a>
      </li>
      <!-- Users end -->

        </ul>
    </div>
</div>
