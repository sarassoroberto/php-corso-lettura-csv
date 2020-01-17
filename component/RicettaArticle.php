<?php

class RicettaArticle {
    
    public function __construct($item) {
        $this->item = $item;
        $this->render();
    }



    public function render(){
        // echo "<pre>".print_r($this->item['Immagine'])."</pre>";                  
        ?>   
        <article class="mb-3 position-prelative">
            <div class="regione position-absolute bg-primary px-2 py-1 text-light"><?= $this->item['Regione'] ?></div>
            <div class="article-img">
                <img class="img-fluid" src="<?= $this->item['Immagine'] ?>" alt="">
            </div>
            <div class="article-content">
                <h1 class="h6 mb-1 truncate"><?= $this->item['Titolo Articolo'] ?></h1>
                <p class="truncate">
                    <?= wordsLimit($this->item['preparazione_corretta'], 6) ?>
                </p>

            </div>
        </article>
        <?php
    }
}