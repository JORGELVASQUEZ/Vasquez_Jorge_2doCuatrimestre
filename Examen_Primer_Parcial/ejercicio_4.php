<?php
$palabras = ['uva', 'pip', 'pop','oso', 'esa'];
$palindromos = [];
foreach($palabras as $palabra){
    if($palabra == strrev($palabra)){
        array_push($palindromos, $palabra);
    }
}
echo("<p> Palabras: " . implode(", ", $palabras). "</p>");
echo("<p> Palindromos: " . implode(", ", $palindromos). "</p>");
?>