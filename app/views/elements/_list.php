<!-- List all the movies and link them back to the similar screen so user can keep clicking -->
<ul>
	<?php foreach ($movies as $movie) : ?>
	<li><a href="index.php?action=similar&id=<?php echo $movie->id; ?>"><?php echo $movie->title; ?></a> (<?php echo $movie->release_date; ?>)</li>
	<?php endforeach; ?>
</ul>
