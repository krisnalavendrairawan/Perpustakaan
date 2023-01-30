<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">

          


        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>ADMINISTRATOR</span>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('pinjam*') ? 'active' : '' }}" href="{{ route('pinjam') }}">
              <span data-feather="grid" class="align-text-bottom"></span>
              Pinjam
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ Request::is('anggota*') ? 'active' : '' }}" href="{{ route('anggota.index') }}">
              <span data-feather="users" class="align-text-bottom"></span>
              Anggota
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ Request::is('buku*') ? 'active' : '' }}" href="{{ route('buku') }}">
              <span data-feather="users" class="align-text-bottom"></span>
              Buku
            </a>
          </li>

        </ul>
        
      </div>
    </nav>