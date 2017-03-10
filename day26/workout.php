<?php

/**
* 
*/
class country 
{	
	protected $name = null;
	protected $gdp = null;
	public $countries = array();

	function __construct($name, $gdp)
	{
		$this->name = $name;
		$this->gdp = $gdp;
	}

	public function getName() {
		return $this->name;
	}

	public function getGdp() {
		return $this->gdp/1000000000;
	}
}

$sean = 12.666;

$country_names = array(
    'cz' => 'Czechia',
    'de' => 'Germany',
    'fr' => 'France'
);

$country_gdp = array(
    'cz' => 189982000000,
    'de' => 3371000000000,
    'fr' => 2422000000000
);

$this_country = $country_names['cz'];

$money = 123456789000000;
var_dump($money);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<p>The amount is <?php echo $money; ?> USD<p><br>
<p>The amount is <?php echo ($money/1000); ?> thousand USD<p><br>
<p>The amount is <?php echo ($money/1000000); ?> million USD<p><br>
<p>The amount is close to <?php echo round($money/1000000000000); ?> trillion USD<p><br>
<p>The amount is close to <?php echo round($money/1000000000); ?> billion USD<p><br>
<p>The amount is above <?php echo floor($money/1000000000); ?> billion USD<p><br>
<p>The amount is under <?php echo ceil($money/1000000000); ?> billion USD<p><br>

<ul>
	<?php foreach($country_names as $key => $value) : ?>
		<li>Nominal GDP value of <?php echo $value; ?> is <?php echo ($country_gdp[$key]/1000000000); ?> billion</li>
	<?php endforeach ?>
</ul>



<?php foreach($country_names as $country_code => $country_name) : ?>	
		<?php $country = new country($country_name, $country_gdp[$country_code]);
		$countries[] = $country; 
?>
<?php endforeach ?>

<?php var_dump($countries); ?>

<ul>
	<?php foreach($countries as $country) : ?>
		<li>Nominal GDP value of <?php echo $country->getName(); ?> is <?php echo $country->getGdp(); ?> billion</li>
	<?php endforeach ?>
</ul>

</body>
</html>
