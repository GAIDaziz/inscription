<?php require_once "../includes/nevbar.php"; ?>


<div class="w-50 mx-auto">
        <form action ="../controller/login_controller.php"  method="post" enctype="multipart/form-data"> 
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
        <button class ="btn btn-success">login</button>

        </form>   
<div>