

    <?php include '_partials/header.php' ?>

    <!-- Navbar Top -->

    <?php include '_partials/navbar.php' ?>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-primary elevation-4">
      <div class="bg-primary brand-link text-center">
      <a href="">
                 <img src="<?= base_url() ?>assets/images/logo/logo.jpg" alt="" class="w-50">
            
        </a>
      </div>
      <!-- Sidebar -->
      <div class="sidebar mt-1">

        <?php include '_partials/sidebar.php' ?>

      </div>
    </aside>

    <?php echo $konten; ?>
    <?php include '_partials/footer.php' ?>

 