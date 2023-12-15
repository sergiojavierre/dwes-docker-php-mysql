<?

include_once("context/db/conexion.php");
include_once("productos/domain/ProductoRepository.php");
include_once("productos/domain/Producto.php");

class ProductoRepositoryMySQL implements ProductoRepository{
    
    private $conn;

    public function __construct(){ 
        $this->conn = new mysqli(Conexion::$servername, Conexion::$username, Conexion::$password, Conexion::$database);
        if ($this->conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }
    }
    
    public function save(Producto $producto){
        $sql = "INSERT INTO productos (nombre) VALUES ('$producto->getNombre()')";
        $this->conn->query($sql);
    }
    
    public function findAll(){
        $sql = "SELECT * FROM productos";
        $result = $this->conn->query($sql);
        $productos = array();
        while($producto = $result->fetch_assoc()) {
            $producto = new Producto($producto["id"], $producto["nombre"]);
            array_push($productos, $producto);
        }
        return $productos;
    }
}