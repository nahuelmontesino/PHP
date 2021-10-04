<?php
    include "clases.php";

    //Definicion de productos
    $producto1 = new Producto("Detergente", 100, 10);
    $producto2 = new Producto("Pepsi", 120, 20);
    $producto3 = new Producto("Yerba", 350, 30);

    //Definicion de clientes
    $cliente1 = new Cliente(123, "Fernando", "Aguirre", 2332, "Urquiza 2040", 5000);
    $cliente2 = new Cliente(2020, "Juan", "Perez", 2332, "Galarza 1015", 10000);
    $cliente3 = new Cliente(1200, "Felipe", "Merlo", 2332, "Urquiza 2040", 5000);

    //--------------Pedido---------------------------------------------

    //Se desea pedir 10 Pepsi y 3 Yerba para el cliente Felipe

    $cantidadSolitadaPro2 = 10;
    $cantidadSolitadaPro3 = 3;

    //Verificamos la cantidad disponible del producto y en dicho caso lo agregamos

    $haySuficientes = $producto2->verificarCantidad($cantidadSolitadaPro2) && 
                      $producto3->verificarCantidad($cantidadSolitadaPro3);

    if($haySuficientes){
        $producto2->descontarCantidad($cantidadSolitadaPro2);
        $producto3->descontarCantidad($cantidadSolitadaPro3);
        $item1 = new ItemPedido($producto2, $cantidadSolitadaPro2);
        $item2 = new ItemPedido($producto3, $cantidadSolitadaPro3);
    }
    else{
        echo "La cantidad dispinible de los productos es insuficiente";
        echo "La cantidades son :".$producto2->getNombre().": ".$producto2->getCantidad();
        echo "La cantidades son :".$producto3->getNombre().": ".$producto3->getCantidad();
    }

    $pedido = new Pedido($cliente3);
    $pedido->agregarItem($item1);
    $pedido->agregarItem($item2);

    if($cliente3->obtenerSaldo() >= $pedido->precioTotal){
        #AgregarPedidoBasedeDatos()
        $cliente3->descontarSaldo($pedido->precioTotal);
        echo "El pedido se agrego a la base de datos";
        echo "<br>";
        echo "El precio total del pedido es: ".$pedido->precioTotal;
        echo "<br>";
        echo "El saldo del cliente ".$cliente3->nombre." es: ".$cliente3->obtenerSaldo();

    }
    else{
        echo "El saldo del cliente es insuficiente para realizar el pedido";
    }
    

?>