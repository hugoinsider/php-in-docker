<?php
require('vendor/autoload.php');

use Michelf\Markdown;

$html = Markdown::defaultTransform("<p>Iae men</p>")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
    echo $html;
    ?>
</body>
</html>