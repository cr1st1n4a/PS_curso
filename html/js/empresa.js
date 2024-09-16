const salvar = document.getElementById('salvar');
const id = document.getElementById('id');
const Action = document.getElementById('acao');
const Alerta = document.getElementById('alert');
// Função para enviar dados para o servidor e receber a resposta
async function Insert() {
    const form = document.getElementById('form');
    const formData = new FormData(form);
    const opt = {
        method: 'POST',
        body: formData
    };
    try {
        const response = await fetch('/ControllerEmpresa.php', opt);
        const text = await response.text();
        console.log('Raw response text:', text);

        try {
            const json = JSON.parse(text);
            console.log('Insert response:', json);
            return json;
        } catch (jsonError) {
            console.error('Failed to parse JSON:', jsonError);
            Alerta.className = 'alert alert-danger';
            Alerta.innerHTML = json.msg;
            return null;
        }
    } catch (error) {
        console.error('Error during fetch:', error);
        Alerta.className = 'alert alert-danger';
        Alerta.innerHTML = 'Restrição ao tentar salvar. Tente novamente.';
        return null;
    }
}
// Função para tratar a inserção de dados
async function insert() {
    Alerta.className = 'alert alert-primary';
    Alerta.innerHTML = 'Salvando, por favor aguarde...';

    const response = await Insert();

    if (!response) {
        // Caso a resposta não seja válida, retornamos para evitar erros adicionais
        return;
    }

    if (response.status !== true) {
        Alerta.className = 'alert alert-danger';
        Alerta.innerHTML = response.msg;
        setTimeout(() => {
            Alerta.className = 'alert alert-warning';
            Alerta.innerHTML = 'Todos os campos com <span class="text text-danger">*</span> são obrigatórios para o cadastro';
        }, 5000);
        return;
    }

    Alerta.className = 'alert alert-success';
    Alerta.innerHTML = response.msg;
    setTimeout(() => {
        window.location.href = `/listaempresa.php?id=${response.id}`;
    }, 2000);
}
// Função para tratar a atualização de dados
async function update() {
    const form = document.getElementById('form');
    const formData = new FormData(form);
    const opt = {
        method: 'POST',
        body: formData
    };

    Alerta.className = 'alert alert-primary';
    Alerta.innerHTML = 'Salvando, por favor aguarde...';

    try {
        const response = await fetch('/ControllerEmpresa.php', opt);
        const text = await response.text(); // Obter resposta como texto
        console.log('Raw response text:', text); // Log do texto bruto

        // Verificar se a resposta é JSON válido
        try {
            const json = JSON.parse(text);
            console.log('Update response:', json); // Log da resposta JSON

            if (json.status === true) {
                Alerta.className = 'alert alert-success';
                Alerta.innerHTML = json.msg;
                Action.value = 'e';
                setTimeout(() => {
                    Alerta.className = 'alert alert-warning';
                    Alerta.innerHTML = 'Todos os campos sinalizados com <span class="text-danger">*</span> são de preenchimento obrigatórios';
                }, 1000);
                return;
            }

            Alerta.className = 'alert alert-danger';
            Alerta.innerHTML = json.msg;
        } catch (jsonError) {
            console.error('Failed to parse JSON:', jsonError);
            Alerta.className = 'alert alert-danger';
            Alerta.innerHTML = 'Resposta do servidor não é um JSON válido. Veja o console para detalhes.';
        }
    } catch (error) {
        console.error('Error during fetch:', error);
        Alerta.className = 'alert alert-danger';
        Alerta.innerHTML = 'Restrição ao salvar. Tente novamente.';
    }
}
// Adiciona o evento de clique ao botão 'salvar'
salvar.addEventListener('click', async () => {
    console.log('Action.value:', Action.value); // Verificar o valor de Action.value

    if (Action.value === 'c') {
        await insert();
        return;
    }

    await update();
});
