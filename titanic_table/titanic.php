<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titanic</title>
</head>
<body>
<?php
    $file = fopen('titanic.csv', 'r') or die('Ошибка');
    flock($file, 1);
        echo '<table cellspacing="0" cellpadding="5" border="1" width="100%">';
        echo "\n";
    
    while(!feof($file)) {
        $Mass = fgetcsv($file, ',');
        $j = count($Mass);
            if ($j != 1) {
                echo '<tr align="center">' . "\n";
        for ($k=0; $k<$j; $k++) {
            echo '<td width="5%">';
            echo $Mass[$k];
            echo "</td>\n";
        }
                echo "</tr>\n";
            }
    }
    echo '</table>';
fclose($file);
?>
</body>
</html>
