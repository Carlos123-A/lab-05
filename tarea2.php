<?php
        $precioActual = $_POST["precioActual"];
        $cantidad = $_POST["cantidad"];
        $precioRebajado = $precioActual * 0.95;
        $importeCompra = $precioRebajado * $cantidad;
        $importeDescuento = $importeCompra * 0.07;
        $importeAPagar = $importeCompra - $importeDescuento;
        $caramelosObsequiados = $cantidad * 2;
        echo "<p>Precio rebajado: S/.$precioRebajado</p>";
        echo "<p>Importe de la compra: S/.$importeCompra</p>";
        echo "<p>Importe del descuento:S/.$importeDescuento</p>";
        echo "<p>Importe a pagar: S/.$importeAPagar</p>";
        echo "<p>Caramelos obsequiados: S/.$caramelosObsequiados</p>";
?>