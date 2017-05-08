<?php session_start();
include 'Header/header.php';
include 'scriptsphp/verif.php'; ?>
<!DOCTYPE HTML>
<html>
<head> 
			<!-- Stylesheet -->
		<link  rel="stylesheet" type="text/css" href="Footer/footer.css"> 
		<link  rel="stylesheet" type="text/css" href="css/stylepage.css">
		<link rel="stylesheet" type="text/css" href="Header/header.css">
		<link rel="stylesheet" type="text/css" href="css/accueil.css">
			<!-- Stylesheet -->
<meta charset="UTF-8">
</head>
<body>
<div class="pagecontainer">
<h1 class="accueilh1">Bienvenue <?php echo $utilisateur;?> sur le Fortress Market!</h1>
<p class="accueilp">Vous jouez au jeu TeamFortress2? Vous achetez et vendez des objets virtuels sur le marché steam? Alors vous avez trouvé le site qu'il vous faut!</p>
<h3 class="accueih3">Qu'est-ce que le Fortress Market?</h3>
<p class="accueilp">Le site Fortress Market, est un site utilitaire, à seul but de vous simplifier la vie lors de vos transactions sur le <a href="http://www.steammarket.fr" target="_blank">marché steam</a>.
 Vous n'avez plus besoin de regarder le prix des objets, nous nous en occupons à votre place!
 Notre système vous alertera par mail lorsque le plus d'un objet vous convient!</p>
<h3 class="accueih3">Comment fonctionne le système?</h3>
<p class="accueilp">Grâce à l'interface simple d'utilisation, vous pouvez choisir un prix pour chaque objet de votre choix. Lorsque ce prix est atteint un e-mail sera envoyé à l'adresse: <?php $_SESSION['mail'];?> (adresse mail que vous avez indiqué lors de votre inscription).</p>
<h3 class="accueih3">Comment s'en servir?</h3>
<p class="accueilp">Il n'y a rien de plus simple, rendez vous sur la page <a href="objets.php"> Tous les objets</a> et cliquez sur le bouton <img src="Images/add.png" style="width: 25px; height: 25px;"> situé à coté de l'objet qui vous intéresse. Une fenêtre s'ouvre alors, vous aurez simplement besoin de rentrer un prix minimum pour lequel le site doit vous notifier.
Pour retirer un objet de la liste des objets que vous suivez, rendez vous sur la page <a href="suivis.php"> Objets suivis</a> et cliquez sur le bouton <img src="Images/del.png" style="width: 25px; height: 25px;"></p>
</div>
<?php include 'Footer/footer.php';?>
</body>
</html>