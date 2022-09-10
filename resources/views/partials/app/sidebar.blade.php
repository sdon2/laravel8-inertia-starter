<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">
                General
            </li>
            <li class="nav-item">
                <a class="nav-link {{ active_class('dashboard') }}" href="{{ route('dashboard') }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    Dashboard
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="nav-icon fas fa-file-invoice-dollar"></i>
                    Invoice
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="nav-icon fas fa-money-bill-wave"></i>
                    Payments
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="nav-icon fas fa-receipt"></i>
                    Receipts
                </a>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle " href="#">
                    <i class="nav-icon far fa-file"></i>
                    Reports
                </a>

                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link {{ active_class('reports.payments-outstanding.*') }}"
                            href="#">
                            Payments Outstanding Report
                        </a>
                    </li>
                </ul>
            </li>

            @role('administrator')
                <li class="nav-title">
                    Administration
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ active_class('user-management.*') }}"
                        href="#">
                        <i class="nav-icon fas fa-users"></i>
                        User Management
                    </a>
                </li>
            @endrole
        </ul>
    </nav>

    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
