<?php

class cliente{
    public $id;
    public $nombreApellido;
    public $dni;

    public function MostrarDatos(){
        echo '----------------------'.'<br>'.
        'ID: ' .$this ->id.'<br>'.
        'Nombre y Apellido: ' .$this ->nombreApellido.'<br>'.
        'DNI: ' .$this ->dni.'<br>';
    }
}
?>