<?php
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$mensagem = $_POST['mensagem'] ?? '';

echo "<h2>Obrigado, $nome!</h2>";
echo "<p>Recebemos sua mensagem:</p>";
echo "<blockquote>$mensagem</blockquote>";
echo "<p>Entraremos em contato pelo e-mail: $email</p>";
?>
