<?php include_once "header.php"; ?>
Insertion d'article


<form class="form-floating" method="POST" action="/insererarticle">
  <input type="text" name="titre" class="form-control" id="floatingInputValue" placeholder="" value="">
  <label for="floatingInputValue">Titre</label>

<div class="form-floating">
  <textarea name="description" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Description</label>
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php include_once "footer.php"; ?>

    

