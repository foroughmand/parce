			<div class="wrapper style1" id="project-categories">
				
				<section id="features" class="container special">
					<header>
						<h2>Projects by Categories</h2>
						<span class="byline">Here you can find projects by categories.</span>
					</header>
					<div class="row">
						<?php
						$index = 0;
						//print_r($prjImages);
						foreach ($prjImages as $cat => $prjImgs) {
							/*if ($index % 4 == 0) {
								echo '</div>';
								echo '<div class="row">';
							}*/
							$index++;
							echo '<article class="4u special">';
							$lf = '';
							foreach ($prjImgs as $prj => $images) {
								foreach ($images as $img) {
									$lf = $img;
								}
							}
							$lff = str_replace('prj', 'prj-s', $lf);
							echo "<a href='category.php?cat=$cat'>";
							echo "<div style='height: 200px'><img src='$lff'/></div>";
							echo "<header><h3>$cat</h3></header>";
							echo "<p>".$catText[$cat]."</p>";
							echo "</a>";
							echo '</article>';
						}
						?>
					</div>
				</section>

			</div>

