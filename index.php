<?php
require_once "modelo/cliente.php";
require_once "modelo/proveedor.php";
require_once "modelo/marca.php";
require_once "modelo/producto.php";

//Instancia cliente//
$c = new cliente;
$c->id =1;
$c->nombreApellido='Carlos Zabioli';
$c->dni="30909274";

//Instancia Marca//
$mar = new marca;
$mar->id =1;
$mar->codigo='2';
$c->descripcion="calzado";

//Instancia producto//
$prod = new producto;
$prod->id =1;
$prod->descripcion='Zapatillas';
$prod->codigo="902";
$prod->marca=$mar;


//Instancia Proveedor//
$prov = new proveedor;
$prov->id =1;
$prov->nombreApellido='Ezequiel Zapata';
$prov->dni="29897087";
$prov->producto= $prod;


$prov->MostrarDatos();
$c->MostrarDatos();

?>