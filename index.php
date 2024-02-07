<?php
    require_once __DIR__.'/partials/db.php';
    require_once __DIR__.'/partials/variables.php';

    $num = 22;

    function sum($numOne, $numTwo) {
        return $numOne + $numTwo;
    }

    echo '<div>Il frutto '.$fruit.' è '.$color.'</div>';

    $fruit = 'banana';
    $color = 'yellow';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Template PHP</title>
    </head>
    <body>

        <header>
            HEADER
        </header>

        <main>
            La somma di <?php echo $num; ?> e 3 è
            <?php
                echo sum($num, 3);
            ?>
        </main>

        <?php
            require_once __DIR__.'/partials/footer.php';
        ?>
    </body>
</html>