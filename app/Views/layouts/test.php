<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title?></title>
</head>



<body>

<?= $this->include('incs/menu') ;?>


<!--content-->
<?= $this->renderSection('content')?>

<?= view_cell('\App\Libraries\Post::lastPosts', ['limit' => 2]) ?>



</body>
</html>