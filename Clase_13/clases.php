<?php
    class Cliente
    {   
        private $dni; //private: para que no se pueda modificar una vez creado el objeto
        public $nombre;
        public $apellido;
        public $telefono;
        public $direccion;
        private $saldo; //private: para que el saldo solo se pueda modificar usando descontarSaldo

        public function __construct($dni, $nombre, $apellido, $telefono, $direccion, $saldo)
        {
            //Se inicializa los atributos de la clase
            $this->dni = $dni;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->telefono = $telefono;
            $this->direccion = $direccion;
            $this->saldo = $saldo;
        }

        public function obtenerSaldo(){
            return $this->saldo;
        }

        public function descontarSaldo($costoPedido)
        {
            $this->saldo -= $costoPedido;
        }

    }

    class Producto
    {   
        private $precioUnitario; //private: para que no puedan cambiar el precio desde afuera de la clase
        private $cantidadDisponible;
        private $nombre; //Para que no puedan cambiarle el nombre al producto 

        public function __construct($nombre,$precioUnitario, $cantidadDisponible)
        {
            $this->nombre = $nombre;
            $this->precioUnitario = $precioUnitario;
            $this->cantidadDisponible= $cantidadDisponible;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function verificarCantidad($cantidadSolicitada){
            return $this->cantidadDisponible >= $cantidadSolicitada;
        }

        public function getCantidad(){
            return $this->cantidadDisponible;
        }

        public function getPrecio(){
            return $this->precioUnitario;
        }

        public function descontarCantidad($cantidad)
        {
            $this->cantidadDisponible -= $cantidad;
        }

    }

    class ItemPedido{
        public Producto $producto;
        public $cantidadSolicitada;

        public function __construct(Producto $producto, $cantidadSolicitada)
        {
            $this->producto = $producto;
            $this->cantidadSolicitada = $cantidadSolicitada;
        }

        public function getTotal()
        {
            //Precio del producto por la cantidad solicitada.
            return $this->producto->getPrecio() * $this->cantidadSolicitada;
        }
    }

    class Pedido
    {   
        public Cliente $cliente;
        private $items;
        public $precioTotal;

        public function __construct(Cliente $cliente)
        {
            $this->items = [];
            $this->precioTotal = 0;
            $this->cliente = $cliente;
        }

        public function agregarItem(ItemPedido $item)
        {
            //Agrega el item al pedido y suma al precio total
            $this->items[] = $item;
            $this->precioTotal += $item->getTotal();
        }

    }

 
    
?>