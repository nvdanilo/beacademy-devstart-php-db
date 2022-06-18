<h1>Editar Produtos</h1>

<form action="" method="post">

    <!-- <label for="category">Categoria</label>
    <select id="category" name="category" class="form-select mb-3">
        <option selected>-- Selecione --</option>
        <php
            while ($category = $data->fetch(\PDO::FETCH_ASSOC)) {
                extract($category);
                echo "<option value='{$id}'>{$name}</option>";
            }
        ?>
    </select> -->

    <?php extract($data) ?>

    <label for="name">Nome</label>
    <input value="<?php echo $product['name']; ?>" id="name" name="name" type="text" class="form-control mb-3">

    <label for="description">Descrição</label>
    <textarea id="description" name="description" class="form-control mb-3"><?php echo $product['description']; ?></textarea>

    <label for="photo">Foto</label>
    <input value="<?php echo $product['photo']; ?>" id="photo" name="photo" type="text" class="form-control mb-3">

    <label for="price">Preço</label>
    <input value="<?php echo $product['price']; ?>" id="price" name="price" type="text" class="form-control mb-3">

    <label for="quantity">Estoque</label>
    <input value="<?php echo $product['quantity']; ?>" id="quantity" name="quantity" type="text" class="form-control mb-3">

    <button class="btn btn-primary">Confirmar</button>
</form>