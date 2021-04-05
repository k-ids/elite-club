 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{ config('app.name', 'Laravel') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="fas {{ Route::currentRouteName() == 'admin.dashboard' ? 'fa-angle-right' : 'fa-angle-left' }} right"></i>
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="{{ route('membeship-plan.index') }}" class="nav-link {{ Route::currentRouteName() == 'membeship-plan.index' ? 'active' : '' }} || {{ Route::currentRouteName() == 'membeship-plan.create' ? 'active' : '' }} || {{ Route::currentRouteName() == 'membeship-plan.edit' ? 'active' : '' }}">
              <i class="nav-icon fas fa-paper-plane"></i>
              <p>
                Membership Plans
                <i class="fas {{ Route::currentRouteName() == 'admin.dashboard' ? 'fa-angle-right' : 'fa-angle-left' }} right"></i>
              </p>
            </a>
          </li>
         
          <li class="nav-header">
             {{ trans('general.sidebar.label.template') }}
          </li>

          <li class="nav-item has-treeview {{ Route::currentRouteName() == 'email-templates.index' ? 'menu-open' : '' }} || {{ Route::currentRouteName() == 'email-templates.create' ? 'menu-open' : '' }} || {{ Route::currentRouteName() == 'email-templates.edit' ? 'menu-open' : '' }}">
            <a href="#" class="nav-link  {{ Route::currentRouteName() == 'email-templates.index' ? 'active' : '' }} || {{ Route::currentRouteName() == 'email-templates.create' ? 'active' : '' }} || {{ Route::currentRouteName() == 'email-templates.edit' ? 'active' : '' }}">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                {{ trans('general.sidebar.main_menu.template') }}
                <i class="fas {{ Route::currentRouteName() == 'email-templates.index' ? 'fa-angle-left' : 'fa-angle-right' }} || {{ Route::currentRouteName() == 'email-templates.create' ? 'fa-angle-left' : 'fa-angle-right' }} || {{ Route::currentRouteName() == 'email-templates.edit' ? 'fa-angle-left' : 'fa-angle-right' }} right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('email-templates.index') }}" class="nav-link {{ Route::currentRouteName() == 'email-templates.index'  ? 'active' : '' }} || {{ Route::currentRouteName() == 'email-templates.create'  ? 'active' : '' }} || {{ Route::currentRouteName() == 'email-templates.edit'  ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ trans('general.sidebar.sub_menu.template.email') }}</p>
                </a> 
              </li>
              <li class="nav-item">
                <a href="{{ route('sms-templates.index') }}" class="nav-link {{ Route::currentRouteName() == 'sms-templates.index'  ? 'active' : '' }} || {{ Route::currentRouteName() == 'sms-templates.create'  ? 'active' : '' }} || {{ Route::currentRouteName() == 'sms-templates.edit'  ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ trans('general.sidebar.sub_menu.template.sms') }}</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{ Route::currentRouteName() == 'pages.index' ? 'menu-open' : '' }} || {{ Route::currentRouteName() == 'twilio.index' ? 'menu-open' : '' }} ">
            <a href="#" class="nav-link {{ Route::currentRouteName() == 'captcha.index' ? 'active' : '' }} || {{ Route::currentRouteName() == 'twilio.index' ? 'active' : '' }}">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                {{ trans('general.sidebar.main_menu.settings') }}
                <i class="fas {{ Route::currentRouteName() == 'captcha.index' ? 'fa-angle-left' : 'fa-angle-right' }} right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('captcha.index') }}" class="nav-link {{ Route::currentRouteName() == 'captcha.index'  ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ trans('general.sidebar.sub_menu.settings.g_captcha') }}</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('twilio.index') }}" class="nav-link {{ Route::currentRouteName() == 'twilio.index'  ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ trans('general.sidebar.sub_menu.settings.twilio') }}</p>
                </a>
              </li>
            
            </ul>
          </li>

       
          <li class="nav-item has-treeview">
            <a href="{{ route('pages.index') }}" class="nav-link {{ Route::currentRouteName() == 'pages.index' ? 'active' : '' }} || {{ Route::currentRouteName() == 'pages.create' ? 'active' : '' }} || {{ Route::currentRouteName() == 'pages.edit' ? 'active' : '' }}">
              <i class="nav-icon fas fa-file"></i>
              <p>
                {{ trans('general.sidebar.main_menu.pages') }}
                <i class="fas {{ Route::currentRouteName() == 'pages.index' ? 'fa-angle-right' : 'fa-angle-left' }} || {{ Route::currentRouteName() == 'pages.create' ? 'fa-angle-right' : 'fa-angle-left' }} || {{ Route::currentRouteName() == 'pages.edit' ? 'fa-angle-right' : 'fa-angle-left' }} right"></i>
              </p>
            </a>
          </li>
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
