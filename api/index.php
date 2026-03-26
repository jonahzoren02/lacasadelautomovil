<?php
// Prueba básica de funcionamiento
echo "Servidor PHP funcionando. Buscando autoload... ";

if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    echo "Autoload encontrado.";
} else {
    echo "ERROR: Autoload NO encontrado en " . __DIR__ . '/../vendor/autoload.php';
}
