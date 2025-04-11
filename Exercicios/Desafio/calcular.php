<?php
$palpite = $_POST['palpite'];
$sorte = $_POST['sorte'];
$tentativas = $_POST['tentativas'] + 1;

if ($palpite == $sorte) {
    header("Location: resultado.php?sorte=$sorte&tentativas=$tentativas");
    exit;
} else {
    $dica = $palpite > $sorte ? "menor" : "maior";
    ?>

    <h2>Você errou!</h2>
    <p>Tente um número <strong><?php echo $dica; ?></strong> que <?php echo $palpite; ?>.</p>

    <form action="calcular.php" method="post">
        <input type="number" name="palpite" required>
        <input type="hidden" name="sorte" value="<?php echo $sorte; ?>">
        <input type="hidden" name="tentativas" value="<?php echo $tentativas; ?>">
        <input type="submit" value="Tentar novamente">
    </form>

<?php
}
?>
