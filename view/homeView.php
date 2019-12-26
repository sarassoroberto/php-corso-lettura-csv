<?php include "./view/parts/head.php" ?>
	<body>

		<?php include "./view/parts/navbar.php" ?>
		<?php include "./view/parts/header.php" ?>
      
        <main class="container">

			<div class="row">
				<div class="col-md-8 main-content">
						<?php include "./view/parts/article-list.php" ?>
                        <aside class="pl-sm-0 row">
							<!-- <?php include "./view/parts/article-list-bottom-aside.php" ?> -->
							
							<?php ArticleList::render([
									'header' => 'Ciccio 3',
									'data' => $antipasti,
									'view' => 'article-list-bottom-aside',
									'limit' => 3,
								  ]);?>
                        </aside>
				</div>
				<aside class="col-md-4 pl-sm-0">
				<?php ArticleList::render([
						'header' => 'Ciccio 2',
						'data' => $antipasti,
						'view' => 'article-list-small',
						'limit' => 3,
				]);?>

				<?php ArticleList::render([
						'header' => 'Ciccio 1',
						'data' => $antipasti,
						'view' => 'article-list-small',
						'limit' => 3,
				]);?>
				
					
				</aside>
			</div>
		</main>

		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	
		
	</body>
</html>