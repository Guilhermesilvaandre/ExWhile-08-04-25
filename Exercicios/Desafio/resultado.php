<?php
$sorte = $_GET['sorte'];
$tentativas = $_GET['tentativas'];
?>

<h2>Parabéns, você acertou!</h2>
<p>O número da sorte era: <strong><?php echo $sorte; ?></strong></p>
<p>Você acertou após <strong><?php echo $tentativas; ?></strong> tentativa(s).</p>

<a href="index.php">Jogar novamente</a>