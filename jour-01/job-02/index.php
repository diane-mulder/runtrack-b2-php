<?php
function my_str_reverse(string $string) : string{
    return strrev($string);

}
$chaine_a_inverser = "Hello";
$chaine_inversee = my_str_reverse($chaine_a_inverser);

echo $chaine_inversee; // Affichera "olleH"


?>
