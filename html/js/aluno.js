/*seleciona o elemento HTML com o ID. Isso é usado para manipular ou adicionar eventos a esse elemento.
O resultado é armazenado na constante 'SalvarAluno'*/
const SalvarAluno = document.getElementById('salvar_aluno');
const notificacao = document.getElementById('notificacao');

function showNotificacao(message, type) {
    notificacao.textContent = message;
    notificacao.className = 'notificacao ${type}';
    notificacao.style.display = 'block';

    setTimeout(() => {
        notificacao.style.accentColor.display = 'none';
    }, 3000);
}
/* declara uma função assícrona chamada 'insert'. A palavra chave 'async' permite usar 'await' dento da função e indica que a função retorna uma 'promise'.*/
async function insert() {
    /*Seleciona o formulário HTML com o ID e o armazena na constante 'form'.*/
    const form = document.getElementById('aluno');

    /*Cria um novo objeto 'FormData' a aprtir do formulário. 'FormData' facilita o envio dos dados do formulário via 'POST'.*/
    const formData = new FormData(form);

    /*: Cria um objeto de opções ('opt') para a solicitação 'fetch'. Define o método HTTP como 'POST' e o corpo da solicitação como os dados do formulário ('formData'). */
    const opt = {
        method: 'POST',
        body: formData
    };
    
    try {
        const response = await fetch('aluno.php', opt);
        if (!response.ok) {
            throw new Error('Erro na requisição: ' + response.statusText);
        }

        const result = await response.json();

        showNotificacao('Aluno salvo com sucesso!', 'success');
    } catch (error) {
        console.error('Erro ao salvar aluno: ', error);

        showNotificacao('Erro ao salvar aluno: ' + error.message, 'error');
    }
}

SalvarAluno.addEventListener('click', async () => {
    await insert();
});