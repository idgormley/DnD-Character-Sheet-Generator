<!-- EXAMPLE OF USING TEMPLATED PHP FILES -->
<?php include "templates/header.php"; ?>


<div class="grid-wrapper one-whole">
	<div class="grid one-whole text-center" style="font-family: 'Bookmainia'">
		Step 1 is about Ability Scores. By rolling 4 d6 die, removing the lowest or tied for the lowest number, and then adding up the total; you can generate your ability scores!
	</div>
</div>
<div class="grid-wrapper one-whole centered">
	<div class="grid one-third centered">
		<!-- ABILITY SCORE BLOCK -->
		<div class="ability-score-block strength">
			<!-- BUTTON -->
			<div class="ability-score-button generate"></div>
			<!-- RESULT -->
			<div id="roller_1" class="ability-score">Roll</div>
		</div>
	<!-- // ABILITY SCORE BLOCK -->
	</div>
	<div class="grid one-third centered">
		<!-- ABILITY SCORE BLOCK -->
		<div class="ability-score-block charisma">
			<!-- RESULT -->
			<div id="roller_2" class="ability-score">Roll</div>
			<!-- BUTTON -->
			<div class="ability-score-button generate"></div>
		</div>
	<!-- // ABILITY SCORE BLOCK -->
	</div>
	<div class="grid one-third centered">
		<!-- ABILITY SCORE BLOCK -->
		<div class="ability-score-block dexterity">
			<!-- RESULT -->
			<div id="roller_3" class="ability-score">Roll</div>
			<!-- BUTTON -->
			<div class="ability-score-button generate"></div>
		</div>
	<!-- // ABILITY SCORE BLOCK -->
	</div>
	<div class="grid one-third centered">
		<!-- ABILITY SCORE BLOCK -->
		<div class="ability-score-block intelligence">
			<!-- RESULT -->
			<div id="roller_4" class="ability-score">Roll</div>
			<!-- BUTTON -->
			<div class="ability-score-button generate"></div>
		</div>
	<!-- // ABILITY SCORE BLOCK -->
	</div>
	<div class="grid one-third centered">
		<!-- ABILITY SCORE BLOCK -->
		<div class="ability-score-block wisdom">
			<!-- RESULT -->
			<div id="roller_5" class="ability-score">Roll</div>
			<!-- BUTTON -->
			<div class="ability-score-button generate"></div>
		</div>
	<!-- // ABILITY SCORE BLOCK -->
	</div>
</div>


<!-- EXAMPLE OF USING TEMPLATED PHP FILES -->
<?php include "templates/footer.php"; ?>