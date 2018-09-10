<?php

interface ArrayInterface
{
	public function inArray($num);
}

abstract class AbstractArray implements ArrayInterface
{
	public $arr;
	public $count;

	public function __construct(array $arr)
	{
		$this->arr = $arr;
		$this->myCount();
	}
	
	abstract protected function myCount();

	public function inArray($num)
	{

	}
}


class MyArray extends AbstractArray
{
	protected function myCount()
	{
		$this->count = count($this->arr);
	}

}


class MyArray2 extends MyArray
{
	protected function myCount()
	{
		parent::myCount();
		$this->count++;
	}
}


$arr = [4,79,4,5,68,0,3,9];

$arrObj = new MyArray2($arr);

function myFunction(ArrayInterface $obj)
{
	$obj->inArray(2);
}

myFunction($arrObj);

var_dump($arrObj);