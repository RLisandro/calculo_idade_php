<?php
if (isset($_POST['enviar'])) {
    $nome = $_POST['nome'];
    $ano_atual = date('Y'); // Obtém o ano atual
    $ano_nascimento = $_POST['ano'];

    // Verifica se os campos não estão vazios
    if (!empty($nome) && !empty($ano_nascimento)) {
        $idade = $ano_atual - $ano_nascimento;
        echo "Olá, $nome! Sua idade é: $idade anos.";
    } else {
        echo "Por favor, preencha todos os campos.";
    }
}
