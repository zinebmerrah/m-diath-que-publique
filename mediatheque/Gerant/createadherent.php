<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
          <title>Document</title>
</head>
<body>
          <!-- navbar -->
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="acceuil.php"><img src="images/logo.png" alt="" style='width: 45%;'></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="acceuil.php">Acceuil</a></li>
                        <li class="nav-item"><a class="nav-link" href="ouvrage.php">ouvrages</a></li>    
                    </ul>
                </div>
            </div>
        </nav>          

<section class="h-100 bg-white">
  <div class="container py-5 h-100">
    <div class="row  justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">

            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">creer un compte d'un adhérent</h3>
                    <form action="createadherent.php" method="post">
                              <div class="row">
                              <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                        <label class="form-label" for="nom">Nom</label>
                                        <input type="text" id="nom" name="nom" class="form-control form-control-lg" />
                                        
                                        </div>
                              </div>
                              <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                        <label class="form-label" for="prenom">Prenom</label>         
                                        <input type="text" id="prenom" name="prenom" class="form-control form-control-lg" />
                                        
                                        </div>
                              </div>
                              </div>

                              <div class="row">
                              <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                        <label class="form-label" for="cin">CIN</label>         
                                        <input type="text" id="cin" name="CIN" class="form-control form-control-lg" />
                                        
                                        </div>
                              </div>
                              <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                        <label class="form-label" for="tele">telephone</label>          
                                        <input type="tel" pattern="[0]{1}[5-8]{1}[0-9]{8}" id="tele" name="telephone" class="form-control form-control-lg" />
                                        
                                        </div>
                              </div>
                              </div>

                              <div class="form-outline mb-4">
                              <label class="form-label" for="email">email</label>
                              <input type="text" id="email" name="email" class="form-control form-control-lg" />
                              
                              </div>

                              

                              <div class="row">
                              <div class="col-md-6 mb-4">
                                        <label class="form-label" for="type">type</label>
                                        <select class="form-select" id="type" name="type">
                                        <option value=""></option>
                                        <option value="Etudiant">Etudiant</option>
                                        <option value="Fonctionnaire">Fonctionnaire</option>
                                        <option value="Employé">Employé</option>
                                        <option value="4">Femme au foyer</option>

                                        </select>

                              </div>
                              
                              </div>

                              <div class="form-outline mb-4">
                              <label class="form-label" for="adress">adresse</label>
                              <input type="text" id="adress" name="adresse" class="form-control form-control-lg" />
                              
                              </div>

                              <div class="form-outline mb-4">
                              <label class="form-label" for="date_de_naissance">date de naissance</label>
                              <input type="text" id="date_de_naissance" name="date_de_naissance" class="form-control form-control-lg" />
                              
                              </div>

                              <div class="form-outline mb-4">
                              <label class="form-label" for="user_name">nom d'utilisateur</label>
                              <input type="text" id="user_name" name="user_name" class="form-control form-control-lg" />
                              </div>

                              <div class="form-outline mb-4">
                              <label class="form-label" for="password">mot de passe</label>
                              <input type="text" id="password" name="password" class="form-control form-control-lg" />
                              
                              </div>

                              <div class="d-flex justify-content-end pt-3">
                                <button type="button" class="btn btn-light btn-lg"><a href="acceuil.php">Retour</a></button>
                                <button type="submit" name="enregistrer" class="btn btn-warning btn-lg ms-2">Enregistrer</button>
                              </div>
                    </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php 
          include "connect.php";

          if(isset($_POST['enregistrer'])){
                    $nom = $_POST['nom'];
                    $prenom = $_POST['prenom'];
                    $CIN = $_POST['CIN'];
                    $telephone = $_POST['telephone'];
                    $email = $_POST['email'];
                    $type = $_POST['type'];
                    $adresse = $_POST['adresse'];
                    $date_naissance = $_POST['date_de_naissance'];
                    $user_name = $_POST['user_name'];
                    $password = $_POST['password'];


                    $sql ="INSERT INTO `adherent`( `nom`, `prenom`, `adresse`, `email`, `telephone`, `CIN`, `date_de_naissance`, `type`, `user_name`, `password` ) VALUES ('$nom','$prenom','$adresse','$email','$telephone','$CIN','$date_naissance','$type','$user_name','$password') ";
                    $conn->exec($sql);
                    if($conn == true){
                              header("Location: \htdocs\mediatheque\Gerant\acceuil.php");
			exit();
                    }else{
                              echo "vous avez une problème";
                    }
                    
          }

?>




<style>
          .card-registration .select-input.form-control[readonly]:not([disabled]) {
          font-size: 1rem;
          line-height: 2.15;
          padding-left: .75em;
          padding-right: .75em;
          }
          .card-registration .select-arrow {
          top: 13px;
          }
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>