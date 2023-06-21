  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="info">
                  <a href="#"
                      class="d-block">{{ auth()->user()->name }}</a>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column"
                  data-widget="treeview"
                  role="menu"
                  data-accordion="false">
                  <li
                      class="nav-item {{ request()->routeIs('dashboard.category.*') ? 'menu-is-opening menu-open' : '' }}">
                      <a href="#"
                          class="nav-link">
                          <i class="nav-icon fas fa-table"></i>
                          <p>
                              Category
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('dashboard.category.create') }}"
                                  class="nav-link {{ request()->routeIs('dashboard.category.create') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Create Category</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('dashboard.category.index') }}"
                                  class="nav-link {{ request()->routeIs('dashboard.category.index') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>List Category</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item {{ request()->routeIs('dashboard.post.*') ? 'menu-is-opening menu-open' : '' }}">
                      <a href="#"
                          class="nav-link">
                          <i class="nav-icon fas fa-edit"></i>
                          <p>
                              Article
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('dashboard.post.create') }}"
                                  class="nav-link {{ request()->routeIs('dashboard.post.create') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Create Artikel</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('dashboard.post.index') }}"
                                  class="nav-link {{ request()->routeIs('dashboard.post.index') ? 'active' : '' }}">
                                  <i class="nav-icon far fa-circle nav-icon"></i>
                                  <p>List Artikel</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();"
                          class="nav-link">
                          <i class="nav-icon fa fa-arrow-right"></i>
                          <p>
                              Logout
                          </p>
                      </a>

                      <form id="logout-form"
                          action="{{ route('logout') }}"
                          method="POST"
                          class="d-none">
                          @csrf
                      </form>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
