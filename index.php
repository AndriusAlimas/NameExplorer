<?php 
require __DIR__ . "/inc/all.inc.php";

$char = strtoupper((string)($_GET['char'] ?? ''));
if(strlen($char) > 1){
    $char = $char[0];
}
$stmt = $pdo->prepare("SELECT DISTINCT `name` FROM `names` WHERE `name` LIKE :expr ORDER BY `name` ASC");
$stmt->bindValue(":expr","{$char}%");
$stmt->execute();

$names = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php require __DIR__ . "/views/header.php" ?>
<?php var_dump($names); ?>
<?php require __DIR__ . '/views/footer.php' ?>