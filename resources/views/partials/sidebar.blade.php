<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Naufal Randi Aldiansyah</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href=" {{route('home')}} " class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Home
            </p>
          </a>
        </li>
        <li class="nav-item">
            <a href=" {{route('pertanyaan.index')}} " class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                pertanyaan
              </p>
            </a>
          </li>
        <li class="nav-item">
        <a href=" {{route('pertanyaan.create')}} " class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
            membuat pertanyaan
            </p>
        </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
