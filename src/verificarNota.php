<?php

function verificarNota($nota) {
    if ($nota >= 60) {
        return "Primera Divisió";
    } elseif ($nota >= 45) {
        return "Segona Divisió";
    } elseif ($nota >= 33) {
        return "Tercera Divisió";
    } else {
        return "Reprovat";
    }
}
?>
