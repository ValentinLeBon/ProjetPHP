<?php
    if ($id!=0) erreur(ERR_IS_CO);

if (isset($_POST['submit']))
{
    if(empty($_POST['Nom']) and empty($_POST['Prenom']) and empty($_POST['email']) and empty($_POST['password']) and empty($_POST['repeatpassword']))
    {
        if (strlen($password)>=6)
        {
            if ($password==$repeatpassword)
            {
                $password = md5($password);
                $dbconnect = new mysqli ("localhost","root","","root"); 
                $sql = "INSERT INTO newclient VALUES ('','$Username','email','$password')"; 
                if (!$dbconnect->query($sql))
                {
                    printf("Message d'erreur : %s\n", $dbconnect->error);
                }
            // on ferme la connexion
            mysqli_close($dbconnect); 
            }
            else echo "Les mots de passe ne sont pas identiques";
        }
        else echo "Le mot de passe est trop court !";
    }
    else echo "Veuillez saisir tous les champs !";  
}   
?>

<!DOCTYPE html>
<html>
<head>
<title>Inscription</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Inscription</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="#" method="post">
					<input class="text" type="text" name="Username" placeholder="Username" required="">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="password" name="password" placeholder="Mot de Passe" required="">
					<input class="text w3lpass" type="password" name="repeatpassword" placeholder="Retaper le mot de passe" required="">
					<input type="submit" value="Inscription">
				</form>
				<p>Déja un compte ?<a href="login.php"> Connectez vous </a></p>
			</div>
		</div>
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>