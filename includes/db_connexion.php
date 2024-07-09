<?php
// inclure le fichier qui assure la conenxion a la base de donnée




// fonction permettent de se connecter a la base de donnes
define ("SERVER_NAME","mysql:host=localhost");
define("DB_NAME","marmitard");
define("DB_USER_NAME","root");
define("DB_USER_PASSWORD","");


//$con = new PDO("mysql:host=localhost;dbname=marmitard","root","");



function dbConnexion(){
    try{
       return $connexion = new PDO (SERVER_NAME.";port=3307;dbname=".DB_NAME,DB_USER_NAME,DB_USER_PASSWORD);
    }catch(exeption $e){
        echo $e ->getMessage();
    }
    
}