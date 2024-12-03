document.addEventListener('DOMContentLoaded', () => {
    console.log('JavaScript carregado com sucesso!');

    // Exemplo: evento de clique no botão "SAIR"
    const logoutButton = document.querySelector('.dropdown-item');
    if (logoutButton) {
        logoutButton.addEventListener('click', () => {
            fetch('./logout.php', {
                method: 'POST',
            })
                .then(response => {
                    if (response.ok) {
                        alert('Sessão encerrada com sucesso!');
                        // Opcional: Atualize a página ou redirecione
                        window.location.reload();
                    } else {
                        alert('Erro ao encerrar a sessão.');
                    }
                })
                .catch(error => console.error('Erro:', error));
        });
    }
});