<!DOCTYPE html> <!-- Declaração do tipo de documento HTML5 -->
<html lang="pt-BR"> <!-- Define o idioma da página como português do Brasil -->
<head>
    <meta charset="UTF-8"> <!-- Define a codificação de caracteres para UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Garante que o layout se ajuste à largura do dispositivo -->
    <link rel="stylesheet" href="/css/curso.css"> <!-- Link para o arquivo CSS que estiliza a página -->
    <title>Cadastro do curso</title> <!-- Define o título da página -->
</head>
<body>
    <h1>Cadastro do curso</h1> <!-- Cabeçalho da página -->

    <form name="form" id="form"> <!-- Início do formulário -->
        <label for="nome">Nome do curso</label> <!-- Rótulo para o campo de texto 'nome' -->
        <input type="text" id="nome" name="nome" placeholder="Digite o nome do curso"/> <!-- Campo de texto para o nome do curso -->
        <br> <!-- Quebra de linha -->
        
        <label for="valor">Valor do curso</label> <!-- Rótulo para o campo de texto 'valor' -->
        <input type="text" id="valor" name="valor" placeholder="Digite o valor do curso"/> <!-- Campo de texto para o valor do curso -->
        <br> <!-- Quebra de linha -->
        
        <label for="turno">Turno do curso</label> <!-- Rótulo para o campo de seleção 'turno' -->
        <select name="turno" id="turno"> <!-- Menu suspenso para selecionar o turno -->
            <option value="">Escolha seu turno</option> <!-- Opção padrão, não selecionável -->
            <option value="matutino">Matutino</option> <!-- Opção para turno matutino -->
            <option value="vespertino">Vespertino</option> <!-- Opção para turno vespertino -->
            <option value="noturno">Noturno</option> <!-- Opção para turno noturno -->
        </select>
        <br> <!-- Quebra de linha -->
        
        <!-- Botões de submissão e reset -->
        <button type="submit">Salvar</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>
 