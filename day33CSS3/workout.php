<?php

require_once 'workout2.php';

/**
* 
*/
class piece
{

	protected $type = null;
	static protected $images = array(
		'K' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/king.png',
	    'Q' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/queen.png',
	    'B' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/bishop.png',
	    'N' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/knight.png',
	    'R' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/rook.png',
	    'P' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/pawn.png',
	    'k' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/king.png',
	    'q' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/queen.png',
	    'b' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/bishop.png',
	    'n' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/knight.png',
	    'r' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/rook.png',
	    'p' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/pawn.png'
		);
	
	function __construct($type)	{
		$this->type = $type;
	}

	function __toString() {
		return '<img src="' . static::$images[$this->type] .'"/>';
	}

}

$black_pawn = new piece('p');
$white_queen = new piece('Q');

echo $black_pawn;
echo $white_queen;

$a2 = new field(1, 2);
$b2 = new field(2, 2, $white_queen);
$c2 = new field(3, 2, $black_pawn);
$d2 = new field(4, 2);
$e3 = new field(5, 2);
echo $a2;
echo $b2;
echo $c2;
echo $d2;
echo $e3;

?>

<style type="text/css">
	
body {
	background-color: #ccc;
}

.dark {
	background-color: black;
	width: 40px;
	height: 40px;
	display: flex;
	align-self: center;
}	

.light {
	background-color: white;
	width: 40px;
	height: 40px;
	display: flex;
	align-self: center;
}

</style>

