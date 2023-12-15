<?
interface ProductoRepository{
    public function save(Producto $producto);
    public function findAll();
}