<?php

Class Carousel {
    
    public $header = "";
    public $itemTitle= "";
    public $items = "";
    public $itemRender = "";

    public static $count=0;
    public $id;

    public function __construct($setting) {
        //print_r($setting);
        $this->setting = $setting;
        $this->items = $setting['items'];
        $this->itemTitle = $setting['itemTitle'];
        $this->itemRender = $setting['itemRender'];
        $this->itemSubTitle = $setting['itemSubTitle'];
        $this->itemContent = $setting['itemContent'];
        $this->id = "_".self::$count++ ;
        $this->render();
    }

    public function getActive($key)
    {
        return $key == 0 ? 'active':'';
    }


    public function render(){ 
      
        ?>
        <h1><?= $this->header ?></h1>
        <div id="<?= $this->id ?>" class="carousel slide mb-4" data-ride="carousel">

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
                <?php foreach ($this->items as $key => $item) { 
                    if(isset($this->itemrender)){
                    ?>
                    <div class="carousel-item <?= $this->getActive($key) ?>">
                        
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="h5"><?= $item[$this->itemTitle] ?></h1>
                            <p><?= $item[$this->itemSubTitle] ?></p>
                        </div>
                        <img class="img-fluid" src="./view/asset/img/01_Fagioli.jpg" 
                             alt="<?= $item[$this->itemTitle] ?>" >
                    </div>
                <?php 
                    } // if
                    else{
                        ?>
                        <div class="carousel-item <?= $this->getActive($key) ?>">
                            <?php  new $this->itemRender($this->setting,$item); ?>
                        </div>
                    <?php } // else
                    } 
                ?>
             
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