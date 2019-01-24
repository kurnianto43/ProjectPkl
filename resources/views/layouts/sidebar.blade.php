<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Cari di sini...">
          <span class="input-group-btn">
                <button type="submit" name="search"  id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="info">
          <h4>{{ Auth::user()->name }}</h4>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU NAVIGASI</li>
            <li class="{{ Request::is('beranda*') ? 'active' : '' }}" >
                <a href="{{ route('beranda') }}">
                  <i class="fa fa-dashboard"></i> <span>Beranda</span>
                </a>
            </li>
            <li class="treeview {{ Request::is('kulkas', 'kulkas/tambah-data') ? 'active' : '' }}">
              <a href="#">
                <i class="fa fa-plug"></i> <span>Kulkas</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="{{ Request::is('kulkas', 'kulkas/tambah-data') ? 'active' : '' }}"><a href="{{ route('kulkas.index') }}"><i class="fa fa-circle-o"></i> Data Kulkas Instore </a></li>
                <li class=""><a href=""><i class="fa fa-circle-o"></i> Data Kulkas Staging</a></li>
              </ul>
            </li>
            <li class="{{ Request::is('suku-cadang') ? 'active' : '' }}">
              <a href="{{ route('sukucadang.index') }}">
                <i class="fa fa-cogs"></i> <span>Suku Cadang</span>
              </a>
            </li>
            <li>
              <a href="../widgets.html">
                <i class="fa fa-cog"></i> <span>Perbaikan</span>
              </a>
            </li>
            <li class="{{ Request::is('karyawan', 'karyawan/tambah-data') ? 'active' : '' }}">
              <a href="{{ route('karyawan.index') }}">
                <i class="fa fa-users"></i> <span>Karyawan</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-credit-card"></i> <span>Invoice</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href=""><i class="fa fa-circle-o"></i> Data Kulkas Instore </a></li>
                <li><a href=""><i class="fa fa-circle-o"></i> Data Kulkas Staging</a></li>
              </ul>
            </li>
            <li class="treeview {{ Request::is('tipe', 'tipe/tambah-data', 'kondisi', 'kondisi/tambah-data', 'kategori-suku-cadang', 'kategori-suku-cadang/tambah-data', 'teknisi', 'teknisi/tambah-data') ? 'active' : '' }}">
              <a href="#">
                <i class="fa fa-database"></i> <span>Master Data</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="{{ Request::is('tipe', 'tipe/tambah-data' ) ? 'active' : '' }}"><a href="{{ route('tipe.index') }}"><i class="fa fa-circle-o"></i> Tipe</a></li>
                <li class="{{ Request::is('kondisi', 'kondisi/tambah-data') ? 'active' : '' }}"><a href="{{ route('kondisi.index') }}"><i class="fa fa-circle-o"></i> Kondisi</a></li>
                <li class="{{ Request::is('kategori-suku-cadang', 'kategori-suku-cadang/tambah-data') ? 'active' : '' }}"><a href="{{ route('kategorisukucadang.index') }}"><i class="fa fa-circle-o"></i> Kategori Suku cadang</a></li>
                <li class="{{ Request::is('teknisi', 'teknisi/tambah-data') ? 'active' : '' }}"><a href="{{ route('teknisi.index') }}"><i class="fa fa-circle-o"></i> Teknisi</a></li>
              </ul>
            </li>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>