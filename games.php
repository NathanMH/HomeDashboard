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

			<button class="list-group-item filterDiv strategy" type="button" data-toggle="collapse" data-target="#tickettoride">
				Ticket to Ride
			</button>
			<div class="collapse" id="tickettoride">
				<div class="card card-body">
					<div>
						<p>Get ready for a new train adventure as you travel across Europe with Ticket to Ride - Europe, the new edition of the worldwide hit from Days of Wonder. From Edinburgh to Constantinople and from Lisbon to Moscow, the game will take you on a ride to the great cities of turn-of-the-century Europe. More than just a new map, Ticket to Ride - Europe features brand new gameplay elements including Tunnels, Ferries and Train Stations. Plus, we've upgraded you to First-Class accommodations with larger cards, new Train Station game pieces, and a lavishly illustrated game board. Like the original, the game remains elegantly simple, can be learned in three minutes, and appeals to both families and experienced gamers. Ticket to Ride - Europe is a complete, new game and does not require the original version. It is for 2 to 5 players, and it takes 30-60 minutes to play. </p>
					</div>
				</div>
			</div>

			<button class="list-group-item filterDiv strategy" type="button" data-toggle="collapse" data-target="#kingoftokyo">
				King of Tokyo
			</button>
			<div class="collapse" id="kingoftokyo">
				<div class="card card-body">
					<div>
						<p>King of Tokyo is a game from Richard Garfield for 2 to 6 players in which you will be able to play mutant monsters gigantic robots and other aliens all of whom are happily whacking each other in a joyous atmosphere in order to become the one and only King of Tokyo. When it is your turn to play you throw six dice.</p>
					</div>
				</div>
			</div>

			<button class="list-group-item filterDiv strategy" type="button" data-toggle="collapse" data-target="#7wonders">
				7 Wonders	
			</button>
			<div class="collapse" id="7wonders">
				<div class="card card-body">
					<div>
						<p>7 Wonders lasts three ages. In each age, players receive seven cards from a particular deck, choose one of those cards, then pass the remainder to an adjacent player. Players reveal their cards simultaneously, paying resources if needed or collecting resources or interacting with other players in various ways. (Players have individual boards with special powers on which to organize their cards, and the boards are double-sided). Each player then chooses another card from the deck they were passed, and the process repeats until players have six cards in play from that age. After three ages, the game ends.</p>
						<p>In essence, 7 Wonders is a card development game. Some cards have immediate effects, while others provide bonuses or upgrades later in the game. Some cards provide discounts on future purchases. Some provide military strength to overpower your neighbors and others give nothing but victory points. Each card is played immediately after being drafted, so you'll know which cards your neighbor is receiving and how his choices might affect what you've already built up. Cards are passed left-right-left over the three ages, so you need to keep an eye on the neighbors in both directions.</p>
						<p>Though the box of earlier editions is listed as being for 3–7 players, there is an official 2-player variant included in the instructions.</p>
					</div>
				</div>
			</div>

			<button class="list-group-item filterDiv strategy" type="button" data-toggle="collapse" data-target="#dominion">
				Dominion
			</button>
			<div class="collapse" id="dominion">
				<div class="card card-body">
					<div>
						<p>In Dominion, each player starts with an identical, very small deck of cards. In the center of the table is a selection of other cards the players can "buy" as they can afford them. Through their selection of cards to buy, and how they play their hands as they draw them, the players construct their deck on the fly, striving for the most efficient path to the precious victory points by game end.</p>
						<p>Dominion is not a CCG, but the play of the game is similar to the construction and play of a CCG deck. The game comes with 500 cards. You select 10 of the 25 Kingdom card types to include in any given play—leading to immense variety.</p>
					</div>
				</div>
			</div>

			<button class="list-group-item filterDiv strategy" type="button" data-toggle="collapse" data-target="#epicspellwars">
				Epic Spell Wars
			</button>
			<div class="collapse" id="epicspellwars">
				<div class="card card-body">
					<div>
						<p> An explosive spell-casting card game for 2-6 players, ages 15+, with easy to learn rules, and a 30 minute playing time</p>
						<p>The box is cracking at the seams with super-cool art - Game cards feature over 100 original humorous illustrations!</p>
						<p>Hilarious spell-combining mechanic creates endless gameplay variation and invites players to explore hundreds of different winning combos!</p>
						<p>The box is cracking at the seams with super-cool art— Game cards feature over 100 original humorous illustrations!<p>
					</div>
				</div>
			</div>

			<button class="list-group-item filterDiv strategy" type="button" data-toggle="collapse" data-target="#monopolydeal">
				Monopoly Deal
			</button>
			<div class="collapse" id="monopolydeal">
				<div class="card card-body">
					<div>
						<p>Players attempt to collect three different complete sets of cards representing the properties from the board game, either by playing them directly, stealing them from other players, or collecting them as rent for other properties they already own. The cards in the 110-card deck represent properties and wild cards, various denominations of Monopoly money used to pay rent, and special action cards which can either be played for their effects or banked as money instead.</p>
					</div>
				</div>
			</div>

			<button class="list-group-item filterDiv strategy" type="button" data-toggle="collapse" data-target="#pandemic">
				Pandemic
			</button>
			<div class="collapse" id="pandemic">
				<div class="card card-body">
					<div>
						<p>Pandemic is a cooperative board game designed by Matt Leacock and published by Z-Man Games in 2007. Pandemic is based on the premise that four diseases have broken out in the world, each threatening to wipe out a region. The game accommodates 2 to 4 players, each playing one of five possible specialists: dispatcher, medic, scientist, researcher, or operations expert. The game is unlike most board games in that the gameplay is based on cooperation rather than on competitiveness. Through the combined effort of all the players, the goal is to discover all four cures before any of several game-losing conditions are reached.</p>
					</div>
				</div>
			</div>

			<button class="list-group-item filterDiv strategy" type="button" data-toggle="collapse" data-target="#5minutedungeon">
				5 Minute Dungeon
			</button>
			<div class="collapse" id="5minutedungeon">
				<div class="card card-body">
					<div>
						<p>5-­Minute Dungeon is a chaotic, co-­operative, real-­time card game in which players have only five minutes to escape the randomized dungeon. Communication and teamwork are critical to survival because there's no time to form a carefully considered plan — and no predicting what dangers lie ahead.</p>
						<p>In more detail, players assume the role of one of ten heroes, each with special cards and abilities. Once the five-minute timer starts, the race is on to defeat all the monsters inside the dungeon. In order to defeat a monster, players must match symbols from their hand with ones on the monster's card. At the end of each dungeon is a powerful dungeon boss — and after the first boss is defeated, the campaign continues to the second boss. Each boss, and each randomized dungeon, gets harder until players reach the fifth and final boss.</p>
					</div>
				</div>
			</div>

			<button class="list-group-item filterDiv strategy" type="button" data-toggle="collapse" data-target="#codenames">
				Codenames
			</button>
			<div class="collapse" id="codenames">
				<div class="card card-body">
					<div>
						<p>Codenames is a 2015 card game for 4–8 players designed by Vlaada Chvátil and published by Czech Games. Two teams compete by each having a Spymaster give one word clues which can point to multiple words on the board. The other players on the team attempt to guess their team's words while avoiding the words of the other team. In the 2–3 player variant, one Spymaster gives clues to the other player or players. </p>
					</div>
				</div>
			</div>

			<button class="list-group-item filterDiv strategy" type="button" data-toggle="collapse" data-target="#anomia">
				Anomia
			</button>
			<div class="collapse" id="anomia">
				<div class="card card-body">
					<div>
						<p>Anomia plays off the fact that our minds are positively brimming with all sorts of random information: things to eat, pop songs, websites, etc... Sure, under normal circumstances, it's easy to give an example of a frozen food or a dog breed, but you'll find that your brain works a little differently under pressure!</p>
						<p>To play, draw and reveal a card from the center pile. Does the symbol on your card match one on another player's card? If so, you must quickly face-off with the other player by giving an example of the person, place, or thing on his card before he can do the same for yours. If you blurt out a correct answer first, you win his card and the drawing continues.</p>
						<p>Sounds simple, right? Wrong! Wild cards allow unlike symbols to match, increasing the number of things to which you must pay attention. Cascading face-offs can occur when you hand over a lost card, thereby revealing a new top card on your play pile.</p>
					</div>
				</div>
			</div>

			<button class="list-group-item filterDiv strategy" type="button" data-toggle="collapse" data-target="#qwirkle">
				Qwirkle
			</button>
			<div class="collapse" id="qwirkle">
				<div class="card card-body">
					<div>
						<p>The abstract game of Qwirkle consists of 108 wooden blocks with six different shapes in six different colors. There is no board, players simply use an available flat surface.</p>
						<p>Players begin the game with six blocks. The start player places blocks of a single matching attribute (color or shape but not both) on the table. Thereafter, a player adds blocks adjacent to at least one previously played block. The blocks must all be played in a line and match, without duplicates, either the color or shape of the previous block.</p>
						<p>Players score one point for each block played plus all blocks adjacent. It is possible for a block to score in more than one direction. If a player completes a line containing all six shapes or colors, an additional six points are scored. The player then refills his hand to six blocks.</p>
						<p>The game ends when the draw bag is depleted and one player plays all of his remaining blocks, earning a six point bonus. The player with the high score wins.</p>
					</div>
				</div>
			</div>

			<button class="list-group-item filterDiv strategy" type="button" data-toggle="collapse" data-target="#whatdoyoumeme">
				What Do You Meme?!
			</button>
			<div class="collapse" id="whatdoyoumeme">
				<div class="card card-body">
					<div>
						<p>Play until you're hungry, at which point stop playing and order a pizza. The rules are simple. Each round, a rotating judge plays a Photo Card and everyone else plays a Caption Card to complete the meme. The judge decides the funniest pairing, and whoever played the winning Caption Card wins the round.</p>
					</div>
				</div>
			</div>

			<button class="list-group-item filterDiv strategy" type="button" data-toggle="collapse" data-target="#quiddler">
				Quiddler
			</button>
			<div class="collapse" id="quiddler">
				<div class="card card-body">
					<div>
						<p>Quiddler is a proprietary card game and word game created by Set Enterprises. Players compete by spelling English words from cards in hands of increasing size, each card worth various points. The game combines aspects of Scrabble and gin rummy.</p>
					</div>
				</div>
			</div>

			<button class="list-group-item filterDiv strategy" type="button" data-toggle="collapse" data-target="#balderdash">
				Balderdash
			</button>
			<div class="collapse" id="balderdash">
				<div class="card card-body">
					<div>
						<p>A clever repackaging of the parlor game Dictionary, Balderdash contains several cards with real words nobody has heard of. After one of those words has been read aloud, players try to come up with definitions that at least sound plausible, because points are later awarded for every opposing player who guessed that your definition was the correct one.</p>
					</div>
				</div>
			</div>

			<button class="list-group-item filterDiv strategy" type="button" data-toggle="collapse" data-target="#boggle">
				Boggle
			</button>
			<div class="collapse" id="boggle">
				<div class="card card-body">
					<div>
						<p>Boggle is a timed word game in which players have 3 minutes to find as many connected words as possible from the face up letters resting in a 16 cube grid. When the timer runs out, players compare their lists of words and remove any words found by multiple players. Points are then awarded for remaining words, depending on how many letters are in the word. (In the original Boggle, all words must contain 3 or more letters to score points.)</p>
					</div>
				</div>
			</div>

			<button class="list-group-item filterDiv strategy" type="button" data-toggle="collapse" data-target="#bang">
				Bang!
			</button>
			<div class="collapse" id="bang">
				<div class="card card-body">
					<div>
						<p>The card game BANG! recreates an old-fashioned spaghetti western shoot-out, with each player randomly receiving a Character card to determine special abilities, and a secret Role card to determine their goal.</p>
					</div>
				</div>
			</div>

            <div class="list-group-item filterDiv strategy"></div>
			<button class="list-group-item filterDiv strategy" type="button" data-toggle="collapse" data-target="#globetrotters">
				Globe Trotters
			</button>
			<div class="collapse" id="globetrotters">
				<div class="card card-body">
					<div>
						<p>Travel the world by air, land or water, to collect keys from around the world. Whether you plan your course strategically or react spontaneously to the game, your challenge is to defeat both your opponents and chance. Only you can decide whether to go for adventures in any of the major cities of the world, roll for the jackpot in gambling cities like vibrant Las Vegas or steamy Macao, or sail to lush tropical islands such as Hawaii, Fiji, or the Seychelles. Numerous twists and turns occur throughout your journeys, constantly affecting your fortunes. The final outcome is always in doubt until the very end. Globetrotters has been designed to accommodate any level of play. As you progress from novice traveler to seasoned globetrotter, you will discover a contest of extraordinary depth.</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</body>

<?php include('footer.php'); ?>

</html>