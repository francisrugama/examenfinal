<div class="collapse navbar-collapse" id="sidenav-collapse-main">
    <!-- Collapse header -->
    <div class="navbar-collapse-header d-md-none">
        <div class="row">
            <div class="col-6 collapse-brand">
                <a href="#">
                    <img src="{{ asset('img/brand/blue.png') }}">
                </a>
            </div>
            <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main"
                    aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>
    <!-- Navigation -->
    <ul class="navbar-nav">
        <li class="nav-item {{ Request::route()->named('dashboard') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('dashboard') ? 'active' : '' }}"
                href="{{ route('dashboard') }}" wire:navigate>
                <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
        </li>
    </ul>
    <!-- Divider -->
    <hr class="my-3">
    <!-- Heading -->
    <h6 class="navbar-heading text-muted">Panel de Administración</h6>
    <ul class="navbar-nav">
        <li class="nav-item {{ Request::route()->named('ejemplo.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('ejemplo.index') ? 'active' : '' }}"
                href="{{ route('ejemplo.index') }}" wire:navigate>
                <i class="fas fa-book text-purple"></i> Ejemplo
            </a>
        </li>
    </ul>
    <!-- Divider -->
    <hr class="my-3">
    <!-- Heading -->
    <h6 class="navbar-heading text-muted">Otras Acciones</h6>
    <!-- Navigation -->
    <ul class="navbar-nav mb-md-3">
        <li class="nav-item {{ Request::route()->named('profile.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('profile.index') ? 'active' : '' }}"
                href="{{ route('profile.index') }}" wire:navigate>
                <i class="fas fa-user text-blue"></i> Perfil
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt text-gray"></i> Cerrar Sesión
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>

    <!-- Divider -->
    <hr class="my-3">
    <!-- Heading -->
    <h6 class="navbar-heading text-muted">Ejemplos</h6>
    <!-- Navigation -->
    <ul class="navbar-nav mb-md-3">
        <li class="nav-item {{ Request::route()->named('categories.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('categories.index') ? 'active' : '' }}"
                href="{{ route('categories.index') }}" wire:navigate>
                <i class="fas fa-tags text-yellow"></i> Categories (Normal)
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('clients.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('clients.index') ? 'active' : '' }}"
                href="{{ route('clients.index') }}" wire:navigate>
                <i class="fas fa-tags text-yellow"></i> Client
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('owners.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('owners.index') ? 'active' : '' }}"
                href="{{ route('owners.index') }}" wire:navigate>
                <i class="fas fa-tags text-yellow"></i> Owner
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('reports.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('reports.index') ? 'active' : '' }}"
                href="{{ route('reports.index') }}" wire:navigate>
                <i class="fas fa-tags text-yellow"></i> Report
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('vehicles.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('vehicles.index') ? 'active' : '' }}"
                href="{{ route('vehicles.index') }}" wire:navigate>
                <i class="fas fa-tags text-yellow"></i> Vehicle
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('technicans.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('technicans.index') ? 'active' : '' }}"
                href="{{ route('technicans.index') }}" wire:navigate>
                <i class="fas fa-tags text-yellow"></i> Technican
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('maintenance_records.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('maintenance_records.index') ? 'active' : '' }}"
                href="{{ route('maintenance_records.index') }}" wire:navigate>
                <i class="fas fa-tags text-yellow"></i> Maintenance_record
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('appointments.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('appointments.index') ? 'active' : '' }}"
                href="{{ route('appointments.index') }}" wire:navigate>
                <i class="fas fa-tags text-yellow"></i> Appointment
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('service_details.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('service_details.index') ? 'active' : '' }}"
                href="{{ route('service_details.index') }}" wire:navigate>
                <i class="fas fa-tags text-yellow"></i> Service_detail
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('service_histories.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('service_histories.index') ? 'active' : '' }}"
                href="{{ route('service_histories.index') }}" wire:navigate>
                <i class="fas fa-tags text-yellow"></i> Service_history
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('spare_useds.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('spare_useds.index') ? 'active' : '' }}"
                href="{{ route('spare_useds.index') }}" wire:navigate>
                <i class="fas fa-tags text-yellow"></i> Spare_used
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('technican_assignments.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('technican_assignments.index') ? 'active' : '' }}"
                href="{{ route('technican_assignments.index') }}" wire:navigate>
                <i class="fas fa-tags text-yellow"></i> Technican_assignment
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('vehicles_historys.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('vehicles_historys.index') ? 'active' : '' }}"
                href="{{ route('vehicles_historys.index') }}" wire:navigate>
                <i class="fas fa-tags text-yellow"></i> Vehicle_history
            </a>
        </li>

    </ul>
</div>
