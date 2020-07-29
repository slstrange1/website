<?php

require("header.php");

$file_location = "content/blog.csv";
$file = fopen($file_location, "r");


?>

<h1>Blog</h1>
<hr />

<div class="row mb-2">
<?php
    $row = 0;
    while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {
?>
    <div class="col-md-6">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary">Strange Blogging</strong>
                <h3 class="mb-0"><?=$data[0]?></h3>
                <div class="mb-1 text-muted"><?=$data[3]?></div>
                <p class="card-text mb-auto"><?=$data[1]?></p>
                <a href="#">Continue reading</a><br />
                <a href="/admin.php?id=<?=$row?>">Edit</a><br />
            </div>
            <div class="col-auto d-none d-lg-block">
                <?php
                    if(isset($data[4])){
                ?>
                    <img src=<?=$data[4]?> alt="Pics" height="250px" width="150px" class="img-thumbnail">
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
<?php
        $row++;
    }
?>

</div>

<!-- <div class="row mb-4">
    <div class="col-md-3">
        Dogs
    </div>
    <div class="col-md-3">
        Cats
    </div>
    <div class="col-md-3">
        Birds
    </div>
    <div class="col-md-3">
        Rabbits
    </div>
</div> -->




<?php

require("footer.php");


?>

