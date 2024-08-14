const SalvarDisciplina = document.getElementById('salvar_disciplina');

async function insert() {
    const form = document.getElementById('disciplina');
    const formData = new FormData(form);
    const opt = {
        method: 'POST',
        body: formData
    }
    const response = fetch ('disciplina.php', opt);
    
}

SalvarDisciplina.addEventListener('click', async() => {
    await insert();
    alert('Disciplina salva.')
});