<?php

class TwoColumn {

    public $header = "";
    public $itemTitle= "";
    public $items = "";
    public $itemRender = "";

    public static $count=0;
    public $id;

    public $className = "";
    public $colPadding;
    public $classItem;

    public function __construct($setting,$item) {
        //print_r($setting);
        $this->item = $item;
        $this->itemTitle = $setting['itemTitle'];
        $this->itemRender = $setting['itemRender'];
        $this->itemSubTitle = $setting['itemSubTitle'];
        $this->colPadding = $setting['colPadding'];
        $this->classItem = $setting['classItem'];
        $this->itemContent = $setting['itemContent'];
        $this->id = "_".self::$count++ ;
        $this->className = strtolower(__CLASS__);
        $this->render();
    }


    public function render(){ ?>
         <!-- <h1 class="h5"><?= $this->item[$this->itemTitle] ?></h1> -->
         <div class="row no-gutters <?= $this->className ?>">
             <div class="col-md-6">
                    <img class="img-fluid" src="./view/asset/img/01_Fagioli.jpg" 
                                    alt="<?= $this->item[$this->itemTitle] ?>" >
                 
                 
            </div>
            <div class="col-md-6 bg-dark text-white <?= isset($this->colPadding) ? $this->colPadding : 'px-5 py-5' ?>">
                
                <h1 class="h5"><?= $this->item[$this->itemTitle] ?></h1>
                <p><?= $this->item[$this->itemSubTitle] ?></p>
                <?php if(isset($this->itemContent)) { ?>
                    <div class="content"><?= $this->item[$this->itemContent] ?></div>

                <?php } ?>
             </div>
         </div>
    <?php }
}