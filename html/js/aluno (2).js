const salvar_aluno = document.getElementById('btnsalvar');
const Id = document.getElementById('id');
const Action = document.getElementById('acao');
const Alerta = document.getElementById('alert');

async function Insert() {
    const form = document.getElementById('form');
    const formData = new FormData(form);
    const opt = {
        method: 'POST',
        body: formData
    }
    const response = await fetch(`/ControllerAluno.php`, opt);
    const json = await response.json();
    return json;
}
async function insert() {
    //Podemos alterar o status da mensagem para salvando.
    Alerta.className = 'alert alert-info';
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
        window.location.href = `/listaaluno.php?id=${response.id}`;
    }, 2000);
    //Exibir a mensagem de salvo com sucesso
    //Depois de exibir a mensagem de salvo com sucesso
    //Vamos direcionar para a pagina de listagem de alunos,
    // de forma automatica.
}
async function update() {

}
salvar_aluno.addEventListener('click', async () => {

    await insert();
    return;
});