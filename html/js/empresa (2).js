const SalvarEmpresa = document.getElementById('salvar_empresa');

async function insert() {
    const form = document.getElementById('empresa');
    const formData = new FormData(form);
    const opt = {
        method: 'POST',
        body: formData
    }
    const response = fetch ('empresa.php', opt);
    
}

SalvarEmpresa.addEventListener('click', async() => {
    await insert();
    alert('Empresa salva.')
});