// Código JavaScript para o botão flutuante
document.addEventListener("DOMContentLoaded", function() {
    var whatsappButton = document.getElementById("whatsapp-floating-button");
    if (whatsappButton) {
        var scrollTop = window.scrollY || document.documentElement.scrollTop;
        var windowHeight = window.innerHeight;

        // Posiciona o botão inicialmente
        whatsappButton.style.right = "20px"; // Define a posição inicial direita
        whatsappButton.style.bottom = "20px"; // Define a posição inicial inferior

        // Atualiza a posição do botão conforme o usuário rola
        window.addEventListener("scroll", function() {
            scrollTop = window.scrollY || document.documentElement.scrollTop;
            whatsappButton.style.top = null; // Limpa a posição superior
            whatsappButton.style.bottom = "20px"; // Mantém a posição inferior fixa
        });
    }
});
