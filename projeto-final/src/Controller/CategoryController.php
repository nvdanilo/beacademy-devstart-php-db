<?php

declare(strict_types=1);
namespace App\Controller;

use App\Connection\Connection;

class CategoryController extends AbstractController
{
    public function listAction(): void
    {
        $con = Connection::getConnection();
        $result = $con->prepare("SELECT * FROM tb_category");
        $result->execute();
        
        parent::render("category/list", $result);
    }

    public function addAction(): void
    {
        if ($_POST) {
            $name = $_POST["name"];
            $description = $_POST["description"];

            // $query = "INSERT INTO tb_category (name, description) VALUES ('{$name}', '{$description}')";
            $con = Connection::getConnection();
            $result = $con->prepare("INSERT INTO tb_category (name, description) VALUES ('{$name}', '{$description}')");
            $result->execute();

            echo "Pronto, nova categoria inserida";
        }

        parent::render("category/add");
    }

    public function editAction(): void
    {
        $con = Connection::getConnection();
        $id = $_GET["id"];

        if ($_POST) {
            $newName = $_POST["name"];
            $newDescription = $_POST["description"];
            $result = $con->prepare("UPDATE tb_category SET name='{$newName}', description='{$newDescription}' WHERE id='{$id}'");
            $result->execute();

            echo "Pronto, categoria editada";
        }

        $result = $con->prepare("SELECT * FROM tb_category WHERE id='{$id}'");
        $result->execute();

        parent::render("category/edit", $result->fetch(\PDO::FETCH_ASSOC));
    }

    public function removeAction(): void
    {
        $con = Connection::getConnection();
        $id = $_GET["id"];
        $result = $con->prepare("DELETE FROM tb_category WHERE id='{$id}'");
        $result->execute();

        echo "Pronto";
    }
}