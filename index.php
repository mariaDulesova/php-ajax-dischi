<?php 

require __DIR__ ."/db/database.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Disks</title>
</head>
<body>
    <header></header>
    <main>
    <?php foreach($disks as $disk) {?>
        <img src= "<?= $disk["poster"];?>" alt="<?= $disk["title"];?>">
        <h5> <?= $disk["title"]; ?></h5>
        <div> <span><?= $disk["author"]; ?> </span></div>
        <div> <span><?= $disk["year"]; ?></span> </div>
    <?php };?>
    
    </main> 
</body>
</html>
