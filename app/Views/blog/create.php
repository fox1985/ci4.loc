<?= $this->extend('layouts/main') ;?>

<?= $this->section('content')?>



<div class="container">
    <div class="row">
    <h1><?= $title?></h1>

    <form class="" action="<?= base_url('blog/store')?>" method="post">

    <div class="mb-3">
        <label for="title" class="form-label">Загаловак</label>
        <input type="text" class="form-control" name="title">
    
    </div>  
    
    <div class="mb-3">
        <label for="excerpt" class="form-label">Цитата</label>
        <input type="text" class="form-control" name="excerpt">
    </div>

  <div class="mb-3">
  <label for="content" class="form-label">Контент</label>
  <textarea class="form-control" name="content" id="content" rows="5"></textarea>
</div>
 
  <button type="submit" class="btn btn-primary">Добавить</button>
</form>
 
    </div>
</div>


<?= $this->endSection() ;?>

