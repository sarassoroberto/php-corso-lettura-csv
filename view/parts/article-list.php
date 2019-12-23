<section class="article-list mb-4">
						<h1 class="h3"><?= $categoriaPrincipale ?></h1>
						<?php foreach ($ricetteCategoriaPrincipale as $key => $ricetta) { ?>
							
                            <article class="row no-gutters mb-3">
								<div class="col-md-3">
									<img class="img-fluid" src="https://dummyimage.com/600x600/ebdfeb/c0c2e0&text=foto+ricetta" alt="">

								</div>
								<div class="col-md-9 p-3 pt-sm-0">
									<div class="d-flex justify-content-between align-items-center">

										<h1 class="h4 my-3">
											<a href="?controller=dettaglio&cat=<?=$key?>">
													<?= $ricetta['Titolo Articolo'] ?>
												</a>
											</h1>
											
											
                                        </div>
                                        <p> <?= wordsLimit($ricetta['preparazione_corretta'],20) ?> </p>
                                        <div class="info h6">
												<i  class="fa fa-clock-o"></i> <?= $ricetta['Tempo_stimato'] ?>
												<i  class="fa fa-user"></i> <?= $ricetta['Nome'] ?>
										</div>
								</div>

							</article>
                        <?php } ?>

</section>