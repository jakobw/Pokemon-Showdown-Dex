<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title>Pok&eacute;dex - Pok&eacute;mon Showdown</title>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//play.pokemonshowdown.com/style/font-awesome.css" />
	<link rel="stylesheet" href="/theme/panels.css?b1" />
	<link rel="stylesheet" href="/theme/main.css?b1" />
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="//play.pokemonshowdown.com/style/utilichart.css?b359" />
	<link rel="stylesheet" href="/theme/pokedex.css?b359" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first" href="//pokemonshowdown.com/"><img src="/images/pokemonshowdownbeta.png" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button cur" href="/">Pok&eacute;dex</a></li>
				<li><a class="button" href="//replay.pokemonshowdown.com/">Replays</a></li>
				<li><a class="button" href="//pokemonshowdown.com/ladder/">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
	<div class="pfx-panel"><div class="pfx-body">
<?php if (substr($_SERVER['REQUEST_URI'], 0, 5) === '/') { ?>
		<form class="pokedex">
			<h1>
				<a href="/">Pok&eacute;dex</a>
			</h1>
			<ul class="tabbar centered" style="margin-bottom: 18px"><li><button class="button nav-first cur" value="">Search</button></li><li><button class="button" value="pokemon/">Pokémon</button></li><li><button class="button nav-last" value="moves/">Moves</button></li></ul>
			<div class="searchboxwrapper">
				<input class="textbox searchbox" type="text" name="q" value="<?php echo @$_REQUEST['q'] ?>" autocomplete="off" autofocus placeholder="Search Pok&eacute;mon, moves, abilities, items, types, or more" />
			</div>
			<noscript><p>
				<strong>Requires JavaScript!</strong>
			</p></noscript>
			<p class="buttonbar">
				<button type="submit" class="button"><strong>Pok&eacute;dex Search</strong></button> <button onclick="alert(['That\'s pretty cool.','Your mom\'s feeling lucky.','I see.','If you feel lucky for more than four hours, perhaps you should see a doctor.'][Math.floor(Math.random()*4)]); return false" class="button">I'm Feeling Lucky</button>
			</p>
		</form>
		<div class="results">
		</div>
<?php } else { ?>
		<noscript><p>
			<strong>Requires JavaScript!</strong>
		</p></noscript>
		<p>
			Loading...
		</p>
<?php } ?>
	</div></div>
	<script src="/js/lib/jquery-1.12.4.min.js"></script>
	<script src="/js/lib/lodash.min.js"></script>
	<script src="/js/lib/backbone-min.js"></script>
	<script src="/js/panels.js"></script>

	<script src="//play.pokemonshowdown.com/js/battledata.js?v0.9xy31"></script>
	<script src="//play.pokemonshowdown.com/data/search-index.js?v0.9xy31"></script>
	<script src="//play.pokemonshowdown.com/data/pokedex.js?v0.9xy31"></script>
	<script src="//play.pokemonshowdown.com/data/teambuilder-tables.js?v0.9xy31"></script>
	<script src="//play.pokemonshowdown.com/data/learnsets-g6.js?v0.9xy31"></script>
	<script src="//play.pokemonshowdown.com/data/moves.js?v0.9xy31"></script>
	<script src="//play.pokemonshowdown.com/data/abilities.js?v0.9xy31"></script>
	<script src="//play.pokemonshowdown.com/data/items.js?v0.9xy31"></script>
	<script src="//play.pokemonshowdown.com/data/typechart.js?v0.9xy31"></script>
	<script src="//play.pokemonshowdown.com/data/aliases.js?v0.9xy31"></script>
	<script src="//play.pokemonshowdown.com/js/search.js?b359"></script>
	<script src="/js/pokedex.js?b359"></script>

</body></html>
