document.addEventListener('DOMContentLoaded', () => {
    // Função assíncrona para lidar com o envio de dados do formulário
    async function handleFormSubmit(event) {
        event.preventDefault(); // Evita o envio padrão do formulário (recarregamento da página)

        const form = event.target; // Obtém o formulário que disparou o evento de envio
        const formData = new FormData(form); // Cria um objeto FormData a partir do formulário

        // Converte FormData para um objeto
        const formDataObj = {};
        formData.forEach((value, key) => {
            formDataObj[key] = value;
        });

        // Configura a URL e o método para o fetch
        const action = form.action; // URL para onde os dados do formulário serão enviados
        const method = form.method || 'POST'; // Método HTTP para o envio do formulário (POST por padrão)

        try {
            // Faz a requisição fetch
            const response = await fetch(action, {
                method: method,
                headers: {
                    'Content-Type': 'application/json' // Define o tipo de conteúdo como JSON
                },
                body: JSON.stringify(formDataObj) // Converte o objeto formDataObj em uma string JSON para enviar no corpo da requisição
            });

            // Verifica se a resposta da requisição foi bem-sucedida
            if (!response.ok) {
                throw new Error('A resposta da rede não foi adequada');
            }

            // Converte a resposta da requisição para JSON e exibe a mensagem
            const result = await response.json();
            alert(result.message);

        } catch (error) {
            // Captura e exibe qualquer erro ocorrido durante a requisição
            console.error('Houve um problema com a operação de fetch:', error);
            alert('Erro ao enviar dados.');
        }
    }

    // Adiciona o listener de evento para os formulários
    const forms = document.querySelectorAll('form'); // Seleciona todos os formulários na página
    forms.forEach(form => form.addEventListener('submit', handleFormSubmit)); // Adiciona o event listener para cada formulário
});


const SalvarAluno = document.getElementById('salvar_aluno');

SalvarAluno.addEventListener('click', async () => {
   
});

const SalvarEmpresa = document.getElementById('salvar_empresa');

SalvarEmpresa.addEventListener('click', async () => {

});

const SalvarTurma = document.getElementById('salvar_turma');

SalvarTurma.addEventListener('click', async () => {

});

const SalvarDisciplina = document.getElementById('salvar_disciplina');

SalvarDisciplina.addEventListener('click', async () => {

});

const SalvarProfessor = document.getElementById('salvar_professor');

SalvarProfessor.addEventListener('click', async () => {

});