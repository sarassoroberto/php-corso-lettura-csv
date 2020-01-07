<?php

class ProgressiveItemCol
{

    public static $count = 0;

    public function __construct($setting)
    {
        //print_r($setting);
        $this->setting = $setting;
        $this->items = $setting['items'];
        // $this->itemTitle = $setting['itemTitle'];
        // $this->itemRender = $setting['itemRender'];
        // $this->itemSubTitle = $setting['itemSubTitle'];
        // $this->itemContent = $setting['itemContent'];
        $this->colSequence = $setting['colSequence'];
        $this->id = "_" . self::$count++;
        $this->render();
    }



    public function render()
    { ?>
        <div class="row">

            <div class="col-md-6">

                <article class="mb-3">
                    <div class="article-img">
                        <img class="img-fluid" src="https://dummyimage.com/600x600/ebdfeb/c0c2e0&text=foto+ricetta" alt="">
                    </div>
                    <div class="article-content">
                        <h1 class="h6 mb-1 truncate"><?= $this->items[0]['Titolo Articolo'] ?></h1>
                        <p class="truncate">
                            <?= wordsLimit($this->items[0]['preparazione_corretta'], 6) ?>
                        </p>

                    </div>
                </article>
                
            </div>
            <div class="col-md-6">

                <article class="mb-3">
                    <div class="article-img">
                        <img class="img-fluid" src="https://dummyimage.com/600x600/ebdfeb/c0c2e0&text=foto+ricetta" alt="">
                    </div>
                    <div class="article-content">
                        <h1 class="h6 mb-1 truncate"><?= $this->items[1]['Titolo Articolo'] ?></h1>
                        <p class="truncate">
                            <?= wordsLimit($this->items[1]['preparazione_corretta'], 6) ?>
                        </p>

                    </div>
                </article>

            </div>
            <div class="col-md-3">

            <article class="mb-3">
                    <div class="article-img">
                        <img class="img-fluid" src="https://dummyimage.com/600x600/ebdfeb/c0c2e0&text=foto+ricetta" alt="">
                    </div>
                    <div class="article-content">
                        <h1 class="h6 mb-1 truncate"><?= $this->items[5]['Titolo Articolo'] ?></h1>
                        <p class="truncate">
                            <?= wordsLimit($this->items[5]['preparazione_corretta'], 6) ?>
                        </p>

                    </div>
                </article>



            </div>
            <div class="col-md-3">

            <article class="mb-3">
                    <div class="article-img">
                        <img class="img-fluid" src="https://dummyimage.com/600x600/ebdfeb/c0c2e0&text=foto+ricetta" alt="">
                    </div>
                    <div class="article-content">
                        <h1 class="h6 mb-1 truncate"><?= $this->items[2]['Titolo Articolo'] ?></h1>
                        <p class="truncate">
                            <?= wordsLimit($this->items[2]['preparazione_corretta'], 6) ?>
                        </p>

                    </div>
                </article>

            </div>
            <div class="col-md-3">

            <article class="mb-3">
                    <div class="article-img">
                        <img class="img-fluid" src="https://dummyimage.com/600x600/ebdfeb/c0c2e0&text=foto+ricetta" alt="">
                    </div>
                    <div class="article-content">
                        <h1 class="h6 mb-1 truncate"><?= $this->items[3]['Titolo Articolo'] ?></h1>
                        <p class="truncate">
                            <?= wordsLimit($this->items[3]['preparazione_corretta'], 6) ?>
                        </p>

                    </div>
                </article>



            </div>
            <div class="col-md-3">


            <article class="mb-3">
                    <div class="article-img">
                        <img class="img-fluid" src="https://dummyimage.com/600x600/ebdfeb/c0c2e0&text=foto+ricetta" alt="">
                    </div>
                    <div class="article-content">
                        <h1 class="h6 mb-1 truncate"><?= $this->items[4]['Titolo Articolo'] ?></h1>
                        <p class="truncate">
                            <?= wordsLimit($this->items[4]['preparazione_corretta'], 6) ?>
                        </p>

                    </div>
                </article>

            </div>
        </div>
<?php }
}
