<?php

$name = 'james'.'bond';

$bond_info = array(
    'first_name' => 'James',
    'last_name' => 'Bond',
    'gun' => 'Walther PPK',
    'car' => 'Aston Martin',
    'enemy' => 'Stavro Blofeld',
    'relationship_status' => 'widower',
    'cases' => 24,
);

echo 'The name is <em>' .$bond_info['last_name'] . ', ' . $bond_info['first_name'] . ' ' . $bond_info['last_name'] . '</em>. <br>';

echo 'One day when I was driving my <em>' . $bond_info['car'] . '</em> in the . <em>' . $bond_info['enemy'] . '</em> came along and made me a <em>'. $bond_info['relationship_status'] . '</em>. If only I had my <em>' . $bond_info['gun'] . '</em> with me!';

$bond_info['last_case'] = 'spectre';

/**
* 
*/
class bond_case 
{
	protected $name = null;
	protected $year = null;
	protected $enemy = null;
	protected $girl = array();
	static $cases_solved = 0.0;
	static $girls_met = 0.0;

	
	function __construct($name, $year, $enemy)
	{
		$this->name = $name;
		$this->year = $year;
		$this->enemy = $enemy;
		static::$cases_solved++;
	}

	public function setName() {
		$this->name = $name;
	}

	public function getName() {
		return $this->name;
	}

	public function setYear() {
		$this->name = $year;
	}

	public function getYear() {
		return $this->year;
	}

	public function setEnemy() {
		$this->name = $enemy;
	}

	public function getEnemy() {
		return $this->enemy;
	}

	public function addGirl($name) {
		$this->girls[] = [$name];
		self:: $girls_met++;
	}

	public function getCases_solved() {
		return static::$cases_solved;
	}

	public function getGirls_Met() {
		return static::$girls_met;
	}

	public function getAvgGirlsPerCase(){
		$avg = (static::$girls_met/static::$cases_solved);
		return $avg;
	}

}

$case = new bond_case('Spectre', 2015, 'Ernst Stavro Blofeld');
$case->addGirl('Estrella');
$case->addGirl('Lucia Sciarra');
$case->addGirl('Madeleine Swann');

$case2 = new bond_case('Casino Royale', 2006, 'Le Chiffre');
$case2->addGirl('Vesper Lynd');
$case2->addGirl('Solange Dimitrios');

$avg = bond_case::getAvgGirlsPerCase();

echo '<br> On average Bond has met ' . $avg .' girls per case.';


