<?php
session_start();
error_reporting(0);
include('config.php');


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>recherche enseignant</title>
		
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
<?php include('include/sidebare.php');?>
<div class="app-content">
<?php include('include/header.php');?>
<div class="main-content" >
<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
<section id="page-title">
<div class="row">
<div class="col-sm-8">
<h1 class="mainTitle">Recherche de l'enseignant</h1>
</div>
<ol class="breadcrumb">
<li>
<span>apprenant</span>
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
	<form role="form" method="post" name="search">

<div class="form-group">
<label for="doctorname">
recherche par la ville / le prix / la matiere.
</label>
<input type="text" name="searchdata" id="searchdata" class="form-control" value="" required='true'>
</div>

<button type="submit" name="search" id="submit" class="btn btn-o btn-primary">
recherche
</button>
</form>
<?php
if(isset($_POST['search']))
{ 

$sdata=$_POST['searchdata'];
  ?>
  <h4 align="center">Le resultat de  "<?php echo $sdata;?>" est </h4>
<table class="table table-hover" id="sample-table-1">
<thead>
<tr>
<th class="center">#</th>
<th> Nom</th>
<th> prenom</th>
<th>Date de naissance</th>
<th>Sexe </th>
<th> Mensualiter</th>
<th> quartier</th>
<th> rue</th>
<th> Matiere</th>
<th>Disponibilit?? </th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php

$sql=mysqli_query($con,"select * from enseignant where  disponibilite='disponible' and ville like '%$sdata%'||      mensualiter like '%$sdata%' || matiere_solliciter like '%$sdata%' ");
$num=mysqli_num_rows($sql);
if($num>0){
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>
<tr>
<td class="center"><?php echo $cnt;?>.</td>
<td class="hidden-xs"><?php echo $row['nom'];?></td>
<td><?php echo $row['prenom'];?></td>
<td><?php echo $row['date_naissance'];?></td>
<td><?php echo $row['sexe'];?></td>
<td><?php echo $row['mensualiter'];?>
</td>
<td><?php echo $row['quartier'];?></td>
<td><?php echo $row['rue'];?></td>
<td><?php echo $row['matiere_solliciter'];?></td>
<td><?php echo $row['disponibilite'];?></td>
<td>

<a href="resultat.php?viewid=<?php echo $row['id_e'];?>"><i class="fa fa-eye"></i></a>

</td>
</tr>
<?php 
$cnt=$cnt+1;
} } else { ?>
  <tr>
    <td colspan="8"> Aucun resulatat li?? a cette recherche</td>

  </tr>
   
<?php } }?></tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
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
