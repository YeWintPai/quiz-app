   <!-- Sidebar -->
   <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/admin/')}}">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">CodeCrafters</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="{{url('/admin/')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Admin Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Database Tables
</div>            

<!-- Nav Item - questions Collapse Menu -->
<li class="nav-item">
    <a class="nav-link" href="{{url('/admin/questions')}}"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-question"></i>
        <span>Quiz Questions</span>
    </a>

    <a class="nav-link" href="{{url('/admin/choices')}}"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-exclamation"></i>
        <span>Quiz Choices</span>
    </a>
    <a class="nav-link" href="{{url('/admin/feedbacks')}}"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-exclamation"></i>
        <span>Feedbacks</span>
    </a>
</li>
<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->