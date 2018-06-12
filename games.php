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
				<div class="btn-group" role="toolbar">
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