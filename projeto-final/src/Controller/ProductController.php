<?php

declare(strict_types=1);
namespace App\Controller;

use App\Connection\Connection;
use Dompdf\Dompdf;

class ProductController extends AbstractController
{
    public function listAction(): void
    {
        $con = Connection::getConnection();
        $result = $con->prepare("SELECT * FROM tb_product");
        $result->execute();

        parent::render("product/list", $result);
    }

    public function addAction(): void
    {
        $con = Connection::getConnection();

        if ($_POST) {
            $name = $_POST["name"];
            $description = $_POST["description"];
            $photo = $_POST["photo"];
            $price = $_POST["price"];
            $categoryId = $_POST["category"];
            $quantity = $_POST["quantity"];
            $createdAt = date("Y-m-d H:i:s");

            $result = $con->prepare("
            INSERT INTO tb_product 
            (name, description, photo, price, category_id, quantity, created_at) VALUES 
            ('{$name}', '{$description}', '{$photo}', '{$price}', '{$categoryId}', '{$quantity}', '{$createdAt}');");
            $result->execute();

            echo "Pronto, produto adicionado";
        }

        $result = $con->prepare("SELECT * FROM tb_category;");
        $result->execute();

        parent::render("product/add", $result);
    }

    public function editAction(): void
    {
        $id = $_GET["id"];
        $con = Connection::getConnection();
        // $categories = $con->prepare("SELECT * FROM tb_category");
        // $categories->execute();

        if ($_POST) {
            $name = $_POST["name"];
            $description = $_POST["description"];
            $photo = $_POST["photo"];
            $price = $_POST["price"];
            $quantity = $_POST["quantity"];

            $result = $con->prepare("
                UPDATE tb_product SET
                    name='{$name}',
                    description='{$description}',
                    photo='{$photo}',
                    price='{$price}',
                    quantity='{$quantity}'
                WHERE id='{$id}';");
            $result->execute();

            echo "Pronto, produto atualizado";
            
        }

        $product = $con->prepare("SELECT * FROM tb_product WHERE id='{$id}'");
        $product->execute();

        parent::render("product/edit", [
            "product" => $product->fetch(\PDO::FETCH_ASSOC),
        ]);
    }

    public function removeAction(): void
    {
        $con = Connection::getConnection();
        $id = $_GET["id"];
        $result = $con->prepare("DELETE FROM tb_product WHERE id='{$id}'");
        $result->execute();

        //$message = "Pronto, produto exclu??do";

        parent::renderMessage("Pronto, produto exclu??do");
    }

    public function reportAction(): void
    {
        $con = Connection::getConnection();
        $result = $con->prepare("SELECT prod.id, prod.name, prod.quantity, cat.name AS category FROM tb_product prod INNER JOIN tb_category cat ON prod.category_id = cat.id");
        $result->execute();

        $content = "";

        while ($product = $result->fetch(\PDO::FETCH_ASSOC)) {
            
            extract($product);
            
            $content .= "
                <tr>
                    <td>{$id}</td>
                    <td>{$name}</td>
                    <td>{$quantity}</td>
                    <td>{$category}</td>
                </tr>
            ";
        }


        $html = "
            <h1>Relat??rio de Produtos no Estoque</h1>
            <table border='1' width='100%'>
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Nome</th>
                        <th>Estoque</th>
                        <th>Categoria</th>
                    </tr>
                </thead>
                <tbody>
                    {$content}
                </tbody>
            </table>
        ";

        $pdf = new Dompdf();
        $pdf->loadHtml($html);
        $pdf->render();
        $pdf->stream();
    }
}