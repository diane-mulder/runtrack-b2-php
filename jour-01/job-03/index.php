<?php

function my_is_multiple(int $divider, int $multiple) : bool {

    return $multiple % $divider == 0;
}


if (my_is_multiple(2, 4) === true) {
    echo "Test 1 ok\n";
} else {
    echo "Test 1 ko\n";
}

if (my_is_multiple(2, 5) === false) {
    echo "Test 2 ok\n";
} else {
    echo "Test 2 ko\n";
}

?>