<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
    <link rel="stylesheet" href="/css/index.css"/>
</head>
<body>
    <h1 id="aqui_temos_a_id_do_titulo" class="class_do_h1">Cadastro de Clientes</h1>
    <br>
    <form name="form" id="form">
        <label for="nome">Nome</label>
        <br>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome"/>
        <br>
        <label for="sobrenome" >Sobrenome</label>
        <br>
        <input type="text" id="sobrenome" name="sobrenome" placeholder="Digite seu sobrenome"/>
        <br>
        <label for="cpf">CPF</label>
        <br>
        <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" />
        <br>
        <label for="rg">RG</label>
        <br>
        <input type="text" id="rg" name="rg" placeholder="Digite seu RG" />
        <br>
        <label for="data_de_nascimento">Data de nascimento</label>
        <br>
        <input type="date" id="data_de_nascimento" name="data_de_nascimento" />
        <br>
        <Label for="nome_do_pai">Nome do pai</Label>
        <br>
        <input type="text" id="nome_do_pai" name="nome_do_pai" placeholder="Digite o nome do pai"/>
        <br>
        <label for="nome_da_mae">Nome da mãe</label>
        <br>
        <input type="text" id="Nome_da_mae" name="nome_da_mae" placeholder="Digite o nome da mãe"/>
        <br>
        <label for="renda">Renda Mensal</label>
        <br>
        <input type="number" id="renda" name="renda" placeholder="Digite a sua renda mensal" />
        <br>
        <label for="estado_civil">Estado Civil</label>
        <br>
        <select name="estado_civil" id="estado_civil">
            <option value="">Selecione o seu esado civil</option>
            <option value="solteiro">Solteiro(a)</option>
            <option value="casado">Casado(a)</option>
        </select>
        <br>
        <label for="cep">CEP</label>
        <br>
        <input type="text" id="cep" name="cep" placeholder="Digite seu CEP" />
        <br>
        <label for="logadouro">Logadouro</label>
        <br>
        <input type="text" id="logadouro" name="logadouro" placeholder="Digite seu logadouro"/>
        <br>
        <label for="numero_da_residencia">Número da Residencia</label>
        <br>
        <input type="number" id="numero_da_residencia" name="numero_da_residencia" placeholder="Digite o número da sua residencia"/>
        <br>
        <label for="bairro">Bairro</label>
        <br>
        <input type="text" id="bairro" name="bairro" placeholder="Digite seu bairro"/>
        <br>
        <label for="cidade">Cidade</label>
        <br>
        <input type="text" id="cidade" name="cidade" placeholder="Digite o nome da sua cidade" />
        <br>
        <label for="uf">Estado da Federação</label>
        <br>
        <select id="uf" name="uf" >
            <option value="">Selecione um estado brasileiro</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <Option value="MG">Minas Gerais</Option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
        </select>
        <br>
        <label for="pais">País</label>
        <br>
        <select name="pais" id="pais" >
            <option value="">Selecione o País</option> 
            <label for="uf">Estado da Federação</label>
        <br>
            <option value="Br">Brasil</option>
            <option value="Ar">Argentina</option>
        </select>
        <br>
        <label for="ibge">IBGE</label>
        <br>
        <input type="number" id="ibge" name="ibge" placeholder="Digite seu IBGE">
        <br>
        <button type="submit">Salvar</button>
    </form>
    <script src="/js/index.js"></script>
</body>
</html>