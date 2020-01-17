<?php

class ArticleListBigAndList
{

    public static $count = 0;

    public function __construct($setting)
    {
        $this->header = $setting['header'];
        $this->setting = $setting;
        $this->items = $setting['items'];
        $this->colSequence = $setting['colSequence'];
        $this->id = "_" . self::$count++;
        $this->render();
    }



    public function render()
    { ?>
        <?php "<pre>" . print_r($this->items[0], true) . "</pre>" ?>
        <section>
            <div class="row">
                <div class="col-md-12">
                    <h1><?= $this->header ?></h1>

                </div>
            </div>
            <div class="row">

                <div class="col-md-6">
                    <h1 class="h4">In primo piano</h1>
                    <?php new RicettaArticle($this->items[0]); ?>

                </div>
                <div class="col-md-6">

                    <div class="row">
                        <div class="col-md-6">
                           
                            <?php new RicettaArticle($this->items[1]); ?>

                        </div>
                        <div class="col-md-6">

                            <?php new RicettaArticle($this->items[2]); ?>

                        </div>
                        <div class="col-md-6">

                            <?php new RicettaArticle($this->items[3]); ?>

                        </div>
                        <div class="col-md-6">

                            <?php new RicettaArticle($this->items[4]); ?>

                        </div>
                       

                    </div>


                </div>


            </div>
        </section>

<?php }
}
