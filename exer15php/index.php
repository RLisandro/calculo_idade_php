<!--4 – Escreva um programa que receba o nome e o ano de nascimento de uma pessoa. 
Calcule quantos anos essa pessoa fará este ano e 
apresente para o usuário da seguinte maneira a seguir:
* Nome , idade , data atual e mês por extenso -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>exer15</title>
</head>

<body>
    <form method="post">
        <h1>Cálculo da Idade</h1>
        <label for="nome">Nome</label>
        <input type="text" name="nome" placeholder="Digite seu como completo"><br><br>
        <label for="ano"> Ano Atual</label>
        <input tyle="text" name="ano_atual" placeholder="Digite o ano atual" class="ano_momento"><br><br>
        <label for="ano_nasc"> Ano de Nascimento</label>
        <input type="text" name="ano" placeholder="Digite seu ano de nascimento"><br><br>
        <input type="submit" value="Enviar" name="enviar" class="enter">
    </form>

    </form>

</body>

</html><br><br>
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
?>