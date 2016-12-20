<!-- Static navbar -->
<nav class="navbar navbar-default navbar-static-top">
	<div class="container">
		<div class="navbar-header">
	  		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
	  		</button>
	  		<a class="navbar-brand" href="/">Tune Tracker</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
	  		<ul class="nav navbar-nav navbar-right">
				<li class="{{ Route::currentRouteNamed('bands.index') ? 'active' : '' }}">
					<a href="{{ URL::route('bands.index') }}">Bands</a>
				</li>
				<li class="{{ Route::currentRouteNamed('albums.index') ? 'active' : '' }}">
					<a href="{{ URL::route('albums.index') }}">Albums</a>
				</li>
	  		</ul>
		</div>
  	</div>
</nav>