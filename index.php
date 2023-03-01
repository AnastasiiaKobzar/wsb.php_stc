<?php
$firstName = "Janusz";
$lastName = "Nowak";
echo "Imie i nazwisko : $firstName $lastName";

//heredoc

echo <<< DATA
<hr>
Imie: $firstName<br>
Nazwisko: $lastName<br>
DATA;
?>