<main><?php

    foreach($arr_dischi as $disc){ ?>

    <img src="<?=$disc['poster']  ?>" alt="">
    <div>
        <h4><?= $disc['title'] ?></h4>
        <p><?= $disc['author'] ?></p>
        <p><?= $disc['year'] ?></p> 

    </div><?php

    }?>

</main>


