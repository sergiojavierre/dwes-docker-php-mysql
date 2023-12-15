<?

class ProductoUseCases{
    private $productoRepository;

    public function __construct($productoRepository){
        $this->productoRepository = $productoRepository;
    }

    public function save($nombre){
        $producto = new Producto($nombre);
        $this->productoRepository->save($producto);
    }

    public function findAll(){
        return $this->productoRepository->findAll();
    }
}