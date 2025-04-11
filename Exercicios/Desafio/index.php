<?php
$sorte = rand(1, 100);
$tentativas = 0;
?>
<title>😱 Desafio 😱</title>
<h2>Desafio !!!</h2>
<p>Digite um número entre 1 e 100:</p>

<form action="calcular.php" method="post">
    <input type="number" name="palpite" required>
    <input type="hidden" name="sorte" value="<?php echo $sorte; ?>">
    <input type="hidden" name="tentativas" value="<?php echo $tentativas; ?>">
    <input type="submit" value="Verificar">
</form>
