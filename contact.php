<?php
if(isset($_POST['submit']))
{

	$name=$_POST['fullname'];
	$mobileno=$_POST['mobileno'];
	$description=$_POST['description'];
	$emailid=$_POST['emailid'];

	if($name&&$mobileno&&$description&&$emailid)
	{

			echo "<script>alert('votre demande sera traiter et vous serrez contacter ulterieurement');</script>";
			header('location:entete.html');
		}


	}else echo"veuillez remplir tous les champs";


?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Contact </title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<!--start-wrap-->
		
			<!--start-header-->
			<div class="header">
				<div class="wrap">
				<!--start-logo-->
				<div class="logo">
		<a href="index.html" style="font-size: 30px;">Géolocalisation Cours</a> 
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav">
					<ul>
						<li><a href="entete.html">Home</a></li>
					
						<li class="active"><a href="contact.php">contact</a></li>
					</ul>					
				</div>
				<div class="clear"> </div>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
		</div>
		    <div class="clear"> </div>
		   <div class="wrap">
		   	<div class="contact">
		   	<div class="section group">				
				<div class="col span_1_of_3">
					
      			<div class="company_address">
				     	<h2>Adresse  :</h2>
						   		<p>22-56-2-9 Sit CENTRE, yaoundé,</p>
						   		<p>Cameroun</p>
				   		<p>Phone:(+237) 2690 666 444</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <span>info@mycompany.com</span></p>
				   	
				   </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h2>Contact</h2>
					    <form  method="post">
					    	<div>
						    	<span><label>NOM</label></span>
						    	<span><input type="text" name="fullname" required="true" value=""></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input type="email" name="emailid" required="ture" value=""></span>
						    </div>
						    <div>
						     	<span><label>NU.TELEPHONE</label></span>
						    	<span><input type="text" name="mobileno" required="true" value=""></span>
						    </div>
						    <div>
						    	<span><label>Description</label></span>
						    	<span><textarea name="description" required="true"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" name="submit" value="Soumettre"></span>
						  </div>
					    </form>
				    </div>
  				</div>				
			  </div>
			  	 <div class="clear"> </div>
	</div>
	<div class="clear"> </div>
			</div>
	      
	</body>
</html>

