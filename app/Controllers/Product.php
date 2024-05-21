<?php


use App\Repositories\ProductRepository;
use Src\View;

class Product
{
    public function index()
    {
        $products = ProductRepository::findAll();

        $data = [
            'products' => $products,
        ];

        View::render('products', $data);
    }

    public function store()
    {
        $nome = $_POST['name'];
        $preco = (float) $_POST['price'];
        $quantidade = $_POST['quantity'];
        $categoria = $_POST['category'];

        ProductRepository::store($nome, $preco, $quantidade, $categoria);

        redirect('/product');
    }

    public function update()
    {
        //  TODO: implementar update
    }

    public function delete()
    {
        //  TODO: implementar exclusão
    }

    public function findById(int $id)
    {
        //  TODO: implementar a busca
        $product = ProductRepository::findById($id);
        $data = [
            'product' => $product,
        ];

        View::render('product', $data);
    }

    public function findByName()
    {
        //  TODO: implementar a busca
    }

    public function findByCategorie()
    {
        //TODO: implementar a busca
    }
}
