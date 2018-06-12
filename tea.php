<html>

<?php include('header.php'); ?>
<?php include('navbar.php'); ?>

<body>

	<div class="jumbotron">
		<div class="container">
			<h1> Chez Lara & Nate</h1>
			<h2>Tea</h2>
		</div>
	</div>

	<div class="container">
		<div class="row-fluid">
			<!-- Control buttons -->
			<div class="text-center">
				<div class="btn-group" role="toolbar">
					<button type="button" class="btn btn-primary" onclick="filterSelection('all')">Show All</button>
					<button type="button" class="btn btn-primary" onclick="filterSelection('black')">Black</button>
					<button type="button" class="btn btn-primary" onclick="filterSelection('herbal')">Herbal</button>
					<button type="button" class="btn btn-primary" onclick="filterSelection('rooibos')">Rooibos</button>
					<button type="button" class="btn btn-primary" onclick="filterSelection('green')">Green</button>
					<button type="button" class="btn btn-primary" onclick="filterSelection('chai')">Chai</button>
					<button type="button" class="btn btn-primary" onclick="filterSelection('caffeineFree')">Caffeine Free</button>

					<div class="btn-group dropdown">
						<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true">
							Brands
							<span class="caret"></span>
						</button>
						<div class="dropdown-menu">
							<button class="dropdown-item btn-primary" onclick="filterSelection('twinings')">Twinings</button>
							<button class="dropdown-item btn-primary" onclick="filterSelection('pc')">Presidents Choice</button>
							<button class="dropdown-item btn-primary" onclick="filterSelection('mightyLeaf')">Mighty Leaf</button>
							<button class="dropdown-item btn-primary" onclick="filterSelection('stash')">Stash</button>
							<button class="dropdown-item btn-primary" onclick="filterSelection('other')">Other</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- The filterable elements. Note that some have multiple class names (this can be used if they belong to multiple categories) -->
		<div class="container">
			<div class="list-group-item filterDiv twinings black">Twinings - English Breakfast</div>
			<div class="list-group-item filterDiv twinings black">Twinings -Blackcurrant</div>
			<div class="list-group-item filterDiv twinings black">Twinings - Earl Grey</div>
			<div class="list-group-item filterDiv twinings chai caffeineFree">Twinings - Chai (Caffeine Free)</div>
			<div class="list-group-item filterDiv twinings herbal">Twinings - Pure Camomile</div>
			<div class="list-group-item filterDiv pc green">PC - Green Tea</div>
			<div class="list-group-item filterDiv pc chai">PC - Chocolatey Chai</div>
			<div class="list-group-item filterDiv stash herbal">Stash - Cinnamon Vanilla</div>
			<div class="list-group-item filterDiv mightyLeaf green">Mighty Leaf - Green</div>
			<div class="list-group-item filterDiv theHerbalTeaShop herbal">The Herbal Tea Shop - Orange Caprice</div>
			<div class="list-group-item filterDiv secondCup rooibos caffeineFree">Second Cup - Spiced Orange Rooibos (Caffeine Free)</div>
			<div class="list-group-item filterDiv tazo rooibos caffeineFree">Tazo - Vanilla Rooibos Parfait (Caffeine Free)</div>
			<div class="list-group-item filterDiv tega rooibos caffeineFree">Tega - Orange Spice Rooibos with Ginger (Caffeine Free)</div>
			<div class="list-group-item filterDiv green">T&T - Green Tea</div>

			<div class="list-group-item filterDiv granvilleIsland">Granville Island - Cherry (White)</div>
			<div class="list-group-item filterDiv granvilleIsland black">Granville Island - Peach Apricot</div>
			<div class="list-group-item filterDiv granvilleIsland black">Granville Island - Coffee Cream Liqueur</div>
			<div class="list-group-item filterDiv granvilleIsland black chai">Granville Island - Spicy Chai</div>
			<div class="list-group-item filterDiv granvilleIsland black">Granville Island - Blackcurrant</div>
			<div class="list-group-item filterDiv granvilleIsland herbal">Granville Island - Licorice Spice</div>
			<div class="list-group-item filterDiv granvilleIsland herbal">Granville Island - Bella Coola</div>
			<div class="list-group-item filterDiv granvilleIsland herbal">Granville Island - Fruit Basket</div>
			<div class="list-group-item filterDiv granvilleIsland herbal">Granville Island - Jucy Peach Honeybush</div>
			<div class="list-group-item filterDiv granvilleIsland herbal">Granville Island - Blood Orange Tisane</div>
			<div class="list-group-item filterDiv granvilleIsland herbal">Granville Island - Candied Citrus Tisane</div>
			<div class="list-group-item filterDiv granvilleIsland green">Granville Island - Papaya Mango</div>
			<div class="list-group-item filterDiv granvilleIsland rooibos">Granville Island - Blueberry</div>
			<div class="list-group-item filterDiv granvilleIsland rooibos">Granville Island - Baked Apple</div>
			<div class="list-group-item filterDiv granvilleIsland rooibos">Granville Island - Vanilla Almond</div>

			<div class="list-group-item filterDiv other">Mistral - Brusnica Malina & Baza Cierna</div>
			<div class="list-group-item filterDiv other">Le Palais Des Thes - The des Moines</div>
			<div class="list-group-item filterDiv other black">Sonnentor - Black Tea Spice Blend</div>
			<div class="list-group-item filterDiv other black">Sonnentor - Black Tea</div>
			<div class="list-group-item filterDiv other">Les 2 Marmottes - Thym</div>
			<div class="list-group-item filterDiv other">Les 2 Marmottes - Cocktail Digest</div>
			<div class="list-group-item filterDiv other">A.C. Perch's Thehandel - Breakfast Tea</div>
			<div class="list-group-item filterDiv other caffeineFree">Pluck - Apple Crumble</div>
			<div class="list-group-item filterDiv other green">Level Ground Trading - Green</div>
			<div class="list-group-item filterDiv other herbal">Clef des Champs - Licorice</div>
		</div>
	</div>
</body>

<?php include('footer.php'); ?>

</html>