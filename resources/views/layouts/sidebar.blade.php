<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU NAVIGASI</li>
            <li>
                <a href="{{ route('beranda') }}">
                  <i class="fa fa-dashboard"></i> <span>Beranda</span>
                </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-plug"></i> <span>Kulkas</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('kulkas.index') }}"><i class="fa fa-circle-o"></i> Data Kulkas Instore </a></li>
                <li><a href=""><i class="fa fa-circle-o"></i> Data Kulkas Staging</a></li>
              </ul>
            </li>
            <li>
              <a href="{{ route('sukucadang.index') }}">
                <i class="fa fa-cogs"></i> <span>Suku Cadang</span>
              </a>
            </li>
            <li>
              <a href="../widgets.html">
                <i class="fa fa-cog"></i> <span>Perbaikan</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i> <span>Karyawan</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('karyawan.index') }}"><i class="fa fa-circle-o"></i> Data Karyawan </a></li>
                <li><a href=""><i class="fa fa-circle-o"></i> Data Kulkas Staging</a></li>
              </ul>
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
            <li class="treeview">
              <a href="#">
                <i class="fa fa-database"></i> <span>Master Data</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('tipe.index') }}"><i class="fa fa-circle-o"></i> Tipe</a></li>
                <li><a href="{{ route('kondisi.index') }}"><i class="fa fa-circle-o"></i> Kondisi</a></li>
                <li><a href="{{ route('kategorisukucadang.index') }}"><i class="fa fa-circle-o"></i> Kategori Suku cadang</a></li>
                <li><a href=""><i class="fa fa-circle-o"></i> Teknisi</a></li>
              </ul>
            </li>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>