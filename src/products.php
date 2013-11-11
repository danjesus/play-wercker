<?php

class Products
{
	public $count = 0;

	public function add($num)
	{
		$this->count += $num;
	}

	public function remove($num)
	{
		$this->count -= $num;
	}

}