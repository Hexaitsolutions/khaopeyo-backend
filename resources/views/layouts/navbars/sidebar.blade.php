<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo" style="width: 120px;height:120px">
                <img src="{{ asset('assets/img/logo.png') }}" style="margin-right: 0.5rem;"/>

              </span>
           
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-item {{ Request::is('dashboard*') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <img src="assets/svg/icons/smart-home.svg" class="sidebar-svg-icon"
                     style="    margin-right: 0.5rem;"/>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>

        <!-- Forms & Tables -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Orders</span>
        </li>

        <li class="menu-item {{ Request::is('orders*') ? 'active' : '' }}">
            <a href="{{ route('orders') }}" class="menu-link">
                <img src="assets/svg/icons/shopping-cart.svg" class="sidebar-svg-icon"
                     style="    margin-right: 0.5rem;"/>
                <div data-i18n="Orders">Orders</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="tables-basic.html" class="menu-link">
                <img src="assets/svg/icons/Live%20orders.svg" class="sidebar-svg-icon"
                     style="    margin-right: 0.5rem;"/>
                <div data-i18n="Live Orders">Live Orders</div>
            </a>
        </li>
        <!-- Forms & Tables -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Delivery Chain</span>
        </li>

        <li class="menu-item {{ Request::is('drivers*') ? 'active' : '' }}">
            <a href="{{ route('drivers') }}" class="menu-link">
                <img src="assets/svg/icons/Drivers.svg" class="sidebar-svg-icon"
                     style="    margin-right: 0.5rem;"/>
                <div data-i18n="Driver">Driver</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('clients*') ? 'active' : '' }}">
            <a href="{{ route('clients') }}" class="menu-link">
                <img src="assets/svg/icons/Clients.svg" class="sidebar-svg-icon"
                     style="    margin-right: 0.5rem;"/>
                <div data-i18n="Clients">Clients</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="tables-basic.html" class="menu-link">
                <img src="assets/svg/icons/reviews.svg" class="sidebar-svg-icon"
                     style="    margin-right: 0.5rem;"/>
                <div data-i18n="Reviews">Reviews</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="tables-basic.html" class="menu-link">
                <img src="assets/svg/icons/Restaurants.svg" class="sidebar-svg-icon"
                     style="    margin-right: 0.5rem;"/>
                <div data-i18n="Restaurants">Restaurants</div>
            </a>
        </li>

        <!-- Charts & Maps -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">FInanical Ecosyatem</span>
        </li>
        <li class="menu-item">
            <a href="maps-leaflet.html" class="menu-link">
                <img src="assets/svg/icons/Apps.svg" class="sidebar-svg-icon"
                     style="    margin-right: 0.5rem;"/>
                <div data-i18n="Apps">Apps</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <img src="assets/svg/icons/Finances.svg" class="sidebar-svg-icon"
                     style="    margin-right: 0.5rem;"/>
                <div data-i18n="Finance">Finance</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="charts-apex.html" class="menu-link">
                        <div data-i18n="Apex Charts">Apex Charts</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="charts-chartjs.html" class="menu-link">
                        <div data-i18n="ChartJS">ChartJS</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Charts & Maps -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Support Network</span>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <img src="assets/svg/icons/Resources.svg" class="sidebar-svg-icon"
                     style="    margin-right: 0.5rem;"/>
                <div data-i18n="Resource">Resource</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="charts-apex.html" class="menu-link">
                        <div data-i18n="Apex Charts">Apex Charts</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="charts-chartjs.html" class="menu-link">
                        <div data-i18n="ChartJS">ChartJS</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <img src="assets/svg/icons/System.svg" class="sidebar-svg-icon"
                     style="    margin-right: 0.5rem;"/>
                <div data-i18n="System">System</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="charts-apex.html" class="menu-link">
                        <div data-i18n="Apex Charts">Apex Charts</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="charts-chartjs.html" class="menu-link">
                        <div data-i18n="ChartJS">ChartJS</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <img src="assets/svg/icons/Support.svg" class="sidebar-svg-icon"
                     style="    margin-right: 0.5rem;"/>
                <div data-i18n="Support">Support</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="charts-apex.html" class="menu-link">
                        <div data-i18n="Apex Charts">Apex Charts</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="charts-chartjs.html" class="menu-link">
                        <div data-i18n="ChartJS">ChartJS</div>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</aside>
