<!-- Sidebar  -->
<div class="iq-sidebar">
  <div class="iq-sidebar-logo d-flex justify-content-between">
     <a href="index.html">
     <div class="iq-light-logo">
        <img src="{{ asset('assets/images/logo.gif') }}" class="img-fluid" alt="">
     </div>
     <div class="iq-dark-logo">
        <img src="{{ asset('assets/images/logo-dark.gif') }}" class="img-fluid" alt="">
     </div>
     <span style="text-transform: uppercase;">V-MAIL</span>
     </a>
     <div class="iq-menu-bt-sidebar">
        <div class="iq-menu-bt align-self-center">
           <div class="wrapper-menu">
              <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
              <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
           </div>
        </div>
     </div>
  </div>
  <div id="sidebar-scrollbar">
     <nav class="iq-sidebar-menu">
        <ul id="iq-sidebar-toggle" class="iq-menu">
           {{-- <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Dashboard</span></li> --}}
           
           {{-- <li>
              <a href="#menu-design" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-menu-3-line"></i><span>Menu Design</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
              <ul id="menu-design" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                 <li><a href="horizontal-menu.html"><i class="ri-git-commit-line"></i>Horizontal menu</a></li>
                 <li><a href="horizontal-top-menu.html"><i class="ri-text-spacing"></i>Horizontal Top Menu</a></li>
                 <li><a href="two-sidebar.html"><i class="ri-indent-decrease"></i>Two Sidebar</a></li>
                 <li><a href="vertical-top-menu.html"><i class="ri-line-height"></i>Vertical block menu</a></li>
              </ul>
           </li> --}}

           <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>MAIN MENU</span></li>
           <li @if(request()->routeIs('dashboard')) class="active" @endif>
            <a href="{{ route('dashboard') }}" class="iq-waves-effect"><i class="ri-home-4-line"></i><span>Dashboard</span></a>
          </li>

           <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>USER MANAGEMENT</span></li>
           @if(Auth::user()->role_id == 1)
           <li @if(request()->routeIs('register')) class="active" @endif>
              <a href="{{ route('register') }}" class="iq-waves-effect"><i class="ri-user-add-line"></i><span>Add User</span></a>
           </li>
           <li @if(request()->routeIs('add_roles')) class="active" @endif>
              <a href="{{ route('add_roles') }}" class="iq-waves-effect"><i class="ri-settings-2-line"></i><span>Add Roles</span></a>
           </li>
           <li @if(request()->routeIs('showusersadmin')) class="active" @endif>
              <a href="{{ route('showusersadmin') }}" class="iq-waves-effect"><i class="ri-user-2-line"></i><span>User Detail</span></a>
           </li>
           @endif

           @if(Auth::user()->role_id == 2)
           <li @if(request()->routeIs('showusersmanager')) class="active" @endif>
              <a href="{{ route('showusersmanager') }}" class="iq-waves-effect"><i class="ri-user-2-line"></i><span>User Detail</span></a>
           </li>
           @endif

           @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
           <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>CAMPAIGN MANAGEMENT</span></li>

           <li @if(request()->routeIs('addCampaign')) class="active" @endif>
              <a href="{{ route('addCampaign') }}" class="iq-waves-effect"><i class="ri-folder-add-line"></i><span>Add Campaigns</span></a>
           </li>
           <li @if(request()->routeIs('showCampaign')) class="active" @endif>
              <a href="{{ route('showCampaign') }}" class="iq-waves-effect"><i class="ri-folder-chart-line"></i><span>Campaign Details</span></a>
           </li>
           <li>
              <a href="#" class="iq-waves-effect"><i class="ri-folder-chart-2-line"></i><span>Campaign Data Details</span></a>
           </li>
           <li>
              <a href="#" class="iq-waves-effect"><i class="ri-folder-transfer-line"></i><span>Campaign Data Import</span></a>
           </li>
           <li>
              <a href="#" class="iq-waves-effect"><i class="ri-folder-user-line"></i><span>Download Unsubscribed</span></a>
           </li>
           @endif
           
        </ul>
     </nav>
     <div class="p-3"></div>
  </div>
</div>