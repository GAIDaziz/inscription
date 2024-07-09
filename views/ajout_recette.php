
<?php require_once "../includes/fonctions.php";

$categoryList = getCategoryList(); ?>


<?php require_once "../includes/nevbar.php"; ?>
<div class="w-50 mx-auto">
    <form action ="../controller/recette_controller.php"  method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exempleImputeEmail" class="form-label">Nom Recette</label>
            <input type="text" name="nom_recette" class="form-control">
        </div>
        <!-- le prenom -->

        <div class = "mb-3">
            <label class="form-label">list ingredient</label>
            <input type="text" name="list_ingredient" class="form-control">
        </div>   
<!--liste des ingrediant-->
        <div class="mb-3">
            <label class="form-label">discription</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
 
               
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" rows="3"></textarea>
        </div>

<!--categorie de la recette-->
<div class="mb-2 text-center">
<label class="form-label">categorie</label>
        <select class="form-select" name="category">
            <option selected value="">Selectionner une categorie</option>
            <?php foreach($categoryList as $category){ ?>
            <option value="<?= $category['id'] ?>"><?= $category['nom'] ?></option>
            <?php } ?>
        </select>
        </div>
                            
            <!--photo de profil-->
            <div class="input-group mb-3">
  <input type="file" class="form-control" name="photo_recette" accept="image/png,image/jpg,image:jpeg">
  <label class="input-group-text" for="inputGroupFile02">Upload</label>
</div>

        <button class ="btn btn-success">publier la recette</button>
      
        </div>       
    </from>    

</div>