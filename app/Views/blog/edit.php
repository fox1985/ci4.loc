<?= $this->extend('layouts/main') ;?>

<?= $this->section('content')?>



<div class="container">
    <div class="row">
    <h1><?= $title?></h1>

    <form class="" action="<?= url_to('blog_update', $post['id'])?>" method="post">

    <div class="mb-3">
        <label for="title" class="form-label">Загаловак</label>
        <input type="text" class="form-control" name="title" value="<?= $post['title']?>">
    
    </div>  
    
    <div class="mb-3">
        <label for="excerpt" class="form-label">Цитата</label>
        <input type="text" class="form-control" name="excerpt" value="<?=$post['excerpt'] ?>">
    </div>

  <div class="mb-3">
  <label for="content" class="form-label">Контент</label>
  <textarea class="form-control" name="content" id="content" rows="5"><?= $post['content']?></textarea>
</div>
 
  <button type="submit" class="btn btn-primary">Редактрование записи</button>
</form>
 
    </div>
</div>


<?= $this->endSection() ;?>
<!-- 
 -->