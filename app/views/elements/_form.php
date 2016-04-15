<!-- The top navbar and search form -->
<div class="navbar navbar-inverse">
	<div class="container">
		<div class="navbar-header navbar-brand"><a href="index.php?action=index">Find Similar Movies</a></div>
		<div class="collapse navbar-collapse">
			<form action="index.php" method="GET" class="navbar-form navbar-right">
				<input type="text" name="searchterm" class="form-control" placeholder="Enter a movie title">
				<input type="hidden" name="action" value="search" />
				<button type="submit" class="btn btn-success">Search</button>
			</form>
		</div>
	</div>
</div>
