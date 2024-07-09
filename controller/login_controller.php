<?php
include_once('../includes/db_connexion.php');
session_start();

//verifier que l'étulisateur a bien valider le formulaire
if ($_SERVER["REQUEST_METHOD"]== "POST"){
    //recuperation des donnéede connexion
    $email = $_POST['email'];
    $mdp = $_POST ['mdp'];
    //etablire la connexion avec la base de donnée
    $dbConnexion = dbConnexion();
    // requette qui permet de recuperer les info etulisateur
    $request = $dbConnexion->prepare("SELECT * FROM user WHERE email = ?");
    //executer la requette
    $request->execute([$email]);
    //recuperation du resultat de la requette tableau
    $userInfos = $request->fetch();
    //verifier si l'email fourni par l'utilisateur existe dans la table users
    if (empty($userInfos)){
        echo "cet email n'existe pas!";
    }else{
        
        //cas ou tableaux n'est pas vide
        //verifier la conformiter du mdp
        if (password_verify($mdp, $userInfos['mdp'])){
            $_SESSION['id_user']=$userInfos['id'];
        }
        else{
            echo "mot de passe incorecte";
        

        }
    }
}else{
    header ("location:../views/login.php");
}