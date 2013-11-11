<?php

class TestProducts extends PHPUnit_Framework_TestCase
{
	public $product;

	public function setUp()
	{
		$this->product = new Products();
	}

	public function testAddProducts()
	{
		$this->assertEquals(1, $this->product->add(1));
		$this->assertEquals(2, $this->product->add(1));
		$this->assertEquals(3, $this->product->add(1));
		$this->assertEquals(5, $this->product->add(1));
	}

	public function testRemoverProducts()
	{
		$this->assertEquals(1, $this->product->remove(1));
		$this->assertEquals(2, $this->product->remove(1));
		$this->assertEquals(3, $this->product->remove(1));
		$this->assertEquals(5, $this->product->remove(1));
	}
}