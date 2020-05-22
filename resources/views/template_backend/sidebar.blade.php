   <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="#">Qur'anpedia</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="#"></a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>

            <li class=active><a class="nav-link" href="http://localhost/webquranpedia/dashboard"><i class="far fa-square"></i> <span>Frontend</span></a></li>

            <li class="menu-header">Starter</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-book-open"></i> <span>Artikel</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('post.index') }}">List Artikel</a></li>
                <li><a class="nav-link" href="{{ route('post.tampil_hapus') }}">List Artikel Dihapus</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-book-open"></i> <span>Account</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="http://localhost/webquranpedia/profil">Profil</a></li>
                 @if(auth()->user()->role == 'kontributor')
                <li><a class="nav-link" href="http://localhost/webquranpedia/kontributor">Informasi Data Diri</a></li>
                <li><a class="nav-link" href="http://localhost/webquranpedia/gajikontributor">Laporan Gaji</a></li>
                @endif
                <li><a class="nav-link" href="http://localhost/webquranpedia/password/reset">Ganti Password</a></li>
              </ul>
            </li>

            @if(auth()->user()->role == 'admin')
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-book-open"></i> <span>Event</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="http://localhost/webquranpedia/event">List Event</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-clipboard"></i> <span>Kategori</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('category.index') }}">List Kategori</a></li>
              </ul>
            </li>
             <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-bookmark"></i> <span>Tag</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('tag.index') }}">List Tag</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-clipboard"></i> <span>Surat</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('daftarsurat.index') }}">Informasi Surat</a></li>
                <li><a class="nav-link" href="http://localhost/webquranpedia/arab">Text Arab</a></li>
                <li><a class="nav-link" href="http://localhost/webquranpedia/indo">Arti</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-bookmark"></i> <span>Pemetaan bab</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('daftarbab.index') }}">List Bab</a></li>
              </ul>
            </li>
             <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-user"></i> <span>User</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('user.index') }}">List User</a></li>
                <li><a class="nav-link" href="http://localhost/webquranpedia/users">Approval User</a></li>
                <li><a class="nav-link" href="datapelanggan">Pelanggan</a></li>
                <li><a class="nav-link" href="datakontributor">Kontributor</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-user"></i> <span>Laporan</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="/webquranpedia/laporanpelanggan">Laporan Pelanggan</a></li>
                <li><a class="nav-link" href="/webquranpedia/laporankontributor">Laporan Kontributor</a></li>
                <li><a class="nav-link" href="/webquranpedia/laporanpost">Laporan Total Post</a></li>
                <li><a class="nav-link" href="/webquranpedia/gaji">Laporan Gaji</a></li>
                <li><a class="nav-link" href="/webquranpedia/donasi">Laporan Donasi</a></li>
              </ul>
            </li>
            
          @endif
        </aside>
      </div>