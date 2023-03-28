<?php
// Récupération de l'identifiant de l'annonce à supprimer
$id = $_POST['id'];


include "connect.php";

  $sql = "DELETE FROM ouvrage WHERE code_ouvrage = $id";
 $conn->exec($sql);
                    if($conn == true){
                      echo "vous avez supprimer avec succes";
                      header("Location: acceuil.php");

			exit();
                    }else{
                              echo "vous avez une problème";
                    }
                    
          

?>