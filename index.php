<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre * -->

<?php

$text = "La vispa Teresa avea fra l'erbetta al volo sorpresa gentil farfalletta";
$badword = $_GET["badword"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>

    <p>
        <?php echo $text;
            echo strlen($text);
        ?>
    </p>

    <p>
        <?php
            $censoredText = str_replace($badword, "***", $text);
            echo $censoredText;
            echo strlen($censoredText);
        ?>
    </p>
    
</body>
</html>