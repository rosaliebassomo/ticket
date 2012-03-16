<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulaire de Réservation d'un billet d'avion</title>
    </head>
    <body>
        <div id ="container">
            <h1>Formulaire</h1>
            <form method="POST" action="./preview.php" >
                <fieldset>
                    <legend>Réserver mon billet</legend>
                    <label>Nom</label>
                    <input type="text" name="firstname"></input>
                    <label>Prenom</label>
                    <input type="text" name="lastname"></input>
                    <label>Email</label>
                    <input type="text" name="email"></input>
                    <label>Destination</label>
                    
                    <select name="destination">                        
                        <option value="es">Espagne</option>
                        <option value="it">Italie</option>
                        <option value="us">Etats-Unis</option>
                        <option value="fr">France</option>
                    </select>
                    
                    <label>Informations particulières de santé</label>
                    <textarea name="infosante" rows="4" cols="40"></textarea>
                    
                    <label>Voyagez vous seul?</label>
                    <input type="radio" name="alonetravel" value="bool1"></input>oui
                    <input type="radio" name="alonetravel" value="bool0"></input>non
                    <input type="submit" value="Prévisualiser ma commande"></input>
                    
                </fieldset>
                
            </form>
            <?php
           
            ?>
        </div>
        
    </body>
</html>
