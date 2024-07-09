<?php

session_start();


require_once ("../includes/db_connexion.php");



if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nomRecette = $_POST["nom_recette"];
    $listIngredient = $_POST["list_ingredient"];
    $description = $_POST["description"];
    $category = $_POST["category"];

    $targetfile="../imgs/".$_FILES['photo_recette']['name'];


    try{
        move_uploaded_file($_FILES['photo_recette']['tmp_name'],$targetfile);
        $dbConnexion=dbConnexion();
        //prepare la requete
        $request = $dbConnexion->prepare("INSERT INTO recettes (nom, list_ingredients, discription, photo, id_user, id_categorie) VALUES (?, ?, ?, ?, ?, ?)");
//execute de la requette
            $request->execute([$nomRecette, $listIngredient,$description,$_FILES['photo_recette']['name'],$_SESSION['id_user'],$category]);

header("Location: http://localhost/marmitard/");
}catch(exeption $e){
    echo $e->getMessage();
}

}