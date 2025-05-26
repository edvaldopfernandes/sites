let imagens = [
  "/samira/img/galeria/fotos/foto_1.webp", 
  "/samira/img/galeria/fotos/foto_5.webp", 
  "/samira/img/galeria/fotos/foto_6.webp", 
  "/samira/img/galeria/fotos/foto_7.webp",
  "/samira/img/galeria/fotos/foto_8.webp",
  "/samira/img/galeria/fotos/foto_9.webp"
];
let index = 0;

function trocarImagem() {
  index = (index + 1) % imagens.length;
  document.getElementById("slide").src = imagens[index];
}

setInterval(trocarImagem, 3000); // troca a cada 3 segundos
