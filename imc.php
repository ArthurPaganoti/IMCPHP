<?php
$peso = $_POST['P'];
$altura = $_POST['A'];
$imc = $peso/($altura**2);
if ($imc < 18.5) {
    echo "Magreza";
} elseif ($imc >18.5 and $imc == 24.9) {
    echo "Normal";
} elseif ($imc >25 and $imc == 29.9) {
    echo "Sobrepeso";
} elseif ($imc >30) {
    echo "Obesidade";
}
