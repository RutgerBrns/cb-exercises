<?php

/**
* 
*/
class Database 
{

	protected $db;
	
	function __construct()
	{
		$this->db = new PDO('mysql:host=localhost;dbname=bootcamp_eshop;charset=utf8', 'root', '');
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //remove for production!	
	}

	public function insertproduct($name, $price, $size, $color)
	{
		$stmt = $this->db->prepare('INSERT INTO products (name, price, size, color) VALUES (?, ?, ?, ?)');
		$stmt->execute([$name, $price, $size, $color]);
	}

	public function getproducts()
	{
		$stmt = $this->db->prepare('SELECT id, name, price, size, color, id FROM products');
		$stmt->execute();
		return $stmt->fetchAll();
	}

		public function getproduct($id)
	{
		$stmt = $this->db->prepare('SELECT id, name, price, size, color, id FROM products WHERE id = ?');
		$stmt->execute([$id]);
		return $stmt->fetch();
	}

	public function createorder($userid)
	{
		$stmt = $this->db->prepare('INSERT INTO orders (user_id, created) VALUES (?, NOW())');
		$stmt->execute([1]);
		return $this->db->lastInsertId();
	}

	public function insertorderproduct($productid, $orderid)
    {
        $stmt = $this->db->prepare('INSERT INTO orders_have_products (product_id, order_id) VALUES (?, ?)');
        $stmt->execute([$productid, $orderid]);

   }

   public function beginTransaction() {
   		$this->db->beginTransaction(); //these are standard php methods
   }

   public function commitTransaction() {
   		$this->db->commit(); //these are standard php methods
   }

   public function rollBackTransaction(){
   		$this->db->rollBack(); //these are standard php methods
   }

}

