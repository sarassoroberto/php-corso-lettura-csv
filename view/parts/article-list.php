<section class="article-list mb-4">
						<h1 class="h3"><?= $setting['header'] ?></h1>
						<?php foreach ($setting['data'] as $key => $value) { ?>
							
                            <article class="row no-gutters mb-3">
								<div class="col-md-3">
									<img class="img-fluid" src="https://dummyimage.com/500x500/ebdfeb/c0c2e0" alt="">

								</div>
								<div class="col-md-9 p-3 pt-sm-0">
									<div class="d-flex justify-content-between align-items-center">

										<h1 class="h4 my-3">
											<a href="?controller=dettaglio&id=<?=$id?>">
													<?= $value['Titolo Articolo'] ?>
												</a>
											</h1>
											
											
                                        </div>
                                        <p> <?= wordsLimit($value['preparazione_corretta'],20) ?> </p>
                                        <div class="info h6">
												<i  class="fa fa-clock-o"></i> <?= $value['Tempo_stimato'] ?>
												<i  class="fa fa-user"></i> <?= $value['Nome'] ?>
										</div>
								</div>

							</article>
                        <?php } ?>

</section>