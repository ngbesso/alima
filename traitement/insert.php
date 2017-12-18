<?php 
	//echo "je suis pret";
$host="localhost";
$user="root";
$mdp="";
$db="db_codeuse";
$link = mysqli_connect($host,$user,$mdp);
mysqli_select_db($link,$db);

					/*$sql="UPDATE codeuses SET 
					nom='".$_POST['nom']."',
					prenom='".$_POST['prenom']."',
					telephone='".$_POST['tel']."',
					adresse='".$_POST['email']."',

					description='".$_POST['description']."'
					WHERE  id=".$_GET['id'];
					//die($sql);
				}else{*/
					
	$sql="INSERT INTO codeuses (nom,prenom,tel,adresse,description) VALUES('".$_POST["nom"]."','".$_POST["prenom"]."','".$_POST["telephone"]."','".$_POST["email"]."','".$_POST["description"]."');";
	//die($sql);	
		
				$result=mysqli_query($link,$sql);
				if ($result) {
					echo 1;
				}else{
					echo mysqli_error($link);
					die();
				}

 ?>