<?php require_once "includes/nevbar.php";

require_once "includes/fonctions.php";
$recette=getValidatedRecette();


?>

<div class ="d-flex" >
    <?php foreach ($recette as $rec) { ?>
  <div class="card" style="width: 18rem;">
    <img src="imgs/<?= $rec['photo'] ?>" class="card-img-top" alt="<?=$rec['photo']?>">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <span><i class="fa-solid fa-thumbs-up"></i></span>
        <span><i class="fa-sharp fa-regular fa-heart"></i></span>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
<?php } ?>
</div>


