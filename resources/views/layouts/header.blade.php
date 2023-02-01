<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
	  
		@if(Auth::guard('admin')->check())
		<a class="navbar-brand brand-logo mr-5" href="{{url('admin/dashboard')}}"><img src="{{ asset('admins/images/splyint-logo.png')}}" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="{{url('admin/dashboard')}}"><img src="{{ asset('admins/images/splyint-logo.png')}}" alt="logo"/></a>
		@endif
		@if(Auth::guard('carrier')->check())
        <a class="navbar-brand brand-logo mr-5" href="{{url('carrier/dashboard')}}"><img src="{{ asset('admins/images/splyint-logo.png')}}" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="{{url('carrier/dashboard')}}"><img src="{{ asset('admins/images/splyint-logo.png')}}" alt="logo"/></a>
		@endif
		@if(Auth::user())
        <a class="navbar-brand brand-logo mr-5" href="{{url('user/dashboard')}}"><img src="{{ asset('admins/images/splyint-logo.png')}}" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="{{url('user/dashboard')}}"><img src="{{ asset('admins/images/splyint-logo.png')}}" alt="logo"/></a>
		@endif
		
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
		<!--
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
		-->
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
               @if(Auth::guard('admin')->check())<i class="icon-bell mx-0">{{ Helper::collectionNotification() }} </i> @endif
               @if(Auth::guard('carrier')->check())<i class="icon-bell mx-0">{{ Helper::assignNotification() }} </i> @endif
              <!-- <span class="count"></span> -->
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              
			  @if(Auth::guard('admin')->check())
			  <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
			  <a class="dropdown-item preview-item" href="{{route('quote.notifications')}}">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-email mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">All Notification</h6>
                </div>
              </a>
			  @endif
			  
			  
			  @if(Auth::guard('carrier')->check())
			  <p class="mb-0 font-weight-normal float-left dropdown-header"> Quote Notification</p>
			  <a class="dropdown-item preview-item" href="{{route('quote.carrier.notifications')}}">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-email mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">All Quotes</h6>
                </div>
              </a>
			  @endif
			  
			  
            </div>
			
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
			
			@if(Auth::guard('admin')->check())
				@if(!empty(Auth::guard('admin')->user()->pic))
				<img src="{{asset('/public/users_pic/')}}/{{Auth::guard('admin')->user()->pic}}" alt="profile"/>
				@else
				<img src="{{asset('/public/users_pic/face28.jpg')}}" alt="profile"/>
				@endif
			
			@endif
			
			@if(Auth::guard('carrier')->check())
				@if(!empty(Auth::guard('carrier')->user()->pic))
               <img src="{{asset('/public/users_pic/')}}/{{Auth::guard('carrier')->user()->pic}}" alt="profile"/>
			   @else
				<img src="{{asset('/public/users_pic/face28.jpg')}}" alt="profile"/>
				@endif
			@endif
			
			 @if(Auth::user())
				@if(!empty(Auth::user()->pic))
               <img src="{{asset('/public/users_pic/')}}/{{ Auth::user()->pic}}" alt="profile"/>
			    @else
				<img src="{{asset('/public/users_pic/face28.jpg')}}" alt="profile"/>
				@endif
			@endif
			  
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
			  
			  @if(Auth::guard('carrier')->check())
              <a class="dropdown-item" href="{{route('carrier.logout')}}">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
			  @endif
			  
			  @if(Auth::guard('admin')->check())
              <a class="dropdown-item" href="{{route('admin.logout')}}">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
			  @endif
			  
			  
			  @if(Auth::user())
              <a class="dropdown-item" href="{{route('user.logout')}}">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
			  @endif
			  
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
