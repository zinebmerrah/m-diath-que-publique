<?php
   		include "connect.php";

		if(isset($_POST['submit'])) {
			$username = $_POST["username"];
            		$password = $_POST["password"];
        
            		$connexion = $conn->prepare("SELECT * FROM adherent WHERE user_name= :user_name AND password = :password");
			$connexion->bindParam(':user_name', $_POST['username']);

			$connexion->bindParam(':password', $_POST['password']);
        
			$connexion->execute();
			$result = $connexion->fetch(PDO::FETCH_ASSOC);

			if ($connexion->execute()) {
				$result = $connexion->fetch(PDO::FETCH_ASSOC);
				if ($result) {
					// echo'	utilisateur connecté avec succès';
					header("Location: acceuil.php");
					exit();
				} else {
					// nom d'utilisateur ou mot de passe incorrect
					$error = "Nom d'utilisateur ou mot de passe incorrect";
				}
			} else {
				// erreur de connexion à la base de données
				$error = "Erreur de connexion à la base de données";
			}
		

        
           
        }







        $sth = $conn->prepare("SELECT * FROM `adherent`");
        $sth->execute();
        $response = $sth->fetchAll();

       ?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Médiathèque publique</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			
			<div class="row justify-content-center">
                              <h2 class="mb-4">Bienvenue dans notre médiathèque</h2>
				<div class="col-md-12 col-lg-10">
				<div class="wrap d-md-flex">
					<div class="img" style="background-image: url(images/media.jpg);">
			      	</div>
				<div class="login-wrap p-4 p-md-5">
                                                            
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Se connecter</h3>
			      		</div>
								
			      	</div>
			<form action="login.php" method="post" class="signin-form">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">nom d'utilisateur</label>
			      			<input type="text" class="form-control" name="username" placeholder="nom d'utilisateur" required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Mot de passe</label>
		              <input type="password" name="password" class="form-control" placeholder="Mot de passe" required>
		            </div>
		            <div class="form-group">
		            	<button type="submit" name="submit" class="form-control btn btn-primary rounded submit px-3">Connecter</button>
		            </div>
		            <div class="form-group d-md-flex">
		            	
				<div class="w-50 text-md-right">
					<a href="#">mot de passe oublier ?</a>
				</div>
		            </div>
		          </form>
		          
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

