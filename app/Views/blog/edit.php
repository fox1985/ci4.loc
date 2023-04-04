<?= $this->extend('layouts/main') ;?>

<?php helper('form');?>

<?= $this->section('content')?>



<div class="container">
    <div class="row">
    <h1><?= $title?></h1>

    <?= form_open(url_to('blog_update', $post['id']) )?>

    <div class="mb-3">
        <?= form_label('Загаловак', 'title', ['class'=> 'form-label']) ?>

        <?= form_input([
          'name' => 'title',
          'class' => 'form-control',
          'id' => 'title',
          'value' => $post['title'],
          'required' => true,

        ])?>
    
    </div> 
    
    
    <div class="mb-3">
        <?= form_label('Цитата', 'excerpt', ['class'=> 'form-label']) ?>

        <?= form_input([
          'name' => 'excerpt',
          'class' => 'form-control',
          'id' => 'excerpt',
          'value' => $post['excerpt'],
          'required' => true,

        ])?>
    </div>  


    <div class="mb-3">
        <?= form_label('Контент', 'content', ['class'=> 'form-label']) ?>

        <?= form_textarea([
          'name' => 'content',
          'class' => 'form-control',
          'id' => 'content',
          'value' => $post['content'],
          'required' => true,
          'rows' => 5,

        ])?>
    </div>  

    <div class="mb-3">
    
    <?= form_button([
      'type'  => 'submit',
      'class' => 'btn btn-primary',
      'content'   => 'Редактрование записи',

    ])?>

    </div>

    
  



    <?= form_close()?>

    <!-- HTML форма  -->
    <!-- <form class="" action="<?= url_to('blog_update', $post['id'])?>" method="post">

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
</form> -->
 
</div>
<!-- row -->

</div>
<!-- container -->

<?= $this->endSection() ;?>
<!-- 
 -->