<main>
    <div class="container">
        
    
            <?php
    
            foreach ($arr_dischi as $disc) { ?>

                <div class="disc">

                    <img src="<?= $disc['poster']  ?>" alt="">
                    <div class="info">
                        <h4><?= $disc['title'] ?></h4>
                        <span><?= $disc['author'] ?></span>
                        <span><?= $disc['year'] ?></span>
                        
                    </div>
                        
                </div><?php
    
            } ?>
    
    
        


    </div>

</main>