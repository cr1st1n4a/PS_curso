const SalvarAluno = document.getElementById('salvar_aluno');

async function insert() {
    const form = document.getElementById('aluno');
    const formData = new FormData(form);
    const opt = {
        method: 'POST',
        body: formData
    }
    const response = fetch ('aluno.php', opt); 
}

SalvarAluno.addEventListener('click', async() => {
    await insert();
    alert('Aluno salvo.')
});