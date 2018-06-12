<html>

<?php include('header.php'); ?>
<?php include('navbar.php'); ?>

<body>

	<div class="jumbotron">
		<div class="container">
			<h1> Chez Lara & Nate</h1>
			<h2>Food!</h2>
		</div>
	</div>

	<div class="container">
		<div class="row-fluid">
			<!-- Control buttons -->
			<div class="text-center">
				<div class="btn-group" role="toolbar">
					<button type="button" class="btn btn-primary" onclick="filterSelection('all')">Show All</button>
					<button type="button" class="btn btn-primary" onclick="filterSelection('snack')">Snacks</button>
					<button type="button" class="btn btn-primary" onclick="filterSelection('breakfast')">Breakfast</button>
					<button type="button" class="btn btn-primary" onclick="filterSelection('main')">Mains</button>
					<button type="button" class="btn btn-primary" onclick="filterSelection('side')">Sides</button>
					<button type="button" class="btn btn-primary" onclick="filterSelection('dessert')">Desserts</button>
				</div>
			</div>
		</div>

		<!-- The filterable elements. Note that some have multiple class names (this can be used if they belong to multiple categories) -->
		<div class="container">

			<div class="list-group-item filterDiv snack">Nachos</div>
			<div class="list-group-item filterDiv snack">Beer Bread</div>
			<div class="list-group-item filterDiv snack">Blueberry Chocolate Chip Banana Muffins</div>
			<div class="list-group-item filterDiv snack">Double Chocolate Vegan Muffins</div>

			<div class="list-group-item filterDiv breakfast">Waffles</div>
			<div class="list-group-item filterDiv breakfast">Pancakes</div>
			<div class="list-group-item filterDiv breakfast">Monkey Bread</div>

			<div class="list-group-item filterDiv main">Fresh Pasta</div>
			<div class="list-group-item filterDiv main">Pizza</div>
			<div class="list-group-item filterDiv main">Arepas</div>
			<div class="list-group-item filterDiv main">Lasagna</div>
			<div class="list-group-item filterDiv main">Sweet Potato and Kale Chili</div>
			<div class="list-group-item filterDiv main">Pulled Pork</div>
			<div class="list-group-item filterDiv main">Barbecue Sauce Chicken Thighs</div>
			<div class="list-group-item filterDiv main">Fake and Bake Chicken</div>

			<div class="list-group-item filterDiv side">Sweet Potato Fries</div>
			<div class="list-group-item filterDiv side">Pretzels</div>

			<div class="list-group-item filterDiv dessert">Ice Cream</div>
			<div class="list-group-item filterDiv dessert">Tahini Brownies</div>
			<div class="list-group-item filterDiv dessert">Chocolate Cake</div>
			<div class="list-group-item filterDiv dessert">Brown Butter Chocolate Chip Cookies</div>
			<div class="list-group-item filterDiv dessert">Skillet Cookies</div>
			<div class="list-group-item filterDiv dessert">Bailey's Guinness Cake</div>
			<div class="list-group-item filterDiv dessert">Pineapple/Apricot Upside-Down Cake</div>
			<div class="list-group-item filterDiv dessert">Cheesecake</div>

		</div>
	</div>
</body>

<?php include('footer.php'); ?>

</html>