<?php

# Exemple de création de différentes pièges, affiche le résultat en json.

require_once('./Models/Objects/Item.php');

$trap = new Item('trap', 0, 0, 1, 'top');
$trap2 = new Item('trap', 0, 8, 1, 'top');
$trap3 = new Item('trap', 7, 9, 1, 'top');

$traps = [$trap, $trap2, $trap3];

print_r(json_encode($traps));