<?php
session_start();
error_reporting(0);
include('config.php');

if(isset($_POST['submit']))
 {

 $query=mysqli_query($con,"insert into commande(nom_A,id_e,date,id_a) 
values('".$_SESSION['login']."','".$_GET['viewid']."','2001/03/09','".$_SESSION['id']."')");
if($query)
{
	echo "<script>alert('Félicitation, votre commande est prise en compte');</script>";
header('location:manages.php');
}
}
  


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>recherche d'enseignant</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
	</head>
	<body>
		<form class="form-login" method="post" onSubmit="return valid()";>
		<div id="app">		
<?php include('include/sidebare.php');?>
<div class="app-content">
<?php include('include/header.php');?>
<div class="main-content" >
<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
<section id="page-title">
<div class="row">
<div class="col-sm-8">
<h1 class="mainTitle">Details Enseignant</h1>
</div>
<ol class="breadcrumb">
<li>
<span>Apprenant</span>
</li>
<li class="active">
<span>recherche</span>
</li>
</ol>
</div>
</section>
<div class="container-fluid container-fullw bg-white">
<div class="row">
<div class="col-md-12">
<h5 class="over-title margin-bottom-15">Manage <span class="text-bold">Patients</span></h5>
<?php
                               $vid=$_GET['viewid'];
                               $ret=mysqli_query($con,"select * from enseignant where id_e='$vid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
                               ?>
<table border="1" class="table table-bordered">
 <tr align="center">
<td colspan="4" style="font-size:20px;color:blue">
 Details de l'enseignant</td></tr>

    <tr>
    <th scope>Nom de l'enseignant</th>
    <td><?php  echo $row['nom'];?></td>
    <th scope>Email de l'enseignant</th>
    <td><?php  echo $row['email'];?></td>
  </tr>
  <tr>
    <th scope>Prénom de l'enseignant</th>
    <td><?php  echo $row['telephone'];?></td>
    <th>Photo de l'enseignant</th>
    <td><?php  echo $row['photo'];?></td>
  </tr>
    <tr>
    <th>SEXE</th>
    <td><?php  echo $row['sexe'];?></td>
    <th>Date de naissance</th>
    <td><?php  echo $row['date_naissance'];?></td>
  </tr>
  <tr>
    
    <th>Prix</th>
    <td><?php  echo $row['mensualiter'];?></td>
     <th>Ville</th>
    <td><?php  echo $row['ville'];?></td>
  </tr>


  <tr>
    
    <th>Quartier</th>
    <td><?php  echo $row['quartier'];?></td>
     <th>Rue</th>
    <td><?php  echo $row['rue'];?></td>
  </tr>

  <tr>
    
    <th>Niveau scolaire de l'enseignant</th>
    <td><?php  echo $row['niveau_scolaire'];?></td>
     <th>Matiere</th>
    <td><?php  echo $row['matiere_solliciter'];?></td>
  </tr>
 
<?php }?>
</table>

<div class="form-actions">
								
								<button type="submit" class="btn btn-primary pull-right" name="submit">
									commander cet enseigant <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>




</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
	</form>
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	<?php include('include/setting.php');?>
			
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
