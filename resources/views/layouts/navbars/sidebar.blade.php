<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('TOPICOS 22A') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'panel' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">public</i>
            <p>{{ __('Inicio') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'usuarios' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('usuarios.index') }}">


          <i class="material-icons">people</i>
            <p>{{ __('Usuarios') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'clientes' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('cliente') }}">
          <i class="material-icons">groups</i>
            <p>{{ __('Clientes') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'proveedor' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('proveedor') }}">
          <i class="material-icons">assignment_ind</i>
          <p>{{ __('Proveedores') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'productos' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('producto') }}">
          <i class="material-icons">shopping_cart</i>
            <p>{{ __('Productos') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
