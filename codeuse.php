<!DOCTYPE html>

<?php 
$host="localhost";
$user="root";
$mdp="";
$db="db_codeuse";
$link = mysqli_connect($host,$user,$mdp);
mysqli_select_db($link,$db);

if (isset($_GET['id'])){
	$update="SELECT * FROM codeuses WHERE id=".$_GET['id'];
	$res=mysqli_query($link,$update);
	$dataU=mysqli_fetch_array($res);
}

if (isset($_GET['sup'])){
	$delete="DELETE FROM codeuses WHERE id=".$_GET['sup'];
	$res=mysqli_query($link,$delete);
}

 ?>


<html>
  <head>
	<meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
  </head>
   <body>
   	<div class="container">

   		<div class="row well">

   			<div class="col-md-2"></div>

   			<div class="col-md-8">

   				<h1 class="text-center"><a href="?">Formulaire d'inscription</a></h1>

		<form action="" method="POST" role="form" name="form1">
			<legend>Mon Formulaire</legend>
		
			<div class="form-group">
				<label for="">Nom</label>
				<input id="nom" type="text" class="form-control" name="nom" value="<?php if (isset($_GET['id'])) echo $dataU['nom']; ?>">
			</div>

			<div class="form-group">
				<label for="">Prenom</label>
				<input id="prenom" type="text" class="form-control" name="prenom" value="<?php if (isset($_GET['id'])) echo $dataU['prenom']; ?>">
			</div>

			<div class="form-group">
				<label for="">Telephone</label>
				<input type="text" id="tel" class="form-control" name="tel" value="<?php if (isset($_GET['id'])) echo $dataU['telephone']; ?>">
			</div>

			<div class="form-group">
				<label for="">Email</label>
				<input type="text" id="email" class="form-control" name="email" value="<?php if (isset($_GET['id'])) echo $dataU['adresse']; ?>">
			</div>

			<div class="form-group">
				<label for="">Description</label>
				<textarea name="description" id="description" class="form-control" rows="3" required="required"><?php if (isset($_GET['id'])) echo $dataU['description']; ?></textarea>
			</div>
		
			
		
			<button  type="submit" class="btn btn-success btn-lg btn-block" id="btnValider" value="enregistrer" name="submit">Valider</button>
		</form>


   			</div>

   			<div class="col-md-2"></div>

   		</div>


   	</div>	

<br>

<div class="container">
<table class="table" >

	<tr>
			<td>Numero</td>
			<td>Nom</td>
			<td>Prenom</td>
			<td>Adresse</td>
			<td>Telephone</td>
			<td>Description</td>
			<td>Action</td>
	</tr>

	<?php 
		$n=1;
		$requete="SELECT * FROM codeuses";
		$result=mysqli_query($link,$requete);
		while ($data=mysqli_fetch_array($result)) {

	 ?>

	<tr>
			<td><?php echo $n; ?></td>
			<td><?php echo $data['nom']; ?></td>
			<td><?php echo $data['prenom']; ?></td>
			<td><?php echo $data['adresse']; ?></td>
			<td><?php echo $data['tel']; ?></td>
			<td><?php echo $data['description']; ?></td>
			<td>

				<button type="button" class="btn btn-info"><a href="?id=<?php echo $data['id']; ?>">Modifier</a></button>

				<button type="button" class="btn btn-warning"><a href="?sup=<?php echo $data['id']; ?>">Supprimer</a></button>
			</td>
	</tr>
<?php
	$n++;
	 }
 ?>
</table>
</div>
		<?php 
			

		?>
<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/control.js"></script>
</body>
</html>