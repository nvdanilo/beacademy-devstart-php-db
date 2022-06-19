<div class="alert alert-success">
    <?php echo $message;

        $url = explode("?", $_SERVER["REQUEST_URI"])[0];

        if ($url === "/produtos/excluir") {
            echo "<br>";
            echo "<br>";
            echo "<a href='/produtos' class='btn btn-outline-dark'>Ok</a>";
        }

        if ($url === "/categorias/excluir") {
            echo "<br>";
            echo "<br>";
            echo "<a href='/categorias' class='btn btn-outline-dark'>Ok</a>";
        }
    ?>
    <!-- <a href="/produtos" class="btn btn-outline-dark">Ok</a> -->
</div>