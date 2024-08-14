const SalvarTurma = document.getElementById('salvar_turma');

async function insert() {
    const form = document.getElementById('turma');
    const formData = new FormData(form);
    const opt = {
        method: 'POST',
        body: formData
    }
    const response = fetch ('turma.php', opt);
}

SalvarTurma.addEventListener('click', async() => {
    await insert();
    alert('Turma salva.')
});