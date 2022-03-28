<?php include_once "header.php"; ?>
ma page d'accueil !
<div class="row row-cols-1 row-cols-md-2 g-4">
<?php foreach ($mesarticles as $article) {  ?>
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?= $article['titre'] ?></h5>
        <p class="card-text"><?= $article['description'] ?></p>
      </div>
    </div>
  </div>
  <?php } ?>
</div>
<?php include_once "footer.php"; ?>

    

