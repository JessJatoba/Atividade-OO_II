
<?php
include 'OperacaoVinho.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $vinho = new Vinho();
        $vinho->setNome($_POST['nome']);
        $vinho->setTipo($_POST['tipo']);
        $vinho->setSafra($_POST['safra']);
        $vinho->setPreco($_POST['preco']);

        echo "<h3>Dados do Vinho Cadastrado:</h3>";
        echo nl2br($vinho->mostrarVinho());

        if ($vinho->verificarPreco($vinho->getPreco())) {
            echo "<p>Produto em Oferta!</p>";
        } else {
            echo "<p>Produto com o preço normal!</p>";
        }
    }
    ?>