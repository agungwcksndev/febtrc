<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url(); ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <a href="<?php echo base_url(); ?>#"><i class="fa fa-circle text-success"></i> Online</a>
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
      <li class="header">MAIN NAVIGATION</li>
      <li><a href="<?php echo site_url('admin/dashboard'); ?>"><i class="fa fa-th"></i> <span>Dashboard</span></a></li>
      <li>
        <a href="<?php echo site_url('admin/jurusan'); ?>">
          <i class="fa fa-bookmark"></i> <span>Jurusan</span>
        </a>
      </li>
      <li>
        <a href="<?php echo site_url('admin/prodi'); ?>">
          <i class="fa fa-tag"></i> <span>Program Studi</span>
        </a>
      </li>
      <li class="treeview">
        <a href="<?php echo base_url(); ?>#">
          <i class="fa fa-users"></i>
          <span>User Manager</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url('admin/admin'); ?>"><i class="fa fa-circle-o"></i> Admin</a></li>
          <li><a href="<?php echo site_url('admin/operator'); ?>"><i class="fa fa-circle-o"></i> Operator</a></li>
          <li><a href="<?php echo site_url('admin/alumni'); ?>"><i class="fa fa-circle-o"></i> Alumni</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="<?php echo base_url(); ?>">
          <i class="fa fa-book"></i> <span>Kuesioner</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url('admin/kuesioner_fakultas'); ?>"><i class="fa fa-circle-o"></i> Daftar Paket Fakultas</a></li>
          <li><a href="<?php echo site_url('admin/kuesioner_jurusan'); ?>"><i class="fa fa-circle-o"></i> Daftar Paket Jurusan</a></li>
          <li><a href="<?php echo site_url('admin/kuesioner_prodi'); ?>"><i class="fa fa-circle-o"></i> Daftar Paket Prodi</a></li>
          <li><a href="<?php echo site_url('admin/kuesioner'); ?>"><i class="fa fa-circle-o"></i> Kuesioner</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-suitcase"></i> <span>Lowongan Pekerjaan</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-credit-card"></i> <span>Kartu Alumni</span>
        </a>
      </li>
      <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
      <li class="header">LABELS</li>
      <li><a href="<?php echo base_url(); ?>#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
      <li><a href="<?php echo base_url(); ?>#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
      <li><a href="<?php echo base_url(); ?>#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
