<?php
   class conectar {
    private $servidor = "localhost";
    private $usuario = "root";
    private $pass = "";
    public function conexion() {
        $conexion = mysqli_connect($this->servidor, $this->usuario, $this->pass);
        return $conexion;
    }
}
class metodos {
    public function mostrarDatos($sql) {
        $c = new conectar();
        $conexion = $c->conexion();
        $result = mysqli_query($conexion, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
}
    $cn = new conectar();
    
    if(!$cn->conexion()) {
        echo "Error al conectar al servidor";
    }else{
        echo "Conexion al servidor exitosamente <br>";
        
            $obj = new metodos();
            $sql = "SHOW DATABASES";
            $datos = $obj-> mostrarDatos($sql);
            
        echo "<select>";
        foreach ($datos as $key) {
            echo "<option>".$key['Database']."</option>";
        }
        echo "</select>";
    }