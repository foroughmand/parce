<?php
include('header.php');
$CAT = $_GET['cat'];
$PRJ = $_GET['prj'];
?>
<script>
$(document).ready(function(){
	$('#imageList img').click(function() { 
		//console.log($(this)); 
		//$('#mainImage').prop('src', 'https://png.pngtree.com/element_pic/17/07/21/4b7563da458e031e923608ba39c04670.jpg').load(function() {
			$('#mainImage').attr('src', $(this).prop('src').replace('prj-s', 'prj')).load(function() {
			}); 
		//}); 
	})
	$('#imageList img').first().trigger("click");
});
</script>
<style>
.wrapper {
	padding: 1em 1em 0em 1em;
	margin: 1em 1em 1em 1em;
	overflow: hidden;
}
.small-photos article {
	height: 210px;
}
.carousel {
	padding: 0.1em 0 0.1em 0;
}
#mainImage {
    max-width: 100%;
    max-height: 100%;
}
</style>
		<!-- Carousel -->
		<div >
			<div class="wrapper style2 row" style='height: 700px;'>

				<article style='width: 25%; display: inline-block; margin: 2em; '>
					<header>
					<h3><?php /*echo "$PRJ ($CAT)";*/ echo getPrjName($PRJ); ?></h3>
					<p>
					<?php 
						$a = getPrjInfo($PRJ); 
						echo "Employer: ".$a[6] . "<br>";
						if ($CAT == "Competition")
							echo "Comptition Result: ";
						else
							echo "Place: " ;
						echo $a[7] . "<br> Type: " . $a[8];
					?>
					</p>
					</header>
					<?php
					if ($prjText[$CAT][$PRJ] == "") {
						echo "<p>&nbsp;</p>";
						//print_r($prjText);
						//echo "$CAT $PRJ|";
					} else {
						echo "<div style='overflow-y: scroll; height: 30%;'>";
						echo "<p>".$prjText[$CAT][$PRJ]."</p>";
						echo "</div>";
					}
					?>
				</article>
				<article id="main" class="special" style='display: inline-block; width: 64%; overflow: hidden; '>
					<img id='mainImage' src="" alt="" style="margin: 1em;" />
				</article>

			</div>

			<div class="carousel" id="projects">
				<div class="reel small-photos" id="imageList">
				<?php
					//print_r($prjImages);
					//foreach ($prjImages as $cat => $prjImgs) {
					//	foreach ($prjImgs as $prj => $images) {
							foreach ($prjImages[$CAT][$PRJ] as $img) {
								echo '<article>';
								$lff = str_replace('prj', 'prj-s', $img);
								echo "<a class='image featured' style='height: 75px;' ><img src=\"$lff\"/></a>";
								// echo "<header><h3>$cat -- $prj</h3></header>";
								echo '</article>';
							}
					//	}
					//}
				?>
				</div>
			</div>
		</div>

<div class="wrapper">
<?php include('all-in-category.php'); ?>
</div>
<?php include('all-category.php'); ?>
			
<?php
include('footer.php');
?>
