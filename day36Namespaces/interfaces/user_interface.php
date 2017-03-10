<?php

//interface has the same structure as a class.
//the interface can be seen as a contract. If a user is going to create a class, he will have to use the functions that are defined in the interface.
//

interface UserInterface
{
	public function getusername();
	public function setUsername(string $user_name);
}