<?php
include_once('config.php');
if(isset($_POST['submit']))
{
$nom=$_POST['username'];
$prenom=$_POST['prenom'];
$password=$_POST['password'];
$date_naissance=$_POST['date'];
$telephone=$_POST['telephone'];
$photo=$_POST['image'];
$sexe=$_POST['sexe'];
$email=$_POST['email'];
$mensualiter=$_POST['prix'];
$rue=$_POST['rue'];
$quartier=$_POST['quartier'];
$ville=$_POST['ville'];
$niveau_scolaire=$_POST['etude'];
$matiere_solliciter=$_POST['matiere'];

$query=mysqli_query($con,"insert into enseignant(nom,prenom,password,date_naissance,telephone,photo,sexe,email,mensualiter,rue,quartier,ville,niveau_scolaire,matiere_solliciter) 
values('$nom','$prenom','$password','$date_naissance','$telephone','$photo','$sexe','$email','$mensualiter','$rue','$quartier','$ville','$niveau_scolaire','$matiere_solliciter')");
if($query)
{
	echo "<script>alert('Félicitation, votre inscription est réussie');</script>";
	header('location:ensei login.php');
}
}
?>


<!DOCTYPE html>
<html lang="en">

	<head>
		<title>inscription</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
		
		<script type="text/javascript">
function valid()
{
 if(document.registration.password.value!= document.registration.password_again.value)
{
alert("Les deux mots de passe ne correspondent pas  !!");
document.registration.password_again.focus();
return false;
}
return true;
}
</script>
		

	</head>

	<body class="login">
		<!-- start: REGISTRATION -->
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
				<a href="../index.html"><h2>Inscription</h2></a>
				</div>
				<!-- start: REGISTER BOX -->
				<div class="box-register">
					<form name="registration" id="registration"  method="post" onSubmit="return valid();">
						<fieldset>
							<legend>
								Inscrivez vous
							</legend>
							<p>
								Enter vos informations personnelles:
							</p>
							<div class="form-group">
								<input type="text" class="form-control" name="full_name" placeholder="Nom" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="address" placeholder="Prénom" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="city" placeholder="Ville" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="city" placeholder="Quartier" required>
							<div class="form-group"></div>
								<input type="text" class="form-control" name="city" placeholder="Rue" required>
							</div>

                            <div class="form-group">
								<input type="text" class="form-control" name="prix" placeholder="Mensualité/heure" required>
							
                            <div class="form-group"> </div>
								<input type="text" class="form-control" name="etude" placeholder="Niveau scolaire" required>

								<div class="form-group"> </div>
								<input type="text" class="form-control" name="telephone" placeholder="+237" required>



								<div class="form-group"> </div>
								<input type="text" class="form-control" name="matiere" placeholder="Matiere solliciter" required>

							
                          <div class="form-group"> </div>
								<input type="date" class="form-control" name="date" placeholder="" required>

                            <div class="form-group"> </div>
								<input type="file" class="form-control" name="image"  required>


								


							</div>
							<div class="form-group">
								<label class="block">
									SEXE
								</label>
								<div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="sexe" value="feminin" >
									<label for="rg-female">
										Féminin
									</label>
									<input type="radio" id="rg-male" name="sexe" value="masculin">
									<label for="rg-male">
										Masculin
									</label>
								</div>
							</div>
							<p>
								entrer les informations supplémentaires:
							</p>
							<div class="form-group">
								<span class="input-icon">
									<input type="email" class="form-control" name="email" id="email" onBlur="userAvailability()"  placeholder="E-mail" required>
									<i class="fa fa-envelope"></i> </span>
									 <span id="user-availability-status1" style="font-size:12px;"></span>
							</div>
							<div class="form-group">
								<span class="input-icon">
									<input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required>
									<i class="fa fa-lock"></i> </span>
							</div>
							<div class="form-group">
								<span class="input-icon">
									<input type="password" class="form-control"  id="password_again" name="password_again" placeholder="Confirmer le mot de passe" required>
									<i class="fa fa-lock"></i> </span>
							</div>
							<div class="form-group">
								<div class="checkbox clip-check check-primary">
									<input type="checkbox" id="agree" value="agree" checked="true" readonly=" true">
									<label for="agree">
										j'accepte
									</label>
								</div>
							</div>
							<div class="form-actions">
								<p>
									vous avez deja un compte?
									<a href="ensei login.php">
										Allez-y
									</a>
								</p>
								<button type="submit" class="btn btn-primary pull-right" id="submit" name="submit">
									Soumettre<i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
						</fieldset>
					</form>

					<div class="copyright">
						&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> GC</span>. <span>All rights reserved</span>
					</div>

				</div>

			</div>
		</div>
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
		<script src="assets/js/main.js"></script>
		<script src="assets/js/login.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
		
	<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>	
		
	</body>
	<!-- end: BODY -->
</html>