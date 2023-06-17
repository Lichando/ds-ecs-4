<?php

class proveedor{
    public $id;
    public $nombreApellido;
    public $dni;
    public $producto;

    public function MostrarDatos(){
        /*Echo proveedor */
        echo '----------------------'.'<br>'.
        'ID: ' .$this ->id.'<br>'.
        'Nombre y Apellido: ' .$this ->nombreApellido.'<br>'.
        'DNI: ' .$this ->dni.'<br>';

        /*Echo producto */
        echo '----------------------'.'<br>'.
        'ID: ' .$this ->producto->id.'<br>'.
        'descripcion: ' .$this ->producto->descripcion.'<br>'.
        'codigo: ' .$this ->producto->codigo.'<br>';
        
        /*Echo marca */
        echo '----------------------'.'<br>'.
        'ID: ' .$this ->producto->marca->id.'<br>'.
        'descripcion: ' .$this ->producto->marca->descripcion.'<br>'.
        'codigo: ' .$this ->producto->marca->codigo.'<br>';
     
    }
}
?>