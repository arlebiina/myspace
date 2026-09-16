document.addEventListener("DOMContentLoaded", function() {
    console.log("MySpace Retro carregado com sucesso!");

    const msgBtn = document.getElementById("btnMessage");
    if(msgBtn) {
        msgBtn.addEventListener("click", function() {
            alert("PC antigo diz: Função de mensagem privada simulada! XD");
        });
    }
});