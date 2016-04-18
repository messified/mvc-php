<ul>
	<?php
		if (isset($movies) && !empty($movies)) {
			$href = '_home.php?action=similar&id=';
			foreach ($movies as $movie) {
				echo '<li><a href="_home.php?action=similar&id='.$movie->id.'">' . $movie->title . '</a></li>';
			}
		}
	?>
</ul>
