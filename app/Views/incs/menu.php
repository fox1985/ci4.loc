

<div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link <?php echo ( base_url() === rtrim(current_url(), '/') ) ? 'active' : '' ?>" aria-current="page" href="<?= base_url() ?>">Главная</a>
        </li>

        <li class="nav-item">
        <a class="nav-link <?php echo ( base_url('blog') === rtrim(current_url(), '/') ) ? 'active' : '' ?>" href="<?= base_url('blog') ?>">Блог</a>
      </li>  
      
      <li class="nav-item">
        <a class="nav-link <?php echo ( base_url('blog/create') === rtrim(current_url(), '/') ) ? 'active' : '' ?>" href="<?= base_url('blog/create') ?>">Добавить запись</a>
        </li>
       
      </ul>
     
    </div>
  </div>