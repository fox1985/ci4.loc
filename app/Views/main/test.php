
<?= $this->extend('layouts/main') ?>

<?= $this->section('content')?>

<div class="container">
    <div class="row">
        <div class="col-12">
        <h1><?= $title?></h1>
        
        <?= isset($validation) ? $validation->listErrors() : ''?>
        
        <form action="<?= route_to('main_test')?>" method="post">

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>  

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="email">
        </div>



        <button type="submit" class="btn btn-primary">Отправить</button>
        </form>



        </div>
    </div>
    
</div>




<?= $this->endSection()?>

