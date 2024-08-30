const SalvarProfessor = document.getElementById('salvar_professor');

async function insert() {
    const form = document.getElementById('professor');
    const formData = new FormData(form);
    const opt = {
        method:'POST',
        body: formData
    }
    const response = fetch ('professor.php', opt);
    
}

SalvarProfessor.addEventListener('click', async() => {
    await insert();
    alert('Professor salvo.')
});