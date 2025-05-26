let imagens = [
  "/samira/img/galeria/foto (1).jpg", 
  "/samira/img/galeria/foto (2).jpg", 
  "/samira/img/galeria/foto (3).jpg",
  "/samira/img/galeria/foto (4).jpg",
  "/samira/img/galeria/foto (5).jpg"
];
let index = 0;

function trocarImagem() {
  index = (index + 1) % imagens.length;
  document.getElementById("slide").src = imagens[index];
}

setInterval(trocarImagem, 3000); // troca a cada 3 segundos
