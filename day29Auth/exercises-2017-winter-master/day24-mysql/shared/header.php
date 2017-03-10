<?php

require_once './user.class.php';
require_once './shared/database.php';

$db = new Database();
$user = new User($db);

$name = $user->getName();

if($name) {
	echo '<a href="http://www.cbp-exercises.local/day29Auth/exercises-2017-winter-master/day24-mysql/logout.php"><button>logout</button></a>';
	if(isset($_SESSION['products'])){ echo '         you currently have ' . count($_SESSION['products']) . ' products in your cart';
	echo '<a href="summary.php"><button>see shopping cart</button></a>';
	} else {
		echo '       you currently have no products in your cart';
	}
} else {
	echo '<a href="http://www.cbp-exercises.local/day29Auth/exercises-2017-winter-master/day24-mysql/login.php"><button>log in</button></a>';
	echo '<a href="http://www.cbp-exercises.local/day29Auth/exercises-2017-winter-master/day24-mysql/authentication.php"><button>register</button></a>';
}