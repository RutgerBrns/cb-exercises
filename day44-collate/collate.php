<?php 
$formatter = new IntlDateFormatter(
	'en_US',
	IntlDateFormatter::FULL,
	IntlDateFormatter::MEDIUM
	);

echo 'the time in the future ' . $formatter->format(strtotime('next monday'));

echo '\n';

echo 'the time in the future ' . $formatter->format(time() + 40 * 24 * 60 *60); //calculation is done in seconds. But DO NOT use this, because of schrikkeljaar.

$formatter = new NumberFormatter('en_US', NumberFormatter::CURRENCY);

echo 'i got bread worth of value ' . $formatter->format(1234567.89231);
