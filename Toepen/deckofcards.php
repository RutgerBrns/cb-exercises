<?php
	$deck = [
		1 => 'diamonds seven',
		5 => 'diamonds eigth',
		9 => 'diamonds nine',
		13 => 'diamonds ten',
		17 => 'diamonds jack',
		21 => 'diamonds queen',
		25 => 'diamonds king',
		29 => 'diamonds ace',

		2 => 'spades seven',
		6 => 'spades eigth',
		10 => 'spades nine',
		14 => 'spades ten',
		18 => 'spades jack',
		22 => 'spades queen',
		26 => 'spades king',
		30 => 'spades ace',

		3 => 'hearts seven',
		7 => 'hearts eigth',
		11 => 'hearts nine',
		15 => 'hearts ten',
		19 => 'hearts jack',
		23 => 'hearts queen',
		27 => 'hearts king',
		31 => 'hearts ace',

		4 => 'clubs seven',
		8 => 'clubs eigth',
		12 => 'clubs nine',
		16 => 'clubs ten',
		20 => 'clubs jack',
		24 => 'clubs queen',
		28 => 'clubs king',
		32 => 'clubs ace',

	];

function shuffledeck($deck) {

	shuffle($deck);
	$card11 = array_pop($deck);
	$card12 = array_pop($deck);
	$card13 = array_pop($deck);
	$card14 = array_pop($deck);

	$card21 = array_pop($deck);
	$card22 = array_pop($deck);
	$card23 = array_pop($deck);
	$card24 = array_pop($deck);

	$card31 = array_pop($deck);
	$card32 = array_pop($deck);
	$card33 = array_pop($deck);
	$card34 = array_pop($deck);

	$card41 = array_pop($deck);
	$card42 = array_pop($deck);
	$card43 = array_pop($deck);
	$card44 = array_pop($deck);

	echo 'Player 1s cards are: '.$card11.$card13.$card13.$card14;
	echo 'Player 2s cards are: '.$card21.$card22.$card23.$card24;
	echo 'Player 3s cards are: '.$card31.$card32.$card33.$card34;
	echo 'Player 4s cards are: '.$card41.$card42.$card43.$card44;

}

shuffledeck($deck);