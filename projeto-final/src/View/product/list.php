<h1>Lista de Produtos</h1>

<div class="mb-3 text-end">
    <a href="/produtos/novo" class="btn btn-outline-primary">Novo Produto</a>
    <a href="/produtos/relatorio" class="btn btn-outline-dark">Gerar PDF</a>
</div>

<table class="table table-hover table-striped">
    <thead class="table-dark">
        <tr>
            <th>#ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Foto</th>
            <th>Preço</th>
            <th>Estoque</th>
            <th>Data de Cadastro</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while ($product = $data->fetch(\PDO::FETCH_ASSOC)) {

                extract($product);

                $price = number_format($price, 2, ".", "");
                
                echo "<tr>";
                    echo "<td>{$id}</td>";
                    echo "<td>{$name}</td>";
                    echo "<td>{$description}</td>";
                    echo "<td><img width='100px' src='{$photo}'></td>";
                    echo "<td>{$price}</td>";
                    echo "<td>{$quantity}</td>";
                    echo "<td>{$created_at}</td>";
                    echo "<td>
                            <a href='/produtos/editar?id={$id}' class='btn btn-warning btn-sm'>Editar</a>
                            <a href='/produtos/excluir?id={$id}' class='btn btn-danger btn-sm'>Excluir</a>
                          </td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>