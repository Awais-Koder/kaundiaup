<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">
                <!-- Sidenav Menu Heading (Account)-->
                <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                <div class="sidenav-menu-heading d-sm-none">Account</div>
                <!-- Sidenav Link (Alerts)-->
                <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                <a class="nav-link d-sm-none" href="#!">
                    <div class="nav-link-icon"><i data-feather="bell"></i></div>
                    Alerts
                    <span class="badge bg-warning-soft text-warning ms-auto">4 New!</span>
                </a>
                <!-- Sidenav Link (Messages)-->
                <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                <a class="nav-link d-sm-none" href="#!">
                    <div class="nav-link-icon"><i data-feather="mail"></i></div>
                    Messages
                    <span class="badge bg-success-soft text-success ms-auto">2 New!</span>
                </a>


                <div class="sidenav-menu-heading">Admin</div>
                <a class="nav-link" href="{{route('dashboard')}}">
                    <div class="nav-link-icon"><i data-feather="filter"></i></div>
                    Dashboard
                </a>


                <div class="sidenav-menu-heading">App</div>

                <!-- Civic Management -->
                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseCivicManagement" aria-expanded="false" aria-controls="collapseCivicManagement">
                    <div class="nav-link-icon"><i data-feather="users"></i></div>
                    {{ __('menu.civic_management') }}
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseCivicManagement" data-bs-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('civic.new_applicants') }}">{{ __('menu.new_applicants') }}</a>
                        <a class="nav-link" href="{{ route('civic.certificate_recipients') }}">{{ __('menu.certificate_recipients') }}</a>
                    </nav>
                </div>

                <!-- Trade License Management -->
                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseTradeLicenseManagement" aria-expanded="false" aria-controls="collapseTradeLicenseManagement">
                    <div class="nav-link-icon"><i data-feather="briefcase"></i></div>
                    {{ __('menu.trade_license_management') }}
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseTradeLicenseManagement" data-bs-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('trade.new_applicants') }}">{{ __('menu.new_applicants') }}</a>
                        <a class="nav-link" href="{{ route('trade.certificate_recipients') }}">{{ __('menu.certificate_recipients') }}</a>
                        <a class="nav-link" href="{{ route('trade.renewal_applicants') }}">{{ __('menu.renewal_applicants') }}</a>
                        <a class="nav-link" href="{{ route('trade.expired_trade_license') }}">{{ __('menu.expired_trade_license') }}</a>
                    </nav>
                </div>

                <!-- Heir Management -->
                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseHeirManagement" aria-expanded="false" aria-controls="collapseHeirManagement">
                    <div class="nav-link-icon"><i data-feather="home"></i></div>
                    {{ __('menu.heir_management') }}
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseHeirManagement" data-bs-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('heir.new_applicants') }}">{{ __('menu.new_applicants') }}</a>
                        <a class="nav-link" href="{{ route('heir.certificate_recipients') }}">{{ __('menu.certificate_recipients') }}</a>
                        <a class="nav-link" href="{{ route('heir.expired_heir') }}">{{ __('menu.expired_heir') }}</a>
                    </nav>
                </div>

                <!-- Family Management -->
                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseFamilyManagement" aria-expanded="false" aria-controls="collapseFamilyManagement">
                    <div class="nav-link-icon"><i data-feather="users"></i></div>
                    {{ __('menu.family_management') }}
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseFamilyManagement" data-bs-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('family.new_applicants') }}">{{ __('menu.new_applicants') }}</a>
                        <a class="nav-link" href="{{ route('family.certificate_recipients') }}">{{ __('menu.certificate_recipients') }}</a>
                    </nav>
                </div>

                <a class="nav-link" href="{{ route('union-setup.index') }}">
                    <div class="nav-link-icon"><i data-feather="settings"></i></div>
                    {{ __('menu.union_setup') }}
                </a>

            </div>


        </div>
        <!-- Sidenav Footer-->
        <div class="sidenav-footer">
            <div class="sidenav-footer-content">
                <div class="sidenav-footer-subtitle">Logged in as:</div>
                <div class="sidenav-footer-title">{{ auth()->user()->name }}</div>
            </div>
        </div>
    </nav>
</div>
