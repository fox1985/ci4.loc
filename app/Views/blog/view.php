<?= $this->extend('layouts/main') ;?>

<?= $this->section('content')?>



<div class="container">
    <div class="row">
    <h1><?= $title?></h1>


    <?= view_cell('\App\Libraries\Post::getOnePost', ['post' => $post]) ?>
 
    </div>
</div>


<?= $this->endSection() ;?>

