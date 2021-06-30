<?php 

require __DIR__ ."/db/database.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Disks</title>
</head>
<body>
    <header></header>
    <main>
        <section class='d-flex justify-content-center align-items-center flex-wrap ms-disk-container'>
            <?php foreach($disks as $disk) {?>
                <div class="d-flex flex-column  my-5 mx-1 p-3 ms-disks">
                    <img src= "<?= $disk["poster"];?>" alt="<?= $disk["title"];?>" class="px-2">
                    <div class="text-center">
                        <h5> <?= $disk["title"]; ?></h5>
                        <div> <span><?= $disk["author"]; ?> </span></div>
                        <div> <span><?= $disk["year"]; ?></span> </div>
                    </div>    
                </div>  
            <?php };?>
        </section>
    </main> 
</body>
</html>
