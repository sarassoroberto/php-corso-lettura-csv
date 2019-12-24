<section class="article-list">
	<h1 class="h3 my-3">Altri primi piatti</h1>
	<!-- <h3 class="my-3">Preparazione</h3> -->
	<div class="row">

		<?php  foreach ($articleList as $key => $article) { ?>
					<div class="col-md-3">
					<article class="row no-gutters mb-3">
						<div class="col-3 col-sm-12 ">
							<img class="img-fluid" src="https://dummyimage.com/600x600/ebdfeb/c0c2e0&text=foto+ricetta" alt="">
		
						</div>
						<div class="col-8 col-sm-12 px-3">
							<h1 class="h4 mb-1"><?php echo $article['Titolo Articolo'] ?></h1>
							<p> <?= wordsLimit($article['preparazione_corretta'],5) ?> </p>
		
						</div>
		
					</article>
				</div>
		<?php } ?>


		
	</div>

</section>