<!-- Left column: Selected movie image and description -->
<div class="col-md-2">
	<div><img src="<?php echo 'http://image.tmdb.org/t/p/w154'.$movie->poster_path; ?>" class="img-thumbnail" width="150" height="225"></div>
	<h4><?php echo $movie->title; ?></h4>
	<p><?php echo $movie->overview; ?></p>
</div>

<!-- Middle column: Similar Movies -->
<div class="col-md-6">
	<p>Similar Movies:</p>
	<?php include "_list.php"; ?>
</div>

<!-- Right column: User's history (last 20 movies clicked) -->
<div class="col-md-4">
	<div class="panel panel-info">
		<div class="panel-heading"><span class="glyphicon glyphicon-heart"></span> Your History (last 20 movies)</div>
		<div class="panel-body">
			<ul>
				<?php foreach ($user_movienames as $moviename) : ?>
				<li><?php echo $moviename; ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
</div>
