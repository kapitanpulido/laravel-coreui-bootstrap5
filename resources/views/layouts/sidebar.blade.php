<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
  <div class="sidebar-brand d-none d-md-flex">
    <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
      <use xlink:href="{{ asset('icons/brand.svg#full') }}"></use>
    </svg>
    <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
      <use xlink:href="{{ asset('icons/brand.svg#signet') }}"></use>
    </svg>
  </div>
		
	<ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('home') }}">
        <svg class="nav-icon">
          <use xlink:href="{{ asset('icons/coreui.svg#cil-speedometer') }}"></use>
        </svg>
        {{ __('Dashboard') }}
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('users.index') }}">
        <svg class="nav-icon">
           <use xlink:href="{{ asset('icons/coreui.svg#cil-user') }}"></use>
        </svg>
        {{ __('Users') }}
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('about') }}">
        <svg class="nav-icon">
          <use xlink:href="{{ asset('icons/coreui.svg#cil-speedometer') }}"></use>
        </svg>
        {{ __('About us') }}
      </a>
    </li>

    <li class="nav-group" aria-expanded="false">
      <a class="nav-link nav-group-toggle" href="#">
        <svg class="nav-icon">
          <use xlink:href="{{ asset('icons/coreui.svg#cil-star') }}"></use>
        </svg>
        Two-level menu
      </a>
      <ul class="nav-group-items" style="height: 0px;">
			<li class="nav-item">
          <a class="nav-link " href="#" target="_top">
            <svg class="nav-icon ps-5">
              <use xlink:href="{{ asset('icons/coreui.svg#cil-bug') }}"></use>
            </svg>
            &nbsp;&nbsp;&nbsp;&nbsp;Child menu 1
          </a>
        </li><li class="nav-item">
          <a class="nav-link " href="#" target="_top">
            <svg class="nav-icon ps-5">
              <use xlink:href="{{ asset('icons/coreui.svg#cil-bug') }}"></use>
            </svg> 
            &nbsp;&nbsp;&nbsp;&nbsp;Child menu 2
          </a>
        </li>
      </ul>
    </li>
	</ul>
	<button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>