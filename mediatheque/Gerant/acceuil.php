<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Acceuil</title>
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/med.css" rel="stylesheet" />
        <style>
            .py-2{
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: center;
                gap:    20px;
            }
            #btn{
                float: right;
                margin: 1%;
                width: 15%;
            }
        </style>
    </head>
    <body>
        <!-- navbar-->
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
        <!-- Header-->
        <header class="bg-white ">
             <div id="img"></div>
             <style>
                    #img{
                              background-image: url(images/mediat.jpg);   
                              height: 389px;
                              width: 100%;   
                    }
             </style>
        </header>
       
                    




                <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" id="btn" data-bs-target="#exampleModal">
        ajouter un ouvrage
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">ajouter</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="acceuil.php" enctype="multipart/form-data" method="post">
                    <div class="row mb-4">
                        <label for="titre" class="col-sm-3 col-form-label">titre</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control w-100" name="titre" class="form-control" >
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="nom_auteur" class="col-sm-3 col-form-label">nom d'auteur</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control w-100" name="nom_auteur" class="form-control" >
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="image" class="col-sm-3 col-form-label">image</label>
                        <div class="col-sm-8">
                            <input type="file" name="image" class="form-control" id="">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="etat" class="col-sm-3 col-form-label">etat</label>
                        <div class="col-sm-8">
                            <select class="form-select" name="etat" aria-label="Default select example">
                                <option selected></option>
                                <option value="Neuf">Neuf</option>
                                <option value="Bon état">Bon état</option>
                                <option value="Acceptable">Acceptable</option>
                                <option value="Assez usé">Assez usé</option>
                                <option value="Déchiré">Déchiré</option>

                            </select>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="type" class="col-sm-3 col-form-label">type</label>
                        <div class="col-sm-8">
                            <select class="form-select" name="type" aria-label="Default select example">
                                <option selected></option>
                                <option value="livre">livre</option>
                                <option value="roman">roman</option>
                                <option value="DVD">DVD</option>
                                <option value="magazine">magazine</option>
                                <option value="mémoire de recherche">mémoire de recherche</option>

                            </select>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="date_edition" class="col-sm-3 col-form-label">date d'edition</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control w-100" name="date_edition" class="form-control" >
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="date_achat" class="col-sm-3 col-form-label">date d'achat</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control w-100" name="date_achat" class="form-control" >
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="nombre_pages" class="col-sm-3 col-form-label">nombre de pages</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control w-100" name="nombre_pages" class="form-control" >
                        </div>
                    </div>
                
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">annuler</button>
                        <input type="submit" name="ajouter" class="btn btn-primary" value="ajouter">
                    </div>
                    </div>
                </form>
        </div>
        </div>
         <!-- Section-->            
            

        <?php
                        include "connect.php";
                        if(isset($_POST['ajouter'])){
                            $titre = $_POST['titre'];
                            $nom_auteur = $_POST['nom_auteur'];
                            
                            $etat = $_POST['etat'];
                            $type = $_POST['type'];
                            $date_edition = $_POST['date_edition'];
                            $date_achat = $_POST['date_achat'];
                            $nombre_pages =$_POST['nombre_pages'];

                            $image = $_FILES['image']['name'];
                            $target_dir = "images/";
                            move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $image);
                        
                            $sql= "INSERT INTO `ouvrage`(`titre`, `nom_auteur`, `image`, `etat`, `type`, `date_edition`, `date_achat`, `nombre_pages`) VALUES ('$titre','$nom_auteur','$image','$etat','$type','$date_edition','$date_achat','$nombre_pages')";
                            $conn->exec($sql);
                        
                            if($sql==true){
                                echo "Les informations de l'ouvrage ont été ajoutées avec succès.";
                            }else{
                                echo "Erreur lors de l'ajout des informations de l'ouvrage.";
                            }
                        }
                        
                    
                    ?>

        <!-- Section-->
        <section class="py-2">
        <style>
            .py-2{
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: center;
                gap:  20px 20px;
            }
        </style>
        <?php 
           include "connect.php";
           $ouvrage = $conn->query('SELECT * FROM `ouvrage`');
           $ouvrages = $ouvrage->fetchAll();

           foreach($ouvrages as $row){
            $id = $row['code_ouvrage'];
            // echo $id;
                    echo'
                    <div class="card" style="width: 16rem;">
                    <img src="images/'.$row['image'].'" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">'.$row['titre'].'</h5>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modifier'. $id.'">
                      modifier
                      </button>
                    

                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#supprimer'. $id.'">
                    Supprimer
                    </button>
                    </div>
                  </div>

                                <!-- Modal -->
                <div class="modal fade" id="supprimer'. $id.'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmation de suppression</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    Êtes-vous sûr de vouloir supprimer cette annonce ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <form action="delete.php" method="post">
                          <input type="hidden" value="'. $id.'" name="id" id="id">
                          <button type="submit" class="btn btn-danger">Confirmer</button>
                        </form>
                    </div>
                    </div>
                </div>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="modifier'. $id.'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">modifier ouvrage</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        
                        <form action="acceuil.php" enctype="multipart/form-data" method="post">
                            <div class="row mb-4">
                                <label for="titre" class="col-sm-3 col-form-label">titre</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control  w-100" value="'.$row['titre'].'" name="titre" class="form-control" >
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="nom_auteur" class="col-sm-3 col-form-label">nom auteur</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control w-100" value="'.$row['nom_auteur'].'" name="nom_auteur" class="form-control" >
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="image" class="col-sm-3 col-form-label">image</label>
                                <div class="col-sm-8">
                                    <input type="file" name="image" value="'.$row['image'].'" class="form-control" id="">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="etat" class="col-sm-3 col-form-label">etat</label>
                                <div class="col-sm-8">
                                    <select class="form-select" name="etat" aria-label="Default select example">
                                        <option selected>'.$row['etat'].'</option>
                                        <option value="Neuf">Neuf</option>
                                        <option value="Bon état">Bon état</option>
                                        <option value="Acceptable">Acceptable</option>
                                        <option value="Assez usé">Assez usé</option>
                                        <option value="Déchiré">Déchiré</option>

                                    </select>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="type" class="col-sm-3 col-form-label">type</label>
                                <div class="col-sm-8">
                                    <select class="form-select" name="type" aria-label="Default select example">
                                        <option selected>'.$row['type'].'</option>
                                        <option value="livre">livre</option>
                                        <option value="roman">roman</option>
                                        <option value="DVD">DVD</option>
                                        <option value="magazine">magazine</option>
                                        <option value="mémoire de recherche">mémoire de recherche</option>

                                    </select>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="date_edition" class="col-sm-3 col-form-label">date edition</label>
                                <div class="col-sm-8">
                                    <input type="date" value="'.$row['date_edition'].'" class="form-control w-100" name="date_edition" class="form-control" >
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="date_achat" class="col-sm-3 col-form-label">date achat</label>
                                <div class="col-sm-8">
                                    <input type="date" value="'.$row['date_achat'].'" class="form-control w-100" name="date_achat" class="form-control" >
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="nombre_pages" class="col-sm-3 col-form-label">nombre de pages</label>
                                <div class="col-sm-8">
                                    <input type="text" value="'.$row['nombre_pages'].'" class="form-control w-100" name="nombre_pages" class="form-control" >
                                </div>
                            </div>
                        
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">annuler</button>

                                <input type="hidden" value="'. $id.'" name="id" id="id">
                                <input type="submit" name="submit" class="btn btn-primary" value="modifier">
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
                </div>

                    ';
           }
        
        ?>
        </section>
        
        <?php 
                if(isset($_POST['submit'])){
                    $id = $_POST['id'];
                    $titre = $_POST['titre'];
                    $nom_auteur = $_POST['nom_auteur'];
                    $etat = $_POST['etat'];
                    $type = $_POST['type'];
                    $date_edition = $_POST['date_edition'];
                    $date_achat = $_POST['date_achat'];
                    $nombre_pages =$_POST['nombre_pages'];

                    $image = $_FILES['image']['name'];
                    $target_dir = "images/";
                    move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $image);
                
                    $sql= "UPDATE `ouvrage` SET `titre`='$titre',`nom_auteur`='$nom_auteur',`image`='$image',`etat`='$etat',`type`='$type',`date_edition`='$date_edition',`date_achat`='$date_achat',`nombre_pages`='$nombre_pages' WHERE code_ouvrage='$id' ";
                    $conn->exec($sql);
                
                    if($sql == true){
                        exit();
                    }else{
                        echo "Erreur lors de l'ajout des informations de l'ouvrage.";
                    }
                }
            

        ?>
        <button type="submit" name="enregistrer" id="btn" class="btn btn-warning btn-lg ms-1"><a href="createadherent.php"> create adherent</a></button>

        

      
        <!-- Footer-->
        <footer class="py-4 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
