

<!doctype html>
<html lang="en">

<?php helper('html');?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?? ''?></title>

      <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/css/main.css" rel="stylesheet">
      <script src="assets/js/bootstrap.bundle.min.js"></script> -->

      <?= link_tag('assets/css/bootstrap.min.css')?>
      <?= link_tag('assets/css/main.css')?>
      <?= script_tag('assets/js/bootstrap.bundle.min.js')?>



 
  </head>
  <body>
 
<?= $this->include('incs/navbar') ;?>

  <?= $this->renderSection('content') ;?>



  
  </body>
</html>