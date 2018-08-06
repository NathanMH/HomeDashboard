<html>

<?php include('header.php'); ?>
<?php include('navbar.php'); ?>

<body>

	<div class="jumbotron">
		<div class="container">
			<h1> Chez Lara & Nate</h1>
			<h2>Games!</h2>
		</div>
	</div>

	<div class="container">
		<div class="row-fluid">
			<!-- Control buttons -->
			<div class="text-center">
				<div class="btn-group flex-wrap" role="toolbar">
					<button type="button" class="btn btn-primary" onclick="filterSelection('all')">Show All</button>
					<button type="button" class="btn btn-primary" onclick="filterSelection('strategy')">Strategy</button>
					<button type="button" class="btn btn-primary" onclick="filterSelection('casual')">Casual</button>
					<button type="button" class="btn btn-primary" onclick="filterSelection('coop')">Cooperative</button>
					<button type="button" class="btn btn-primary" onclick="filterSelection('word')">Word</button>
				</div>
			</div>
		</div>

		<!-- The filterable elements. Note that some have multiple class names (this can be used if they belong to multiple categories) -->
		<div class="container">

			<button class="list-group-item filterDiv strategy" type="button" data-toggle="collapse" data-target="#splendor">
				Splendor
			</button>
			<div class="collapse" id="splendor">
				<div class="card card-body">
					<div>
						<p>Splendor is a game of chip-collecting and card development. Players are merchants of the Renaissance trying to buy gem mines, means of transportation, shops—all in order to acquire the most prestige points. If you're wealthy enough, you might even receive a visit from a noble at some point, which of course will further increase your prestige.</p>
						<p>On your turn, you may (1) collect chips (gems), or (2) buy and build a card, or (3) reserve one card. If you collect chips, you take either three different kinds of chips or two chips of the same kind. If you buy a card, you pay its price in chips and add it to your playing area. To reserve a card—in order to make sure you get it, or, why not, your opponents don't get it—you place it in front of you face down for later building; this costs you a round, but you also get gold in the form of a joker chip, which you can use as any gem.</p>
						<p>All of the cards you buy increase your wealth as they give you a permanent gem bonus for later buys; some of the cards also give you prestige points. In order to win the game, you must reach 15 prestige points before your opponents do.</p>
					</div>
				</div>
			</div>

			<div class="list-group-item filterDiv strategy">Splendor</div>
			<div class="list-group-item filterDiv strategy">Ticket to Ride</div>
			<div class="list-group-item filterDiv strategy">King of Tokyo</div>
			<div class="list-group-item filterDiv strategy">7 Wonders</div>
			<div class="list-group-item filterDiv strategy">Dominion</div>
            <div class="list-group-item filterDiv strategy">Epic Spell Wars</div>
            <div class="list-group-item filterDiv strategy">Globe Trotters</div>
			<div class="list-group-item filterDiv casual strategy">Monopoly Deal</div>
			<div class="list-group-item filterDiv casual strategy">Bang!</div>
			<div class="list-group-item filterDiv coop">Pandemic</div>
			<div class="list-group-item filterDiv coop">5 Minute Dungeon</div>
			<div class="list-group-item filterDiv casual strategy">Qwirkle</div>
			<div class="list-group-item filterDiv casual word">Codenames</div>
            <div class="list-group-item filterDiv casual word">Boggle</div>
            <div class="list-group-item filterDiv casual word">Quiddler</div>
            <div class="list-group-item filterDiv casual word">Anomia</div>
            <div class="list-group-item filterDiv casual word">Balderdash</div>
            <div class="list-group-item filterDiv casual">What Do You Meme?</div>

		</div>
	</div>
</body>

<?php include('footer.php'); ?>

</html>