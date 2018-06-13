<!-- ##### SIDEBAR LOGO ##### -->
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
         <a href="{{ url('platform') }}" class="nav-link {{ (\Request::route()->getName() == 'platform.pages.dashboard') ? 'active' : '' }}">
           <i class="icon ion-home"></i>
           <span>Dashboard</span>
         </a>
       </li>


       <!-- nav-item -->
       <li class="nav-item">
         <a href="#" class="nav-link with-sub @if((\Request::route()->getName() == 'platform.edit.profile')) active @endif">
           <i class="icon ion-person"></i>
           <span>User Information</span>
         </a>
         <ul class="nav-sub">
          <li class="nav-item"><a href="{{ route('platform.edit.profile') }}" class="nav-link @if((\Request::route()->getName() == 'platform.edit.profile')) active @endif">Edit Profile</a></li>
         </ul>
      </li>

      <!-- nav-item -->
      <li class="nav-item">
        <a href="#" class="nav-link with-sub">
          <i class="icon ion-card"></i>
          <span>Billing</span>
        </a>
        <ul class="nav-sub">
          <li class="nav-item"><a href="{{ url('platform/payment') }}" class="nav-link">New Client</a></li>
          <li class="nav-item"><a href="{{ url('platform/billing/invoices') }}" class="nav-link">Invoices</a></li>
        </ul>
     </li>



     </ul>
   </div><!-- kt-sideleft -->
