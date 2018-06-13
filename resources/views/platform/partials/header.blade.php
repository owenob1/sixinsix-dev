<!-- ##### HEAD PANEL ##### -->
<div class="kt-headpanel">
  <div class="kt-headpanel-left">
    <a id="naviconMenu" href="" class="kt-navicon d-none d-lg-flex"><i class="icon ion-navicon-round"></i></a>
    <a id="naviconMenuMobile" href="" class="kt-navicon d-lg-none"><i class="icon ion-navicon-round"></i></a>
  </div><!-- kt-headpanel-left -->

  <div class="kt-headpanel-right">
    <div class="dropdown dropdown-notification">
      <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
        <i class="icon ion-ios-bell-outline tx-24"></i>
        <!-- start: if statement -->
        <span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span>
        <!-- end: if statement -->
      </a>
      <div class="dropdown-menu wd-300 pd-0-force">
        <div class="dropdown-menu-header">
          <label>Notifications</label>
          <a href="">Mark All as Read</a>
        </div><!-- d-flex -->

        <div class="media-list">
          <!-- loop starts here -->
          <a href="" class="media-list-link read">
            <div class="media pd-x-20 pd-y-15">
              <img src="../img/img8.jpg" class="wd-40 rounded-circle" alt="">
              <div class="media-body">
                <p class="tx-13 mg-b-0"><strong class="tx-medium">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                <span class="tx-12">October 03, 2017 8:45am</span>
              </div>
            </div><!-- media -->
          </a>
          <!-- loop ends here -->
          <a href="" class="media-list-link read">
            <div class="media pd-x-20 pd-y-15">
              <img src="../platform_assets/img/img9.jpg" class="wd-40 rounded-circle" alt="">
              <div class="media-body">
                <p class="tx-13 mg-b-0"><strong class="tx-medium">Mellisa Brown</strong> appreciated your work <strong class="tx-medium">The Social Network</strong></p>
                <span class="tx-12">October 02, 2017 12:44am</span>
              </div>
            </div><!-- media -->
          </a>
          <a href="" class="media-list-link read">
            <div class="media pd-x-20 pd-y-15">
              <img src="../platform_assets/img/img10.jpg" class="wd-40 rounded-circle" alt="">
              <div class="media-body">
                <p class="tx-13 mg-b-0">20+ new items added are for sale in your <strong class="tx-medium">Sale Group</strong></p>
                <span class="tx-12">October 01, 2017 10:20pm</span>
              </div>
            </div><!-- media -->
          </a>
          <a href="" class="media-list-link read">
            <div class="media pd-x-20 pd-y-15">
              <img src="../platform_assets/img/img5.jpg" class="wd-40 rounded-circle" alt="">
              <div class="media-body">
                <p class="tx-13 mg-b-0"><strong class="tx-medium">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium">Ronnie Mara</strong></p>
                <span class="tx-12">October 01, 2017 6:08pm</span>
              </div>
            </div><!-- media -->
          </a>
          <div class="media-list-footer">
            <a href="" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Notifications</a>
          </div>
        </div><!-- media-list -->
      </div><!-- dropdown-menu -->
    </div><!-- dropdown -->
    @auth
    <div class="dropdown dropdown-profile">
      <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
        <img  @if(Auth::user()->profile->avatar == '') src="{{ asset('platform_assets/img/img3.jpg') }}"  @else src="{{ Auth::user()->profile->avatar }}" @endif class="wd-32 rounded-circle" alt="">
        <span class="logged-name"><span class="hidden-xs-down">{{ Auth::user()->email }}</span> <i class="fa fa-angle-down mg-l-3"></i></span>
      </a>
      <div class="dropdown-menu wd-200">
        <ul class="list-unstyled user-profile-nav">
          @if(Auth::user()->isRole('admin'))
            <li><a href="{{ route('admin.dashboard') }}"><i class="icon ion-home"></i> Admin</a></li>
          @endif
          <li><a href="{{ route('platform.edit.profile') }}"><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
          <li><a href="{{ route('platform.settings') }}"><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
          <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="icon ion-power"></i> {{ __('Logout') }}</a></li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>

          </a>
        </ul>
      </div><!-- dropdown-menu -->
    </div><!-- dropdown -->
    @endauth
  </div><!-- kt-headpanel-right -->
</div><!-- kt-headpanel -->
<div class="kt-breadcrumb">
  <nav class="breadcrumb">
    <a class="breadcrumb-item" href="index.html">SixInSix</a>
    <span class="breadcrumb-item active">@yield('title')</span>
  </nav>
</div><!-- kt-breadcrumb -->
