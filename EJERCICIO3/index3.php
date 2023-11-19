<?php
session_start();

if (!isset($_SESSION['visitas'])) {
    
    $_SESSION['visitas'] = 1;
} else {
    
    $_SESSION['visitas']++;
}

echo "Número de visitas: " . $_SESSION['visitas'];
?>
