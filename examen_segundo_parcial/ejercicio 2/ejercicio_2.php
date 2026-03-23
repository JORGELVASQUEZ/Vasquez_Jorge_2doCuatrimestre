<?php
if (isset($_POST['num']) && is_numeric($_POST['num'])) {
    $num = intval($_POST['num']);

    if ($num % 2 == 0) {
        echo "El número $num es par.";
    } else {
        echo "El número $num es impar.";
    }
}
