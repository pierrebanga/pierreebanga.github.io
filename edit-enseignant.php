<?php
session_start();
//error_reporting(0);
include('config.php');
if(isset($_POST['change']))
{
$nom=$_POST['name'];
$mail=$_POST['mail'];
$tel=$_POST['tel'];
$ville=$_POST['ville'];
$quartier=$_POST['quartier'];
$rue=$_POST['rue'];
$mensualite=$_POST['mensualite'];

$query=mysqli_query($con,"update enseignant set email='$mail',telephone='$tel',ville='$ville',quartier='$quartier',
	rue='$rue',mensualiter='$mensualite' where nom='".$_SESSION['login']."'");
if ($query) {
echo "<script>alert('Profil mis a jour correctement');</script>";
	
}
else{
echo "<script>alert('Informations incorrect,veuillez reesayer s'il vous plait');</script>";
}

}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Mise a jour du profils</title>
		
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
		<div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
				<?php include('include/header.php');?>
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Mettre a jour Mon profil</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Enseignant</span>
									</li>
									<li class="active">
										<span>Detail de l'enseignant</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">modifier Enseignant</h5>
												</div>
												<div class="panel-body">
									
													<form role="form" name="adddoc" method="post" onSubmit="return valid();">
														

<div class="form-group">
															<label for="">
																 E-mail
															</label>
	<input type="text" name="mail" class="form-control"  placeholder="votre nouvelle adresse Mail"/>
														</div>

<div class="form-group">
															<label for="">
																 Numero de telephone
															</label>
	<input type="text" name="tel" class="form-control"  placeholder="votre nouveaux Numero de telephone"/>
														</div>


													<div class="form-group">
															<label for="">
																 Ville
															</label>
	<input type="text" name="ville" class="form-control"  placeholder="votre nouvelle ville"/>
														</div>



														<div class="form-group">
															<label for="">
																 Quartier
															</label>
	<input type="text" name="quartier" class="form-control"  placeholder="votre nouveaux Quartier"/>
														</div>



														<div class="form-group">
															<label for="">
																 Rue
															</label>
	<input type="text" name="rue" class="form-control" placeholder="votre nouvelle Rue"/>
														</div>


														<div class="form-group">
															<label for="">
																 Mensualiter
															</label>
	<input type="text" name="mensualite" class="form-control" placeholder="votre nouvelle Mensualit??"/>
														</div>

													







														
													
														
														
														<div class="form-actions">
								
								<button type="submit" class="btn btn-primary pull-right" name="change">
									Mettre a jour <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
													</form>
												</div>
											</div>
										</div>
											
											</div>
										</div>
									
								</div>
							
						<!-- end: BASIC EXAMPLE -->
			
					
					
						
						
					
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	<?php include('include/setting.php');?>
			<>
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
