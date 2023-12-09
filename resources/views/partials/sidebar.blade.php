<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
   
    <div class="sidebar-brand-text mx-3">Admin Dapur Wafi</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<li class="nav-item active">
    <a class="nav-link" href="{{ route('nasikotaks.index') }}">
        <i class="fas fa-fw fa-utensils"></i>
        <span>Daftar Menu</span></a>
</li>

<li class="nav-item active">
    <a class="nav-link" href="{{ route('messages.index') }}">
    <span class="badge badge-danger badge-counter">7</span>
        <span>Daftar pesan</span>
    </a>
</li>



</ul>