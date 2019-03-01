		<!-- Carousel -->
			<div class="carousel" id="projects">
				<h2>All Projects in Category <strong><?php echo "$CAT";?></strong></h2>
				<div class="reel">
				<?php
					//print_r($prjImages);
					foreach ($prjImages[$CAT] as $prj => $images) {
						echo '<article>';
						$lf = '';
						foreach ($images as $img) {
							$lf = $img;
						}
						$lff = str_replace('prj', 'prj-s', $lf);

						echo "<a href='project.php?cat=$CAT&prj=$prj'>";
						echo "<div><img src='$lff'/></div>";
						//echo "<header><h3>$cat -- $prj</h3></header>";
						echo "<header><h3>".getPrjName($prj)."</h3></header>";
						//echo "<p>".$prjText[$cat][$prj]."</p>";
						echo "</a>";
						echo '</article>';
					}
				?>
				</div>
			</div>

