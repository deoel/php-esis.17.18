<!doctype html>
<html> 
    <head> 
        <title>Home</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="static/css/style.css" />
    </head>
    <body>
        <div id="content"> 
            <h1>LE MUR DES IDEES</h1><hr/>
			<form method="post" action="auth.php" id="form"> 
                <label>Email: </label>
				<input type="text" name="email" /><br />
				<label>Mot de passe: </label>
				<input type="password" name="pwd" /><br />
				<input type="submit" value="Se connecter" /> <a href="compte.php">Créer un compte</a>
            </form>
        </div>
    </body>
</html>