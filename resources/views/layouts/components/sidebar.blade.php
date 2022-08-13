<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/borrower') }}"><i class="fa fa-fw fa-user"></i>Borrower</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/doner') }}"><i class="fa fa-fw fa-rocket"></i>Doner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/loans') }}"><i class="fa fa-fw fa-file"></i>Loans</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/guarantor') }}"><i class="fa fa-fw fa-columns"></i>Guarantor</a>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/recovery') }}"><i class="fa fa-fw fa-university"></i>Recovery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/expence') }}"><i class="fa fa-fw fa-home"></i>Expences</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/payment') }}"><i class="fa fa-fw fa-table"></i>Donations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/monthly_statement') }}"><i class="fa fa-fw fa-info"></i>Monthly Reports</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>