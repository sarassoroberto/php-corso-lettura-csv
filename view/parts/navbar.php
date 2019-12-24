<nav class="navbar navbar-expand-xl navbar-dark bg-dark">
				<a class="navbar-brand" href="index.php">Navbar</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav">
						  <li class="nav-item active">
							<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
						  </li>
						 <?php 
						  
						 
						 foreach ($menuitems as $item) { ?>
							<li class="nav-item active">
								<a class="nav-link" href="categoria.php?cat=<?php echo $item ?>"><?php echo $item ?><span class="sr-only">(current)</span></a>
						  	</li>
						<?php } ?>
						 
						</ul>
				</div>
		</nav>