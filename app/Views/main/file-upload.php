<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1><?= $title ?? '' ?></h1>

            <?php if (session()->has('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('success') ?>
                </div>
            <?php endif; ?>

            <?php
            $errors_data = session()->has('errors') ? session()->getFlashdata('errors') : '';
            // $errors_data = $errors ? $errors->getErrors() : [];
            // d($errors_data);
            // echo $errors ? $errors->listErrors('my_list') : '';
            ?>

            <?php if (session()->has('file')):?>
            <img src="uploads/<?= session()->getFlashdata('file')?>" alt="">
            <?php endif; ?>

            <form action="<?= route_to('main.fileupload') ?>" enctype="multipart/form-data" method="post">

            <div class="mb-3">
                <label for="userfile" class="form-label">Default file input example</label>
                <input name="userfile" class="form-control" type="file" id="userfile">
            </div>

            <button type="submit" class="btn btn-primary">Send</button>
            </form>
          

        </div>
    </div>
</div>

<?= $this->endSection() ?>
