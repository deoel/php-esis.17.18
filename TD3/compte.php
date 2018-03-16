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
			<form method="post" action="new_compte.php" id="form"> 
                <label>Prénom & Nom: </label>
                <input type="text" name="nom" /><br />
                <label>Email: </label>
                <input type="text" name="email" /><br />
				<label>Mot de passe: </label>
				<input type="password" name="pwd" /><br />
				<label>Confirmer le mot de passe: </label>
				<input type="password" name="pwdconf" /><br />
				<input type="submit" value="Enregistrer" />
            </form>
        </div>
    </body>
</html>