

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
       

      <li class="nav-item">
        <a class="nav-link <?php echo ( base_url('test') === rtrim(current_url(), '/') ) ? 'active' : '' ?>" href="<?= base_url('test') ?>">Test Form</a>
      </li>


      <li class="nav-item">
        <a class="nav-link <?php echo ( base_url('test2') === rtrim(current_url(), '/') ) ? 'active' : '' ?>" href="<?= base_url('test2') ?>">Test Form2</a>
      </li>

      <li class="nav-item">
        <a class="nav-link <?php echo ( base_url('file-upload') === rtrim(current_url(), '/') ) ? 'active' : '' ?>" href="<?= base_url('file-upload') ?>">Загрузка файла</a>
      </li>


      <li class="nav-item">
        <a class="nav-link <?php echo ( base_url('file-upload2') === rtrim(current_url(), '/') ) ? 'active' : '' ?>" href="<?= base_url('file-upload2') ?>">Загрузка файла 2</a>
      </li>


      <li class="nav-item">
        <a class="nav-link <?php echo ( base_url('file-upload3') === rtrim(current_url(), '/') ) ? 'active' : '' ?>" href="<?= base_url('file-upload3') ?>">Загрузка файла 3</a>
      </li>

      <li class="nav-item">
        <a class="nav-link <?php echo ( base_url('user/register') === rtrim(current_url(), '/') ) ? 'active' : '' ?>" href="<?= base_url('user/register') ?>">Регистращия</a>
      </li>


      </ul>
     
    </div>
  </div>