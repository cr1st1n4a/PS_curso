const salvar = document.getElementById('salvar');
const Id = document.getElementById('id');
const Action = document.getElementById('acao');
const Alerta = document.getElementById('alert');

async function Insert() {
    const form = document.getElementById('form');
    const formData = new FormData(form);
    const opt = {
        method: 'POST',
        body: formData
    };
    const response = await fetch(`/ControllerProfessor.php`, opt);
    const json = await response.json();
    return json;
}
async function insert() {
    //Podemos alterar o status da mensagem para salvando.
    Alerta.className = 'alert alert-primary';
    Alerta.innerHTML = 'Salvando, por favor aguarde...';
    const response = await Insert();
    if (response.status != true) {
        //Aqui exibimos a mensagem de erro
        Alerta.className = 'alert alert-danger';
        Alerta.innerHTML = response.msg;
        setTimeout(function () {
            Alerta.className = 'alert alert-warning';
            Alerta.innerHTML = `Todos os campos com <span class="text text-danger">*</span> são obrigatórios para o cadastro`;
        }, 5000);
        return;
    }
    Alerta.className = 'alert alert-success';
    Alerta.innerHTML = response.msg;
    setTimeout(function () {
        window.location.href = `/listaprofessor.php?id=${response.id}`;
    }, 2000);
    //Exibir a mensagem de salvo com sucesso
    //Depois de exibir a mensagem de salvo com sucesso
    //Vamos direcionar para a pagina de listagem de proffessores,
    // de forma automatica.
}
async function update() {

    const form = document.getElementById('form');
    const formData = new FormData(form);
    const opt = {
        method: 'POST',
        body: formData
    };
    Alerta.className = 'Alert alert-primary';
    Alerta.innerHTML = 'Salvando, por favor aguarde...'
    const request = await fetch('/ControllerProfessor.php', opt);
    const response = await request.json();

    if (response.status === true) {
        Alerta.className = 'alert alert-success';
        Alerta.innerHTML = response.msg;
        Action.value = 'e';
        setTimeout(() => {
            Alerta.className = 'alert alert-warning';
            Alerta.innerHTML = `Todos os campos sinalizados com <span class="text-danger">*</span> são de preenchimento obrigatórios `;
        }, 1000);
        return;
    }
    mensagem.className = 'alert alert-danger';
    mensagem.innerHTML = response.msg;
}
salvar_professor.addEventListener('click', async () => {
if (Action.value == 'c') {
    await insert();
    return;
}
    await update();
});