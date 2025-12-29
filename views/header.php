<?php
$currentDir = basename(dirname($_SERVER['SCRIPT_NAME'])); // Get the current directory
$basePath = ($currentDir === 'views') ? '../index.php' : 'index.php'; // Choose path based on context
$alphabetList = gen_alphabet();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/PHP_course/Projects/NameExplorer/styles/simple.css" />
    <link rel="stylesheet" type="text/css" href="/PHP_course/Projects/NameExplorer/styles/custom.css" />
    <title>Name explorer</title>
</head>
<body>
    <header>
        <h1>Name explorer</h1>
        <p>Explore and find names</p>
         <nav>
        <?php foreach($alphabetList  AS $character): ?>
            <a href="<?php echo $basePath . '?' . http_build_query(['char' => $character]); ?>"><?php echo e($character); ?></a>
        <?php endforeach; ?>
    </nav>
    </header>
   
    <main>