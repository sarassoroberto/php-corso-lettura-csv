<?php

Class Carousel {
    
    public $header ="";
    public $itemTitle="";
    public $items ="";

    public static $count=0;
    public $id;

    public function __construct($setting) {
        $this->items = $setting['items'];
        $this->itemTitle = $setting['itemTitle'];
        $this->itemSubTitle = $setting['itemSubTitle'];
        $this->id = "_".self::$count++ ;
        $this->render();
    }

    public function getActive($key)
    {
        return $key == 0 ? 'active':'';
    }


    public function render(){ ?>
        <h1><?= $this->header ?></h1>
        <div id="<?= $this->id ?>" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <?php foreach ($this->items as $key => $item) { ?>
                        <li data-target="#<?= $this->id ?>" data-slide-to="<?=$key?>" 
                            class="<?= $this->getActive($key) ?>" >
                        </li>           
                    <?php } ?>
                    <!-- <li data-target="#<?= $this->id ?>" data-slide-to="1"></li>
                    <li data-target="#<?= $this->id ?>" data-slide-to="2"></li> -->
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                <?php foreach ($this->items as $key => $item) { ?>
                    <div class="carousel-item <?= $this->getActive($key) ?>">
                        
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="h5"><?= $item[$this->itemTitle] ?></h1>
                            <p><?= $item[$this->itemSubTitle] ?></p>
                        </div>
                        <img class="img-fluid" src="./view/asset/img/01_Fagioli.jpg" 
                             alt="<?= $item[$this->itemTitle] ?>" >
                    </div>
                <?php } ?>
             
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#<?= $this->id ?>" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#<?= $this->id ?>" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                </a>
        </div>

    <?php } 
}