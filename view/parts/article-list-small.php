<section class="article-list mb-4">
	
	<h1 class="h3"><?= $setting['header']?></h1>
	
	<?php  foreach ($setting['data'] as $key => $article) { ?>
							<article class="row no-gutters mb-3">
									<div class="col-3">
										<img class="img-fluid" src="https://dummyimage.com/600x600/ebdfeb/c0c2e0&amp;text=foto+ricetta" alt="">
		
									</div>
									<div class="col-8 px-3">
										<h1 class="h4 mb-1"><?php echo $article['Titolo Articolo'] ?></h1>
										<p><?= wordsLimit($article['preparazione_corretta'],5) ?>
										</p>
		
									</div>
		
							</article>
							<?php  } ?>
	
							
			
	
					</section>
					<!-- view\parts\article-list-small.php -->