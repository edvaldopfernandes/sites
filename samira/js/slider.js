let imagens = ["img/manicure_1.jpg", "img/manicure_2.jpg", "img/manicure_3.jpg"];
let index = 0;

function trocarImagem() {
  index = (index + 1) % imagens.length;
  document.getElementById("slide").src = imagens[index];
}

setInterval(trocarImagem, 3000); // troca a cada 3 segundos
