<?php include('parts/includes.php'); ?>
<!DOCTYPE html>

<HTML>
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta content="Renee P's portfolio of illustration, design, and other works." name="description">
	<meta content="Renee P" name="author">
	
	<link href="" rel="favicon">
	
	<title>
	<?php
		// Get the name of the script file, not of the included file
		$name = $includes[basename($_SERVER['SCRIPT_FILENAME'])]['name'];
		if( $name!='' ){
			$name .= ' : ';
		}
		$name .= 'laughingbear';
		echo $name;
	?>
	</title>
	
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/laughingbear.css" rel="stylesheet">
	
</head>
<body>

<div class="container">
<div class="template-laughingbear">
<?php include('parts/menu.php'); ?>