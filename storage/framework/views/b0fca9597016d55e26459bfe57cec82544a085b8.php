<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">SI Himanura</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="index-0.html">Statistic</a></li>
        </ul>
      </li>
      <li class="menu-header">Master Data</li>
      <li class="dropdown <?php echo e(Request::route()->getName() == 'peserta.daftar-peserta' ? ' active' : ''); ?>">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-book"></i><span>Data Peserta</span></a>
        <ul class="dropdown-menu">
          <li class="<?php echo e(Request::route()->getName() == 'peserta.daftar-peserta' ? ' active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('peserta.daftar-peserta')); ?>">List Peserta</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-bookmark"></i><span>Kontak Person</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="index-0.html">Tambah Kontak Person</a></li>
          <li><a class="nav-link" href="index.html">Daftar Kontak Person</a></li>
        </ul>
      </li>
  </aside><?php /**PATH C:\Server\www\himanurafestival\resources\views/includes/sidebar.blade.php ENDPATH**/ ?>