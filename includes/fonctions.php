<?php
require_once "db_connexion.php";
function getCategoryList(){
        $dbConnexion = dbConnexion();

        $request = $dbConnexion->prepare("SELECT id, nom From categories");

        $request->execute();

        $categoryList= $request->fetchAll();
        return $categoryList;

    }

    //function pour recuperer la liste des recette dans le statut true

    function getValidatedRecette(){
        $dbConnexion = dbConnexion();
       
        $request = $dbConnexion->prepare("SELECT * From recettes where statut = ?");

        $request->execute([1]);

        $recetteListe=$request->fetchAll();
        return $recetteListe;
    };