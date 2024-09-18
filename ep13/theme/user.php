<article class="users_user">
    <h3><?= htmlspecialchars("{$user->first_name} {$user->last_name}"); ?></h3>
    <a class="remove" href="#" 
       data-action="<?= htmlspecialchars($router->route(name: 'form.delete')); ?>" 
       data-id="<?= htmlspecialchars($user->id); ?>" 
       onclick="deleteUser(event, <?= $user->id; ?>)">Deletar</a>
</article>

<script>
function deleteUser(event, userId) {
    event.preventDefault(); // Impede o comportamento padrão do link

    const url = event.target.getAttribute('data-action');
    
    fetch(url, {
        method: 'POST',
        body: JSON.stringify({ id: userId }),
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => {
        if (response.ok) {
            return response.json();
        } else {
            throw new Error('Erro ao deletar usuário');
        }
    })
    .then(data => {
        // Trate a resposta de sucesso aqui
        console.log('Usuário deletado:', data);
        // Você pode remover o elemento do DOM ou recarregar a lista
        event.target.closest('article').remove(); // Remove o artigo do DOM
    })
    .catch(error => {
        console.error('Erro:', error);
    });
}
</script>
