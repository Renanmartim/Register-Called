<?php

    $arquivo = fopen('arquivo.txt', 'a');

    $titulo = str_replace('#', '-', $_POST['titulo']);
    $selecao = str_replace('#', '-', $_POST['selecao']);
    $descricao = str_replace('#', '-', $_POST['descricao']);


    $texto = $titulo . '#' . $selecao . '#' . $descricao .  PHP_EOL;


    fwrite($arquivo, $texto);

    fclose($arquivo);

    header('Location: abrir_chamado.php');

?>