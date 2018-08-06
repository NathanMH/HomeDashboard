<html>

<?php include('header.php'); ?>
<?php include('navbar.php'); ?>

<body>

	<div class="jumbotron">
		<div class="container">
			<h1> Chez Lara & Nate</h1>
			<h2>Booze!</h2>
		</div>
	</div>

	<div class="container">
		<div class="row-fluid">
			<!-- Control buttons -->
			<div class="text-center">
				<div class="btn-group flex-wrap" role="toolbar">
					<button type="button" class="btn btn-primary" onclick="filterSelection( 'all')">Show All</button>
					<button type="button" class="btn btn-primary" onclick="filterSelection( 'liquor')">Liquor</button>
					<button type="button" class="btn btn-primary" onclick="filterSelection( 'mixed')">Cocktails</button>
					<button type="button" class="btn btn-primary" onclick="filterSelection( 'bitters')">Bitters</button>
					<button type="button" class="btn btn-primary" onclick="filterSelection( 'beer')">Beer</button>
				</div>
			</div>
		</div>

		<!-- The filterable elements. Note that some have multiple class names (this can be used if they belong to multiple categories) -->
		<div class="container">
			<div class="list-group-item filterDiv liquor">Georgian Bay - Gin</div>
			<div class="list-group-item filterDiv liquor">Captain Morgan- White Rum</div>
			<div class="list-group-item filterDiv liquor">Bailey's - Irish Creme</div>
			<div class="list-group-item filterDiv liquor">Top Shelf - Gin</div>
			<div class="list-group-item filterDiv liquor">Top Shelf - Vodka</div>
			<div class="list-group-item filterDiv liquor">Polar Ice - Vodka</div>
			<div class="list-group-item filterDiv liquor">Kahlua - Coffee Liqueur</div>
			<div class="list-group-item filterDiv liquor">Guinness - Creme de Menthe</div>
			<div class="list-group-item filterDiv liquor">Liberty - Gin</div>
			<div class="list-group-item filterDiv liquor">Glen Morray - 15 yr Scotch</div>
			<div class="list-group-item filterDiv liquor">Alberta Premium - Whiskey</div>

			<div class="list-group-item filterDiv liquor">Triple Sec</div>
			<div class="list-group-item filterDiv liquor">Campari</div>
			<div class="list-group-item filterDiv liquor">Sweet Vermouth</div>
			<div class="list-group-item filterDiv liquor">Dry Vermouth</div>

			<button class="list-group-item filterDiv mixed show" type="button" data-toggle="collapse" data-target="#negroni">
				Negroni
			</button>
			<div class="collapse" id="negroni">
				<div class="card card-body">
					<div class="row">
						<ul class="col">
							<li>Gin</li>
							<li>Campari</li>
							<li>Red Vermouth</li>
							<li>Orange Garnish</li>
							<li>Ice</li>
						</ul>
						<ol class="col">
							<li>Fill rocks glass with ice</li>
							<li>Shake Gin (30ml), Vermouth (30ml), and Campari (30ml)</li>
							<li>Strain into glass and garnish</li>
						</ol>
					</div>
				</div>
			</div>

			<button class="list-group-item filterDiv mixed" type="button" data-toggle="collapse" data-target="#gt">
				Gin & Tonic
			</button>
			<div class="collapse" id="gt">
				<div class=" card card-body">
					<div class="row">
						<ul class="col">
							<li>Gin</li>
							<li>Tonic</li>
							<li>Lime Garnish</li>
							<li>Ice</li>
						</ul>
						<ol class="col">
							<li>Fill highball glass with ice</li>
							<li>Pour Gin (50ml) and Tonic (100ml)</li>
							<li>Stir ang garnish</li>
						</ol>
					</div>
				</div>
			</div>

			<button class="list-group-item filterDiv mixed" type="button" data-toggle="collapse" data-target="#sneakypete">
				Sneaky Pete
			</button>
			<div class="collapse" id="sneakypete">
				<div class=" card card-body">
					<div class="row">
						<ul class="col">
							<li>Whiskey</li>
							<li>Coffee Liqueur</li>
							<li>Milk</li>
							<li>Ice</li>
						</ul>
						<ol class="col">
							<li>Fill rocks glass with ice</li>
							<li>Pour Whiskey (30ml), Coffee Liqueur (30ml), and Milk/Cream (30ml)</li>
							<li>Stir</li>
						</ol>
					</div>
				</div>
			</div>

			<button class="list-group-item filterDiv mixed" type="button" data-toggle="collapse" data-target="#whitelady">
				White Lady
			</button>
			<div class="collapse" id="whitelady">
				<div class=" card card-body">
					<div class="row">
						<ul class="col">
							<li>Gin</li>
							<li>Triple Sec</li>
							<li>Lemon</li>
							<li>Ice</li>
						</ul>
						<ol class="col">
							<li>Fill shaker with ice, Gin (40ml) Triple Sec (30ml), and Lemon juice (20ml)</li>
							<li>Shake and strain into cocktail glass</li>
							<li>Garnish with Lemon peel</li>
						</ol>
					</div>
				</div>
			</div>

			<button class="list-group-item filterDiv mixed" type="button" data-toggle="collapse" data-target="#whiterussian">
				White Russian
			</button>
			<div class="collapse" id="whiterussian">
				<div class=" card card-body">
					<div class="row">
						<ul class="col">
							<li>Vodka</li>
							<li>Coffee Liqueur</li>
							<li>Cream</li>
							<li>Ice</li>
						</ul>
						<ol class="col">
							<li>Fill rocks glass with ice</li>
							<li>Pour Vodka (30ml), Coffee Liqueur (30ml), and Cream (30ml)</li>
							<li>Stir</li>
						</ol>
					</div>
				</div>
			</div>

			<button class="list-group-item filterDiv mixed" type="button" data-toggle="collapse" data-target="#blackrussian">
				Black Russian
			</button>
			<div class="collapse" id="blackrussian">
				<div class=" card card-body">
					<div class="row">
						<ul class="col">
							<li>Vodka</li>
							<li>Coffee Liqueur</li>
							<li>Ice</li>
						</ul>
						<ol class="col">
							<li>Fill rocks glass with ice</li>
							<li>Pour Vodka (50ml) and Coffee Liqueur (20ml)</li>
							<li>Stir</li>
						</ol>
					</div>
				</div>
			</div>

			<button class="list-group-item filterDiv mixed" type="button" data-toggle="collapse" data-target="#kamikaze">
				Kamikaze
			</button>
			<div class="collapse" id="kamikaze">
				<div class=" card card-body">
					<div class="row">
						<ul class="col">
							<li>Vodka</li>
							<li>Triple Sec</li>
							<li>Lime</li>
							<li>Ice</li>
						</ul>
						<ol class="col">
							<li>Fill shaker with ice, Vodka (30ml), Triple Sec (30ml), and Lime juice (30ml)</li>
							<li>Shake and strain into cocktail glass</li>
							<li>Garnish</li>
						</ol>
					</div>
				</div>
			</div>

			<button class="list-group-item filterDiv mixed" type="button" data-toggle="collapse" data-target="#martini">
				Martini
			</button>
			<div class="collapse" id="martini">
				<div class=" card card-body">
					<div class="row">
						<ul class="col">
							<li>Vodka / Gin</li>
							<li>Dry Vermouth</li>
							<li>Olive</li>
							<li>Ice</li>
						</ul>
						<ol class="col">
							<li>Fill shaker with ice, Gin/Vodka (60ml), and Dry Vermouth (10ml)</li>
							<li>Stir well and strain into cocktail glass</li>
							<li>Garnish with olive</li>
						</ol>
					</div>
				</div>
			</div>

			<button class="list-group-item filterDiv mixed" type="button" data-toggle="collapse" data-target="#mintjulep">
				Mint Julep
			</button>
			<div class="collapse" id="mintjulep">
				<div class=" card card-body">
					<div class="row">
						<ul class="col">
							<li>Vodka</li>
							<li>Sugar</li>
							<li>Mint</li>
							<li>Ice</li>
						</ul>
						<ol class="col">
							<li>Put sugar (1tsp) and mint into rocks glass</li>
							<li>Pour small amount of Bourbon/Vodka and muddle</li>
							<li>Fill glass with ice and add Bourbon/Vodka (50ml)</li>
							<li>Garnish with mint</li>
						</ol>
					</div>
				</div>
			</div>

			<button class="list-group-item filterDiv mixed" type="button" data-toggle="collapse" data-target="#mojito">
				Mojito
			</button>
			<div class="collapse" id="mojito">
				<div class=" card card-body">
					<div class="row">
						<ul class="col">
							<li>White Rum</li>
							<li>Lime</li>
							<li>Mint</li>
							<li>Sugar</li>
							<li>Soda</li>
							<li>Ice</li>
						</ul>
						<ol class="col">
							<li>Put several sprigs of mint and sugar (2tsp) into highball glass</li>
							<li>Add Lime juice (30ml) and muddle</li>
							<li>Fill glass with crushed ice</li>
							<li>Pour Rum (40ml) and top with Soda (100ml)</li>
							<li>Garnish with mint</li>
						</ol>
					</div>
				</div>
			</div>

			<button class="list-group-item filterDiv mixed" type="button" data-toggle="collapse" data-target="#mudslide">
				Mudslide
			</button>
			<div class="collapse" id="mudslide">
				<div class=" card card-body">
					<div class="row">
						<ul class="col">
							<li>Vodka</li>
							<li>Coffee Liqueur</li>
							<li>Bailey's</li>
							<li>Ice</li>
						</ul>
						<ol class="col">
							<li>Fill rocks glass with ice</li>
							<li>Pour Vodka (30ml), Coffee liqueur (30ml) and Bailey's (30ml)</li>
							<li>Stir</li>
						</ol>
					</div>
				</div>
			</div>

			<button class="list-group-item filterDiv mixed" type="button" data-toggle="collapse" data-target="#alex">
				Alexander's Sister
			</button>
			<div class="collapse" id="alex">
				<div class=" card card-body">
					<div class="row">
						<ul class="col">
							<li>Gin</li>
							<li>Creme de Menthe</li>
							<li>Cream</li>
							<li>Ice</li>
						</ul>
						<ol class="col">
							<li>Fill shaker with ice</li>
							<li>Pour Gin (40ml), Creme de Menthe (30ml), and Cream (30ml)</li>
							<li>Shake well and strain into cocktail glass</li>
						</ol>
					</div>
				</div>
			</div>

			<button class="list-group-item filterDiv mixed" type="button" data-toggle="collapse" data-target="#b52">
				B-52
			</button>
			<div class="collapse" id="b52">
				<div class=" card card-body">
					<div class="row">
						<ul class="col">
							<li>Kahlua</li>
							<li>Bailey's</li>
							<li>Cointreau (Triple Sec)</li>
						</ul>
						<ol class="col">
							<li>Pour Kahlua (20ml) into shooter glass</li>
							<li>Carefully pour Bailey's (20ml) on top of Kahlua</li>
							<li>Carefully pour Cointreau (20ml) on top of Bailey's</li>
							<li>Serve flamed and drink flamed using a long straw</li>
						</ol>
					</div>
				</div>
			</div>

			<button class="list-group-item filterDiv mixed" type="button" data-toggle="collapse" data-target="#boulvardier">
				Boulvardier
			</button>
			<div class="collapse" id="boulvardier">
				<div class=" card card-body">
					<div class="row">
						<ul class="col">
							<li>Whiskey (or Burbon)</li>
							<li>Red Vermouth</li>
							<li>Campari</li>
							<li>Orange Garnish</li>
							<li>Ice</li>
						</ul>
						<ol class="col">
							<li>Fill rocks glass with ice</li>
							<li>Pour Bourbon/Whiskey (50ml), Vermouth (30ml), and Campari (30ml)</li>
							<li>Garnish with orange peel</li>
						</ol>
					</div>
				</div>
			</div>


			<button class="list-group-item filterDiv mixed" type="button" data-toggle="collapse" data-target="#coloradobulldog">
				Colorado Bulldog
			</button>
			<div class="collapse" id="coloradobulldog">
				<div class=" card card-body">
					<div class="row">
						<ul class="col">
							<li>Vodka</li>
							<li>Coffee Liqueur</li>
							<li>Milk</li>
							<li>Cola</li>
							<li>Ice</li>
						</ul>
						<ol class="col">
							<li></li>
						</ol>
					</div>
				</div>
			</div>

			<button class="list-group-item filterDiv mixed" type="button" data-toggle="collapse" data-target="#dgs">
				Dirty Girl Scout
			</button>
			<div class="collapse" id="dgs">
				<div class=" card card-body">
					<div class="row">
						<ul class="col">
							<li>Vodka</li>
							<li>Coffee Liqueur</li>
							<li>Bailey's</li>
							<li>Creme de Menthe</li>
							<li>Ice</li>
						</ul>
						<ul class="col">
							<li>Fill rocks glass with ice</li>
							<li>Pour Vodka (30ml), Coffee liqueur (30ml), and Milk/Cream (20ml)</li>
							<li>Top with cola</li>
							<li>Stir</li>
						</ul>
					</div>
				</div>
			</div>

			<button class="list-group-item filterDiv mixed" type="button" data-toggle="collapse" data-target="#gibson">
				Gibson
			</button>
			<div class="collapse" id="gibson">
				<div class=" card card-body">
					<div class="row">
						<ul class="col">
							<li>Gin</li>
							<li>Dry Vermouth</li>
							<li>Ice</li>
						</ul>
						<ol class="col">
							<li>Fill shake with ice, Gin (60ml), and Dry Vermouth (10ml)</li>
							<li>Stir and strain into cocktail glass</li>
							<li>Garnish with silverskin onion</li>
						</ol>
					</div>
				</div>
			</div>

			<button class="list-group-item filterDiv mixed" type="button" data-toggle="collapse" data-target="#highball">
				Highball
			</button>
			<div class="collapse" id="highball">
				<div class=" card card-body">
					<div class="row">
						<ul class="col">
							<li>Whiskey</li>
							<li>Soda (Substitute Ginger Ale)</li>
							<li>Ice</li>
						</ul>
						<ol class="col">
							<li>Fill highball glass with ice</li>
							<li>Pour Whiskey (60ml) and top with Soda/Ginger Ale</li>
						</ol>
					</div>
				</div>
			</div>

			<button class="list-group-item filterDiv mixed" type="button" data-toggle="collapse" data-target="#hottoddy">
				Hot Toddy
			</button>
			<div class="collapse" id="hottoddy">
				<div class=" card card-body">
					<div class="row">
						<ul class="col">
							<li>Honey</li>
							<li>Whiskey</li>
							<li>Lemon</li>
							<li>Water</li>
						</ul>
						<ol class="col">
							<li>Put Honey (1tsp), Brandy/Whiskey/Rum (45ml), and Lemon juice (10ml)</li>
							<li>Fill with hot water or tea</li>
						</ol>
					</div>
				</div>
			</div>

			<button class="list-group-item filterDiv mixed" type="button" data-toggle="collapse" data-target="#irishcarbomb">
				Irish Car Bomb
			</button>
			<div class="collapse" id="irishcarbomb">
				<div class=" card card-body">
					<div class="row">
						<ul class="col">
							<li>Whiskey</li>
							<li>Bailey's</li>
							<li>Irish Stout</li>
						</ul>
						<ol class="col">
							<li>Pour Stout (250ml) into pub glass</li>
							<li>Pour Bailey's into a shot glass, gently add Whiskey (20ml)</li>
							<li>Drop shot glass into Stout</li>
						</ol>
					</div>
				</div>
			</div>

			<button class="list-group-item filterDiv mixed" type="button" data-toggle="collapse" data-target="#irishcoffee">
				Irish Coffee
			</button>
			<div class="collapse" id="irishcoffee">
				<div class="card card-body">
					<div class="row">
						<ul class="col">
							<li>Whiskey</li>
							<li>Coffee</li>
							<li>Cream</li>
							<li>Sugar</li>
						</ul>
						<ol class="col">
							<li>Pour hot Coffee (80ml) into Irish coffee glass</li>
							<li>Add Whiskey (40ml)</li>
							<li>Add sugar (1tsp)</li>
							<li>Layer cream on top</li>
						</ol>
					</div>
				</div>
			</div>

			<button class="list-group-item filterDiv mixed" type="button" data-toggle="collapse" data-target="#americano">
				Americano
			</button>
			<div class="collapse" id="americano">
				<div class="card card-body">
					<div class="row">
						<ul class="col">
							<li>Campari</li>
							<li>Red Vermouth</li>
							<li>Soda</li>
							<li>Garnish with Orange or Lime</li>
						</ul>
						<ol class="col">
							<li>Fill rocks glass with ice</li>
							<li>Pour Campari (30ml) and Vermouth (30ml)</li>
							<li>Top with Soda</li>
							<li>Garnish with orange slice and lemon peel</li>
						</ol>
					</div>
				</div>
			</div>

			<div class="list-group-item filterDiv bitters">Top Shelf - Chocolate Bitters</div>
			<div class="list-group-item filterDiv bitters">Top Shelf - Coffee Bitters</div>
			<div class="list-group-item filterDiv bitters">Top Shelf - All Spice</div>
			<div class="list-group-item filterDiv bitters">Janet Mador's - Citrus Bitters</div>

			<div class="list-group-item filterDiv beer">Guinness</div>
			<div class="list-group-item filterDiv beer">Asahi</div>
			<div class="list-group-item filterDiv beer">Unibroue - Blanche de Chambley</div>
		</div>
	</div>

</body>

<?php include('footer.php'); ?>

</html>