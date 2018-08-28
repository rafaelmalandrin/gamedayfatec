<!doctype html>
<html lang="pt-br">
    <head>
	<!-- Favicons -->
        <link rel="shortcut icon" href="imagens/favicon.png" type="image/x-png"/> 

        
	<!-- Required meta tags -->
        
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="content-language" content="pt-br, en-US, fr" />

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		
	<link href="css/css.css" rel="stylesheet" type="text/css" />
				
	<link rel="sortcut icon" href="imagens/favicon.ico" type="image/x-icon" />
	<title>ame day</title>
                               
        <!-- rede social -->
        
        <link href="assets/css/font-awesome.css" rel="stylesheet">
        <link href="assets/css/docs.css" rel="stylesheet" >
        <link href="assets/bootstrap-social.css" rel="stylesheet" >
        
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/until.js" ></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/carousel.js"></script>
    </head>
    <body>    
        <div id="site">

            <?php include 'top.php'; ?>

            <div id="cont" >
				
                <?php
                    $parametro = isset($_GET['p']) ? $_GET['p'] : "home";
        
                    include("$parametro.php");
		?>
	
            </div>

            <?php include 'rod.php'; ?>
	</div>
    </body>
</html>
