<?php
include_once('../includes/db_connexion.php');

//VERIFIER LA VALIDATION DU FORMULAIRE
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupération des données des variables
    if (empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email']) || empty($_POST['mdp']) || empty($_POST['age']) || empty($_POST['SEX'])) {
        // Redirection en cas de données manquantes
        header("Location: http://localhost/matmitard/views/register.php");
        exit(); // Ajout de `exit` après un header pour arrêter l'exécution du script
    } else {
        // Les données sont présentes, les affecter aux variables
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $mdp = password_hash( $_POST['mdp'],PASSWORD_DEFAULT);
        $sex = $_POST['SEX'];
        // recuperation et upload de l'image
        // echo"<prev>";
        // print_r($_FILES['photo']);
        // echo "<prev>";
        // creation de la distination de l'image 
        $targetfile="../imgs/".$_FILES['photo']['name'];
        //sauvegarder l'image 
        try{
        move_uploaded_file($_FILES['photo']['tmp_name'],$targetfile);
        $dbConnexion=dbConnexion();
        //prepare la requete
        $_request = $dbConnexion->prepare("INSERT INTO user (nom,prenom,age,mdp,email,sex,profil_image) 
        VALUES(?,?,?,?,?,?,?)");

//execute de la requette
            $_request->execute(array($nom,$prenom,$age,$mdp,$email,$sex,$_FILES['photo']['name']));


}catch(exeption $e){
    echo $e->getMessage();
}



        // Traitement des données ou enregistrement dans la base de données
        // ...
        
        // Redirection ou autre logique après traitement
        // header("Location: http://localhost/matmitard/views/success.php");
        // exit();
    }
} else {
    // Redirection si la requête n'est pas de type POST
    header("Location: http://localhost/marmitard/views/register.php");
    exit();
}

//TRAITEMENT DES INFORMATION