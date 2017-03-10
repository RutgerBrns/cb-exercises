<?php

echo "Hello Vladimir, you verrekte mongol";

if (isset($_POST['a']) && isset($_POST['b'])) {
	echo " <br/> The result of adding " . $_POST['a'] .' plus ' . $_POST['b'] . ' = ' . ( $_POST['b'] + $_POST['a'] );
}
