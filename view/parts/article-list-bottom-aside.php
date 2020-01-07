<section class="article-list mb-4 col-md-12">
<div class="row no-gutters">
	<h1 class="h3"><?= $setting['header']  ?></h1>
</div>
	<div class="row">
		<?php foreach ($setting['data'] as $key => $value) { ?>
			<div class="col-md-4 px-2">

			
			<article class="mb-3">
					<div class="article-img">
						<img class="img-fluid" src="https://dummyimage.com/600x600/ebdfeb/c0c2e0&text=foto+ricetta" alt="">
					</div>
					<div class="article-content">
						<h1 class="h6 mb-1 truncate"><?= $value['Titolo Articolo']?></h1>
						<p class="truncate">
						<?= wordsLimit($value['preparazione_corretta'],6)?>
						</p>
						
					</div>

			</article>
		</div>
			<?php } ?>


	</div>

	

	


</section>