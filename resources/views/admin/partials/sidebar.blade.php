k<!-- ##### SIDEBAR LOGO ##### -->
<div class="kt-sideleft-header">
    <div class="kt-logo"><a href="#">SixInSix</a></div>
    <div id="ktDate" class="kt-date-today"></div>
    <div class="input-group kt-input-search">
        <input type="text" class="form-control" placeholder="Search...">
        <span class="input-group-btn mg-0">
         <button class="btn"><i class="fa fa-search"></i></button>
       </span>
    </div><!-- input-group -->
</div><!-- kt-sideleft-header -->

<!-- ##### SIDEBAR MENU ##### -->
<div class="kt-sideleft">
    <label class="kt-sidebar-label">Navigation</label>
    <ul class="nav kt-sideleft-menu">

        <!-- nav-item-->
        <li class="nav-item">
            <a href="{{ url('admin') }}" class="nav-link {{ (\Request::route()->getName() == 'admin.dashboard') ? 'active' : '' }}">
                <i class="icon ion-home"></i>
                <span>Dashboard</span>
            </a>
        </li>


        <!-- nav-item -->
        <li class="nav-item">
            <a href="#" class="nav-link with-sub @if((\Request::route()->getName() == 'admin.users')) active @endif">
                <i class="icon ion-person"></i>
                <span>User Information</span>
            </a>
            <ul class="nav-sub" >
                <li class="nav-item">
                    <a href="{{ route('admin.users') }}" class="nav-link {{ (\Request::route()->getName() == 'admin.users') ? 'active' : '' }}">All Users</a>
                </li>
            </ul>
        </li>
        <!-- nav-item -->
        <li class="nav-item">
            <a href="#" class="nav-link with-sub @if((\Request::route()->getName() == 'admin.blog') || (\Request::route()->getName() == 'admin.blog.create')) active @endif">
                <i class="icon ion-ios-gear-outline"></i>
                <span>Blog Management</span>
            </a>
            <ul class="nav-sub" >
                <li class="nav-item">
                    <a href="{{ route('admin.blog') }}" class="nav-link {{ (\Request::route()->getName() == 'admin.blog') ? 'active' : '' }}">All Blog</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.blog.create') }}" class="nav-link {{ (\Request::route()->getName() == 'admin.blog.create') ? 'active' : '' }}">Add Blog</a>
                </li>
            </ul>
        </li>
        <!-- nav-item -->
        <li class="nav-item">
            <a href="#" class="nav-link with-sub @if((\Request::route()->getName() == 'admin.payments.stripe')) active @endif">
                <i class="icon ion-card"></i>
                <span>Payment Settings</span>
            </a>
            <ul class="nav-sub" >
                <li class="nav-item">
                    <a href="{{ route('admin.payments.stripe') }}" class="nav-link {{ (\Request::route()->getName() == 'admin.payments.stripe') ? 'active' : '' }}">Stripe Plans</a>
                </li>
            </ul>
        </li>




    </ul>
</div><!-- kt-sideleft -->
