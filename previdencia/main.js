// Função para alternar a visibilidade do conteúdo dos blocos
function toggleContent(blockId, contentId) {
    const block = document.getElementById(blockId);
    const content = document.getElementById(contentId);
    
    block.addEventListener('click', () => {
        // Verifica se o conteúdo está visível ou não
        if (content.style.display === "block") {
            content.style.display = "none";
        } else {
            content.style.display = "block";
        }
    });
}

// Chama a função para cada bloco
toggleContent('block1', 'content1');
toggleContent('block2', 'content2');
toggleContent('block3', 'content3');
toggleContent('block4', 'content4');
