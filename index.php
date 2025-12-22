<?php 
require __DIR__ . "/inc/all.inc.php";

$char = (string)($_GET['char'] ?? '');
if(strlen($char) > 1){
    $char = $char[0];
}
?>

<?php require __DIR__ . "/views/header.php" ?>
<?php require __DIR__ . '/views/footer.php' ?>