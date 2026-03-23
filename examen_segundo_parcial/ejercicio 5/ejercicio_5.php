<?php
if (isset($_GET['numini']) && isset($_GET['numfin'])) {
    $numini = intval($_GET['numini']);
    $numfin = intval($_GET['numfin']);
    if ($numini >= $numfin) {
        echo "El número inicial debe ser menor al número final.";
    } else {
        echo "Múltiplos de 3 o 5 entre $numini y $numfin:<br>";
        for ($i = $numini; $i <= $numfin; $i++) {
            if ($i % 3 == 0 || $i % 5 == 0) {
                echo "$i<br>";
            }
            }
        }
    }

