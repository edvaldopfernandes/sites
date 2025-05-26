<!DOCTYPE html>
<html lang="pt-BR">

<?php include 'head.php'; ?>

<body>

	<?php include 'header.php'; ?>

	<?php include 'carrossel.php'; ?>'

	<section class="conteudo">
		<h2>Fale Conosco</h2>
        <form action="processa.php" method="POST">
            <input type="text" name="nome" placeholder="Seu nome" required><br>
            <input type="email" name="email" placeholder="Seu e-mail" required><br>
            <textarea name="mensagem" placeholder="Sua mensagem" rows="5" required></textarea><br>
            <button type="submit">Enviar</button>
        </form>
	</section>

	<?php include 'footer.php'; ?>'
	
	<script src="js/slider.js"></script>
</body>

</html>