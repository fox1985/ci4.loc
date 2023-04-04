
<div class="col-md-4">



<div class="card" style="width: 18rem;">
  <img src="https://picsum.photos/id/237/400/400" class="card-img-top cart-img">
  
  <div class="card-body">
    <h5 class="card-title"><?= $post['title'] ?></h5>
    <p class="card-text"> <?= $post['excerpt'] ?></p>
    
    <a href="<?= site_url("blog/{$post['id']}")?>" class="btn btn-primary">Redme</a>
    
    <a href="<?= url_to('blog_edit', $post['id'])?>" class="btn btn-success">edit</a>

    <a href="<?= url_to('blog_delete', $post['id'])?>" class="btn btn-danger">delete</a>



  </div>

</div>

</div>


<!-- урок 17 - 04:55 -->