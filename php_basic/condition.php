<?php

$age = 40;
if ($age <= 3) {
echo "Baby";
} elseif ($age <= 12) {
echo "Child";
} elseif ($age < 18) {
echo "Teenager";
} elseif ($age >= 18 && $age <= 35) {
echo "Adult";
} else {
echo "Eldery Person";
}

?>