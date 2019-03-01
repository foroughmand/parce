			<div class="carousel" id="projects">
				<h2>Projects</h2>
				<div class="reel">
				<?php
					//print_r($prjImages);
					foreach ($prjImages as $cat => $prjImgs) {
						foreach ($prjImgs as $prj => $images) {
							echo '<article>';
							$lf = '';
							foreach ($images as $img) {
								$lf = $img;
							}
							$lff = str_replace('prj', 'prj-s', $lf);

							echo "<a href='project.php?cat=$cat&prj=$prj'>";
							echo "<div><img src='$lff'/></div>";
							//echo "<header><h3>$cat -- $prj</h3></header>";
							echo "<header><h3>".getPrjName($prj)."</h3></header>";
							//echo "<p>".$prjText[$cat][$prj]."</p>";
							echo "</a>";
							echo '</article>';
						}
					}
				?>

				</div>
			</div>

