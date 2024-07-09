<?php require_once "../includes/nevbar.php"; ?>
<!--formulaire d'inscription-->

<div class="w-50 mx-auto">
    <form action ="../controller/register_controller.php"  method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exempleImputeEmail" class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control">
        </div>
        <!-- le prenom -->

        <div class = "mb-3">
            <label class="form-label">prenom</label>
            <input type="text" name="prenom" class="form-control">
        </div>   
<!--EMAIL-->
        <div class="mb-3">
            <label class="form-label">email</label>
            <input type="email" name="email" class="form-control">    
        </div>

<!--mot de passe-->
        <div class="mb-3">
            <label class="form-label">Mot de passe</label>
            <input type="password" name="mdp" class="form-control">    
        </div>
<!--age-->
        <div class="mb-5">
            <label class="form-label">Age</label>
            <input type="number" name="age" class="form-control" min="18">    
 <!--sex-->
            <div class="form-check">
            <input class="form-check-input" type="radio" value="femme" name="SEX" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                FEMME
            </label>
            </div>
            <div class="form-check mb-3">
            <input class="form-check-input" type="radio" value="homme" name="SEX" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                HOMME
            </label>
            </div>     
            <!--photo de profil-->
            <div class="input-group mb-3">
  <input type="file" class="form-control" name="photo" accept="image/png,image/jpg,image:jpeg">
  <label class="input-group-text" for="inputGroupFile02">Upload</label>
</div>

        <button class ="btn btn-success">register</button>
      
        </div>       
    </from>    

</div>