<?php
    $precio1 = 20; 
    $precio2 = 13; 
    $precio3 = 10; 

    $cantidad1 = 2; 
    $cantidad2 = 4; 
    $cantidad3 = 3; 

    
    $subtotal = ($precio1 * $cantidad1) + ($precio2 * $cantidad2) + ($precio3 * $cantidad3);
    $impuesto = $subtotal * 0.18; 
    $descuento = $subtotal * 0.12; 
    $totalFinal = $subtotal + $impuesto - $descuento;

    echo "Subtotal de la compra: S/" . $subtotal. "<br>";
    echo "Monto de impuestos: S/" . $impuesto. "<br>";
    echo "Descuento aplicado: S/" . $descuento. "<br>";
    echo "Total final de la compra: S/" . $totalFinal;