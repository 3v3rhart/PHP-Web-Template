<!-- 
    name: inc_WebTemplate.php	
exercise: ch. 4, pages 215 - 217 
    date: 12.14.2021 
-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial=scale=1">

	<title>Web Template</title>
</head>
<body>
	<?php include("inc_header.html"); ?>
	<div style="width: 20%; text-align: center; float: left;">
		<?php include("inc_buttonnav.html"); ?>
	</div>

	<!-- Start of Dynamic Content Section -->
	<?php
	// check if the submit buttons were clicked or if we just opened the page
	if(isset($_GET["content"])){

		switch($_GET["content"]){
			case "About Me":
				include("inc_About.html");
				break;
			case "Contact Me":
				include("inc_Contact.html");
				break;
			default:
				include("inc_Home.html");
				break;

		} // end of switch
	}

	else {
		// no button was clicked
		include("inc_home.html");
	}

	?>
	<!-- End of Dynamic Content Section -->
	
	<?php include("inc_footer.php"); ?>
</body>
</html>