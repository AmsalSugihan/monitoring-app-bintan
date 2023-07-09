<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">
                <div class="sidenav-menu-heading"></div>
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <div class="nav-link-icon"><i data-feather="activity"></i></div>
                    Dashboards
                </a>
                <a class="nav-link" href="{{ route('daily') }}">
                    <div class="nav-link-icon"><i data-feather="bar-chart"></i></div>
                    Daily Monitoring
                </a>
                <a class="nav-link" href="{{ route('monthly') }}">
                    <div class="nav-link-icon"><i data-feather="trending-up"></i></div>
                    Monthly Monitoring
                </a>
            </div>
        </div>
        <div class="sidenav-footer">
            <div class="sidenav-footer-content">
                <div class="sidenav-footer-subtitle">Logged in as:</div>
                <div class="sidenav-footer-title">{{ auth()->user()->name }}</div>
            </div>
        </div>
    </nav>
</div>