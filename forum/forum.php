<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
   <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Workshop</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="active"><a href="#">Forum</a></li>
    </ul>
    <form class="navbar-form navbar-left" action="/action_page.php">
      
      
    </form>
  </div>
  </nav>

</head>

<?php  
	
	// Connexion à la base de données
	try
	{
		$bdd = new PDO('mysql:host=localhost:3306;dbname=workshop;charset=utf8', 'root', 'root');
	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
	}
	?>
	<main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
    	<br>

      <div class="container">
  
        <!-- Formulaire -->

        <h2>Forum</h2>
        <h4>Rajoutez un topic</h4>
        <br>
        <form method="post" action="forum_post.php">
	    	<div class="form-group">
	        	<label for="sujet">Sujet:</label>
	        	<input type="sujet" class="form-control" id="sujet" placeholder="Entrez le titre de votre topic" name="sujet">
	    	</div>
	    	<div class="form-group">
				<label for="sel1">Categorie :</label>
				<select class="form-control" id="categorie" name="categorie">
					<?php 
						$req = $bdd->query('SELECT * FROM categorie_topic');
    					while ($donnes = $req->fetch())
    					{
    				?>
    						<option><?php echo $donnes['nom'] ?></option>

    						<?php
    					}
					 ?>
				</select>
			</div>

          	<div class="form-group">
			  <label for="contenu">Contenu de votre topic:</label>
			  <textarea class="form-control" rows="5" id="contenu" name="contenu"></textarea>
			</div>
          <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
      </div>
    </div>

</body>
</html>