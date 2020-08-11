<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
    <li><a href="#!">one</a></li>
    <li><a href="#!">two</a></li>
    <li class="divider"></li>
    <li><a href="#!">three</a></li>
  </ul>

<nav class="cyan darken-1">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">TechLab</a>
      <ul class="right hide-on-med-and-down">
        <!-- Dropdown Trigger -->
        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">{{ Auth::user()->name }}<i class="material-icons right"><i class="material-icons">more_vert</i></i></a></li>
      </ul>
    </div>
</nav>


<!-- catálogo dropdow-->
<ul id="dropdown_catalogos" class="dropdown-content">
    <li><a href="{{ route('customer.index') }}">Clientes</a></li>
    <li class="divider"></li>
    <li><a href="{{ route('product.index') }}">Productos</a></li>
    <li><a href="#!">Servicios</a></li>
</ul>

<nav class="grey lighten-5 nav2 left hide-on-med-and-down">
    <div class="nav-wrapper">
      <ul id="nav-mobile">
        <li><a class="dropdown-trigger" href="#!" data-target="dropdown_catalogos">Catálogos<i class="material-icons right"><i class="material-icons">more_vert</i></i></a></li>
        <li><a href="#!">Tickets</a></li>
        <li><a class="dropdown-trigger" href="#!" data-target="dropdown_catalogos">Reportes<i class="material-icons right"><i class="material-icons">more_vert</i></i></a></li>
        <li><a class="dropdown-trigger" href="#!" data-target="dropdown_catalogos">Configuración<i class="material-icons right"><i class="material-icons">more_vert</i></i></a></li>
      </ul>
    </div>
</nav>