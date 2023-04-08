<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1><?= $title ?? '' ?></h1>

            <?php if (session()->has('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('success') ?>
                </div>
            <?php endif; ?>

            <?php if (session()->has('fail')): ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('fail') ?>
                </div>
            <?php endif; ?>

            <?php
            $errors_data = session()->has('errors') ? session()->getFlashdata('errors') : [];
            //d($errors_data);
            ?>

            <form action="<?= route_to('user.login') ?>" method="post">

        

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control <?= add_error_class($errors_data, 'email') ?>" id="email" value="<?= old('email') ?>">
                    <?= display_error($errors_data, 'email') ?>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control <?= add_error_class($errors_data, 'password') ?>" id="password">
                    <?= display_error($errors_data, 'password') ?>
                </div>


                <button type="submit" class="btn btn-primary">Login</button>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection() ?>

