<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
    <form name="aluno" id="aluno" method="post">
        <h2>Cadastro de aluno</h2>
        <!--nome do tipo Text-->
        <label for="aluno_nome">Nome</label>
        <br>
        <input type="text" id="aluno_nome" name="aluno_nome" placeholder="Digite seu nome" />
        <br>

        <!--cpf do tipo text-->
        <label for="aluno_cpf">CPF</label>
        <br>
        <input type="text" id="aluno_cpf" name="aluno_cpf" placeholder="Digite seu CPF" />
        <br>

        <!--rg do tipo text-->
        <label for="aluno-rg">RG</label>
        <br>
        <input type="text" id="aluno_rg" name="aluno_rg" placeholder="Digite seu RG" />
        <br>

        <!--data de nascimento do tipo date-->
        <label for="aluno_data_nascimento">Data de nascimento</label>
        <br>
        <input type="date" id="aluno_data_nascimento" name="aluno_data_nascimento" />
        <br>
        <button type="button" id="salvar_aluno">Salvar</button>
    </form>
    <form name="empresa" id="empresa" method="post">
        <h2>Cadastro de empresa</h2>
        <!--nome fantasia do tipo Text-->
        <label for="empresa_nome_fantasia">Nome fantasia</label>
        <br>
        <input type="text" id="empresa_nome_fantasia" name="empresa_nome_fantasia" placeholder="Digite o nome fantasia" />
        <br>

        <!--cnpj do tipo text-->
        <label for="empresa_cnpj">CNPJ</label>
        <br>
        <input type="text" id="empresa_cnpj" name="empresa_cnpj" placeholder="Digite seu CNPJ" />
        <br>

        <!--inscrição estadual do tipo text-->
        <label for="empresa_inscricao_estadual">Inscrição estadual</label>
        <br>
        <input type="text" id="empresa_inscricao_estadual" name="empresa_inscricao_estadual" placeholder="Digite sua incrição estadual" />
        <br>

        <!--data de nascimento do tipo date-->
        <label for="empresa_data_nascimento">Data de nascimento</label>
        <br>
        <input type="date" id="empresa_data_nascimento" name="empresa_data_nascimento" />
        <br>
        <button type="button" id="salvar_empresa">Salvar</button>

    </form>
    <form name="professor" id="professor" method="post">
        <h2>Cadastro de professor</h2>
        <!--nome do tipo Text-->
        <label for="professor_nome">Nome</label>
        <br>
        <input type="text" id="professor_nome" name="professor_nome" placeholder="Digite seu nome" />
        <br>

        <!--cpf do tipo text-->
        <label for="professor_cpf">CPF</label>
        <br>
        <input type="text" id="professor_cpf" name="professor_cpf" placeholder="Digite seu CPF" />
        <br>

        <!--rg do tipo text-->
        <label for="professor-rg">RG</label>
        <br>
        <input type="text" id="professor_rg" name="professor_rg" placeholder="Digite seu RG" />
        <br>

        <!--data de nascimento do tipo date-->
        <label for="professor_data_nascimento">Data de nascimento</label>
        <br>
        <input type="date" id="professor_data_nascimento" name="professor_data_nascimento" />
        <br>
        <button type="button" id="salvar_professor">Salvar</button>
    </form>
    <form name="disciplina" id="disciplina" method="post">
        <h2>Cadastro de disciplina</h2>

        <label for="disciplina_nome">Nome</label>
        <br>
        <input type="text" id="disciplina_nome" name="disciplina_nome" placeholder="Digite seu nome" />
        <br>
        <label for="disciplina_status">Ativo</label>
        <input type="checkbox" id="disciplina_status" name="disciplina_status" />
        <br>
        <button type="button" id="salvar_disciplina">Salvar</button>
    </form>
    <form name="turma" id="turma" method="post">
        <h2>Cadastro de turma</h2>
        <label for="quantidade_alunos">Quantidade de alunos</label>
        <br>
        <input type="number" id="quantidade_alunos" name="quantidade_alunos" placeholder="Digite a quantidade de alunos" />
        <br>
        <label for="data_inicio">Data de inicio</label>
        <br>
        <input type="date" id="data_inicio" name="data_inicio" placeholder="Digite a data de inicio" />
        <br>
        <label for="data_fim">Data de fim</label>
        <br>
        <input type="date" id="data_fim" name="data_fim" placeholder="Digite a data de fim" />
        <br>
        <button type="button" id="salvar_turma">Salvar</button>
    </form>
    <script src="/js/index.js"></script>
</body>                                 

</html>