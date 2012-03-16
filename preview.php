<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulaire de Réservation d'un billet d'avion</title>
    </head>
    <body>
        <div id ="container">
           <?php
           echo '<ul>';
           
            foreach ($_POST as $element)
            {
                if($element=='bool1')
                {
                echo '<li>oui</li>';
                }
                elseif($element=='bool0')
                {
                  echo '<li>non</li>';  
                }
                 else 
                     {
                        echo '<li>'.$element.'</li>';
                    }
            }
                
           echo '</ul>';
            ?>
        </div>
        
    </body>
</html>

