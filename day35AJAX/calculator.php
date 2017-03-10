<?php

	if(isset($_POST['n1']) && isset($_POST['n2']) && isset($_POST['oper'])){
		  	$n1 = $_POST['n1'];
		  	$n2 = $_POST['n2'];
		  	$oper = $_POST['oper'];
		  	$result = 0;

            if ($oper == '+') {
                $result = $n1 + $n2;
            } else if($oper == '-') {
                 $result = $n1 - $n2;
            } else if($oper == '*') {
                $result = $n1 * $n2;
            } else if($oper == '/') {
                 $result = $n1 / $n2;
            } else if($oper == '%') {
                $result = $n1 % $n2;
            }

            $value = '12';
            $integerValue = (int)$value;

            $result = [
            'number1' => $_POST['n1'],
            'number2' => $_POST['n2'],
            'result' => $_POST['n1'] + $_POST['n1'],
            ];

            echo json_encode($result);


            echo 'The result is ' . $result;
	}

