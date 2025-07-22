<nav class="navbar navbar navbar-expand-xl navbar-dark bg-dark" data-bs-theme="dark">
    <div class="container-lg">
        <div class="d-inline-block">
            <i class="bi bi-airplane text-white h5 pe-2"></i>
            <a class="navbar-brand" href="{{ route('home') }}">Airlines</a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('home') ? 'active' : ''}}" aria-current="page"
                        href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('flights') ? 'active' : ''}}"
                        href="{{ route('flights') }}">Flights</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('fares') ? 'active' : ''}}"
                        href="{{ route('fares') }}">Fares</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('tickets') ? 'active' : ''}}"
                        href="{{ route('tickets') }}">Tickets</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('bookings') ? 'active' : ''}}"
                        href="{{ route('bookings') }}">Bookings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('seats') ? 'active' : ''}}"
                        href="{{ route('seats') }}">Seats</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('passengers') ? 'active' : ''}}"
                        href="{{ route('passengers') }}">Passengers</a>
                </li>
            </ul>
        </div>
    </div>
</nav>