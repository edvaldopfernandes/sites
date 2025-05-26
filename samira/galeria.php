<!DOCTYPE html>
<html lang="pt-BR">

<style>
.galeria {
    display: grid;
    grid-template-columns: repeat(10, 1fr);
    gap: 10px;
    padding: 20px;
}

.imagem img {
    width: 100%;
    height: auto;
    display: block;
}

.modal {
    display: none; 
    position: fixed;
    z-index: 999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.9);
}

.modal-conteudo {
    margin: auto;
    display: block;
    max-width: 90%;
    max-height: 90%;
    margin-top: 5%;
}

.fechar {
    position: absolute;
    top: 20px;
    right: 35px;
    color: #fff;
    font-size: 40px;
    font-weight: bold;
    cursor: pointer;
}

@media (max-width: 768px) {
    .galeria {
        grid-template-columns: repeat(2, 1fr);
    }
}
</style>

<script>
function abrirModal(src) {
    document.getElementById("modal").style.display = "block";
    document.getElementById("imagemModal").src = src;
}

function fecharModal() {
    document.getElementById("modal").style.display = "none";
}
</script>

<?php include 'head.php'; ?>

<body>

<div class="pagina">

    <?php include 'header.php'; ?>

    <section class="conteudo">

        <div class="galeria">
            <?php
                $diretorio = __DIR__ . '/img/galeria/fotos/';
                $urlBase = '/samira/img/galeria/fotos/';
                $extensoes = ['jpg', 'jpeg', 'png', 'webp', 'gif'];

                foreach ($extensoes as $ext) {
                    foreach (glob($diretorio . "*.$ext") as $arquivo) {
                        $arquivoNome = basename($arquivo);
                        echo '<div class="imagem">';
                        echo '<img src="' . $urlBase . $arquivoNome . '" alt="' . $arquivoNome . '" onclick="abrirModal(this.src)">';
                        echo '</div>';
                    }
                }
            ?>
        </div>

        <div id="modal" class="modal" onclick="fecharModal()">
            <span class="fechar" onclick="fecharModal()">&times;</span>
            <img class="modal-conteudo" id="imagemModal">
        </div>

    </section>

</div>

<?php include 'footer.php'; ?>

</body>
</html>
