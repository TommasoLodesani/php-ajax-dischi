<main>
    <div class="container">
        <div class="disc">
    
            <?php
    
            foreach ($arr_dischi as $disc) { ?>
    
                <img src="<?= $disc['poster']  ?>" alt="">
                <div class="info">
                    <h4><?= $disc['title'] ?></h4>
                    <span><?= $disc['author'] ?></span>
                    <span><?= $disc['year'] ?></span>
    
                </div><?php
    
            } ?>
    
    
        </div>


    </div>

</main>