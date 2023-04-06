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
            $errors = session()->has('errors') ? session()->getFlashdata('errors') : '';
            $errors_data = $errors ? $errors->getErrors() : [];
            d($errors_data);
            echo $errors ? $errors->listErrors() : '';
            ?>

            <form action="<?= route_to('main.test') ?>" method="post">

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control <?= add_error_class($errors_data, 'name') ?>" id="name" value="<?= old('name') ?>">
                    
                    <?= display_error($errors_data, 'name')?>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control <?= add_error_class($errors_data, 'email') ?>" id="email" value="<?= old('email') ?>">

                    <?= display_error($errors_data, 'email')?>
                </div>

                <button type="submit" class="btn btn-primary">Send</button>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection() ?>
