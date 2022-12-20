<nav>
  <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu" data-accordion="false">

    <li class="nav-item">
      <a href="<?= base_url('home/artikel') ?>" class="nav-link">
        <i class="nav-icon fas fa-newspaper "></i>
        <p>Artikel</p>
      </a>
    </li>

    <li class="nav-item  has-treeview">
      <a href="<?= base_url('home/event') ?>" class="nav-link">	
        <i class="nav-icon fas fa-calendar "></i>
        <p>Event</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="<?= base_url('home/galery') ?>" class="nav-link">
        <i class="nav-icon fas fa-image"></i>
        <p>Galery Foto</p>
      </a>
    </li>
    
    <li class="nav-item has-treeview">
      <a href="<?= base_url('home/klien') ?>" class="nav-link">
        <i class="nav-icon fas fa-user-friends "></i>
        <p>Klien Kami</p>
      </a>
    </li>

    </li>
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-sign "></i>
        <p>
          Login
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="<?= base_url('login/signin') ?>" class="nav-link">
          <i class="right fas fa-sign-in-alt"></i>
            <p>Sign In</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('login/signup') ?>" class="nav-link">
          <i class="right fas fa-sign-out-alt"></i>
            <p>Sign Up</p>
          </a>
        </li>
      </ul>
    </li>

</nav>