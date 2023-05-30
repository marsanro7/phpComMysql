<!DOCTYPE html>
<html>
<head>
    <title>Churrasco - Resultados</title>
	
</head>
<body>
    <h1>Lista de Convidados</h1>
    <?php
    if (isset($_POST['convidado'])) {
        $convidado = $_POST['convidado'];
        $file = fopen("convidados.txt", "a");
        fwrite($file, $convidado . "\n");
        fclose($file);
    }

    if (file_exists("convidados.txt")) {
        $convidados = file("convidados.txt");
        echo "<ul>";
        foreach ($convidados as $convidado) {
            echo "<li>$convidado</li>";
        }
        echo "</ul>";
    }
    ?>

    <h1>Itens para o Churrasco</h1>
    <?php
    if (isset($_POST['listitens']) && isset($_POST['quantidade'])) {
        $listitens = $_POST['listitens'];
        $quantidade = $_POST['quantidade'];
        $file = fopen("itens.txt", "a");
        fwrite($file, $listitens . " - " . $quantidade . "\n");
        fclose($file);
    }

    if (file_exists("itens.txt")) {
        $itens = file("itens.txt");
        echo "<ul>";
        foreach ($itens as $listitens) {
            echo "<li>$listitens</li>";
        }
        echo "</ul>";
    }
    ?>

    <h1>Consumo</h1>
    <?php
    if (isset($_POST['calcular'])) {
        if (file_exists("itens.txt")) {
            $itens = file("itens.txt");
            $total_consumo = 0;
            foreach ($itens as $listitens) {
                $quantidade = explode(" - ", $listitens)[1];
                $total_consumo += $quantidade;
            }
            echo "Total de consumo: " . $total_consumo . " unidades.";
        } else {
            echo "Nenhum item adicionado ainda.";
        }
    }
    ?>
</body>
</html>
