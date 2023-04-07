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
            $errors_data = session()->has('errors') ? session()->getFlashdata('errors') : [];
            ?>

            <?php if (!empty($errors_data)): ?>
                <div class="alert alert-danger" role="alert">
                    <ul class="list-unstyled">
                        <?php foreach ($errors_data as $error): ?>
                            <li><?= $error ?></li>
                        <?php endforeach; ?>
                    </ul>

                </div>
            <?php endif; ?>

            <?php if (session()->has('files')): ?>
                <?php foreach (session()->getFlashdata('files') as $file): ?>
                    <img src="uploads/<?= $file ?>" alt="">
                <?php endforeach; ?>
            <?php endif; ?>

            <form action="<?= route_to('main.fileupload3') ?>" enctype="multipart/form-data" method="post">

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control <?= add_error_class($errors_data, 'name') ?>"
                           id="name" value="<?= old('name') ?>">
                    <?= display_error($errors_data, 'name') ?>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control <?= add_error_class($errors_data, 'email') ?>"
                           id="email" value="<?= old('email') ?>">
                    <?= display_error($errors_data, 'email') ?>
                </div>

                <div class="mb-3">
                    <label for="userfile" class="form-label">Default file input example</label>
                    <input name="userfile[]" class="form-control <?= add_error_class($errors_data, 'userfile') ?>"
                           type="file" id="userfile" multiple>
                    <?= display_error($errors_data, 'userfile') ?>
                </div>

                <button type="submit" class="btn btn-primary">Send</button>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection() ?>
